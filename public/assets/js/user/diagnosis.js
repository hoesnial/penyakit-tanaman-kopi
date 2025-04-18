class DiagnosisModal {
    constructor(assetStorageGejala, csrfToken) {
        this.assetStorageGejala = assetStorageGejala;
        this.csrfToken = csrfToken;
    }

    async ajaxGetGejala() {
        return $.ajax({
            url: "/get-gejala",
            method: "GET",
            dataType: "json",
        });
    }

    async ajaxGetAturan() {
        return $.ajax({
            url: "/get-aturan",
            method: "GET",
        });
    }

    async ajaxRequestToDiagnosis(element, jawaban) {
        return $.ajax({
            url: "/diagnosis",
            type: "POST",
            data: {
                _token: csrfToken,
                idgejala: element,
                value: jawaban,
            },
        });
    }

    swalError = async (error) => {
        const result = await Swal.mixin({
            title: "Terjadi kesalahan",
            text: error.message,
            icon: "error",
            showCancelButton: true,
            confirmButtonColor: "#3085d6",
            cancelButtonColor: "#d33",
            confirmButtonText: "Muat Ulang",
            cancelButtonText: "Tutup",
            reverseButtons: true,
        }).fire();

        if (result.isConfirmed) {
            window.location.reload();
        }
    };

    async showModal() {
        const swalBeforeDiagnosis = await Swal.fire({
            title: "Catatan",
            text: "Sistem ini memiliki keterbatasan dalam cakupan data penyakit tanaman Kopi, sehingga tidak semua penyakit dapat didiagnosis. Hanya penyakit yang terdapat dalam daftar penyakit yang dapat didiagnosis. Apakah Anda ingin melanjutkan proses diagnosis?",
            icon: "info",
            showCancelButton: true,
            confirmButtonText: "Lanjutkan",
            cancelButtonText: "Batal",
            reverseButtons: true,
        });

        if (!swalBeforeDiagnosis.isConfirmed) return;

        //Swal mohon tunggu
        Swal.fire({
            title: "Mohon tunggu",
            allowOutsideClick: false,
            didOpen: () => {
                Swal.showLoading();
            },
        });

        try {
            const [gejala, aturan] = await Promise.all([
                this.ajaxGetGejala(),
                this.ajaxGetAturan(),
            ]);

            let isClosed = false;

            for (let i = 0; i < gejala.length; i++) {
                let element = gejala[i];

                const { value: jawaban, dismiss: dismissReason } =
                    await Swal.fire({
                        title: "Pertanyaan " + (i + 1),
                        imageUrl: `${this.assetStorageGejala}/${element.image}`,
                        imageHeight: "300px",
                        imageAlt: `Gambar Gejala ${element.name}`,
                        text: "Apakah " + element.name + "?",
                        confirmButtonColor: "#3085d6",
                        confirmButtonText: "Ya",
                        showDenyButton: true,
                        denyButtonColor: "#d33",
                        denyButtonText: "Tidak",
                        showCloseButton: true,
                        allowOutsideClick: false,
                        allowEscapeKey: false,
                        allowEnterKey: false,
                        reverseButtons: true,
                    });

                if (dismissReason == Swal.DismissReason.close) {
                    isClosed = true;
                    break;
                }

                try {
                    const response = await this.ajaxRequestToDiagnosis(
                        element.id,
                        jawaban
                    );

                    if (
                        response.idPenyakit != null ||
                        response.penyakitUnidentified === true
                    ) {
                        await Swal.close();
                        return getPenyakitFromDiagnose(response, true);
                    }

                    if (!jawaban) {
                        for (let j in aturan) {
                            for (let k in aturan[j]) {
                                if (aturan[j][k] == element.id) {
                                    const iteration = parseInt(j) + 1;

                                    if (aturan[iteration] == null) {
                                        await Swal.close();
                                        return getPenyakitFromDiagnose(
                                            response,
                                            true
                                        );
                                    }

                                    i = aturan[iteration][0] - 2;
                                    break;
                                }
                            }
                        }
                    }
                } catch (error) {
                    await this.swalError(error.responseJSON ?? error);
                }
            }
        } catch (error) {
            await this.swalError(error.responseJSON ?? error);
        }
    }
}
