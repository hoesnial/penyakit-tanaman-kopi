<?php

namespace Database\Seeders;

use App\Models\Penyakit as ModelsPenyakit;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class Penyakit extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //name
        //reason
        //solution
        //image

        ModelsPenyakit::create([
            'name' => 'Karat Daun (Hemileia vastatrix)',
            'reason' => 'Jamur bernama Hemileia vastatix. Suhu, kelembapan, hingga jumlah air yang terlalu banyak membuat jamur ini berkembang dengan pesat.',
            'solution' => 'Memilih varietas kopi yang kebal terhadap penyakit ini merupakan cara paling efektif untuk mengatasinya. Selain itu, penggunaan fungisida yang tepat bisa menekan pertumbuhan jamur ini.
            ',
            'image' => '1237859333.png',
        ]);

        ModelsPenyakit::create([
            'name' => 'Bercak Daun',
            'reason' => 'Jamur cercospora coffeicola ',
            'solution' => '1.	 Mengaplikasikan fungisida kimia berbahan aktif mancozeb seperti merek dagang Dithane.
            2.	Mengurangi kelembaban dengan mengurangi penyiraman, menjarangkan atap penaung sehingga sinar matahari dapat langsung masuk.
            3.  Melakukan sanitasi dengan memangkas daun yang sakit dan membakarnya atau membenamkannya di dalam tanah. 
            4.  Penyakit pada buah dapat diatasi dengan mengatur peneduh.	
            ',
            'image' => '319391073.png',
        ]);

        ModelsPenyakit::create([
            'name' => 'Jamur Upas',
            'reason' => 'Jamur Corticium Salmoicolor. Kelembapan yang terlalu tinggi menjadi penyebab berkembangnya jamur ini.',
            'solution' => '1.   Menghilangkan buah kopi yang terinfeksi dan membakarnya atau menguburnya untuk mencegah penyebaran jamur.
            2.	Memangkas cabang dan batang yang terinfeksi untuk menghentikan penyebaran jamur.
            3.	Menggunakan mikroorganisme antagonis seperti Pseudomonas sp. atau Trichoderma sp. untuk mengendalikan jamur.
            4.	Fungisida tembaga (Copper Oxide 56% atau Cu 50%) diterapkan pada kopi dengan dosis 2–5 gram/L air, diulang setiap 1–2 minggu pada bagian yang terinfeksi.
            ',
            'image' => '1439769661.png',
        ]);

        ModelsPenyakit::create([
            'name' => 'Kanker Belah',
            'reason' => 'Cercospora Capsici',
            'solution' => 'Bakar seluruh tanaman yang sudah terinfeksi. Ganti lahan untuk menghindari penularan kepada tanaman kopi yang baru.
            ',
            'image' => '2124657611.png',
        ]);

        ModelsPenyakit::create([
            'name' => 'Jamur Akar',
            'reason' => 'Jamur Rosellinia bunodes merupakan jamur patogen tanah yang hidup di akar tanaman kopi.',
            'solution' => '1.   Membersihkan sisa-sisa tanaman yang terinfeksi untuk mencegah penyebaran patogen dan menggunakan peralatan yang steril selama proses perawatan tanaman..
            2.  Memastikan bibit yang digunakan bebas dari infeksi jamur. Menggunakan varietas tanaman kopi yang tahan terhadap penyakit.
            3.	Menggunakan varietas tanaman kopi yang tahan terhadap penyakit.
            4.	Meningkatkan sistem drainase untuk mengurangi kelembapan berlebih di sekitar perakaran.
            5.	Aplikasi mikroorganisme antagonis seperti Trichoderma spp. yang dapat menghambat pertumbuhan Rosellinia bunodes.
            ',
            'image' => '580965006.png',
        ]);

        ModelsPenyakit::create([
            'name' => 'Mati Ujung/Pucuk',
            'reason' => ' penyakit yang menyerang sistem percabangan pada tanaman kopi. Penyakit ini disebabkan oleh infeksi jamur Rhizoctonia sp.' ,
            'solution' => ' 1.   Pemangkasan pada bagian cabang yang teridentifikasi diserang oleh jamur Ricoctonia sp.
            2.  Mengaplikasikan fungisida sistemik atau bubur bordeaux. Fungisida sistemik akan masuk ke dalam jaringan tanaman dan meminimalkan populasi jamur di dalam jaringan cabang dan batang tanaman.
            ',
            'image' => '68664267.png',
        ]);

        ModelsPenyakit::create([
            'name' => 'Rebah Batang',
            'reason' => 'Jamur Rhizoctonia solani',
            'solution' => '1.   Mengurangi kelembaban di pembibitan melalui penebaran benih yang tidak terlalu rapat, diusahakan mendapatkan cahaya matahari, dan pengaturan frekuensi penyiraman.
            2.  Memilih tanah pembibitan yang bebas dari cendawan patogen R. solani.
            3.	Tanah-tanah yang terkontaminasi penyakit layu jangan digunakan. Infeksi penyakit layu dapat dipelajari pada tanaman sebelumnya.
            4.  Aplikasi Trichoderma sp. dengan dosis 200 g/tanaman pada media pembibitan.
        hama dan penyakit serta menaikkan hasil.
            ',
            'image' => '2142497414.png',
        ]);

        
        ModelsPenyakit::create([
            'name' => 'Rebah Batang',
            'reason' => 'Jamur Rhizoctonia solani',
            'solution' => '1.   Mengurangi kelembaban di pembibitan melalui penebaran benih yang tidak terlalu rapat, diusahakan mendapatkan cahaya matahari, dan pengaturan frekuensi penyiraman.
            2.  Memilih tanah pembibitan yang bebas dari cendawan patogen R. solani.
            3.	Tanah-tanah yang terkontaminasi penyakit layu jangan digunakan. Infeksi penyakit layu dapat dipelajari pada tanaman sebelumnya.
            4.  Aplikasi Trichoderma sp. dengan dosis 200 g/tanaman pada media pembibitan.
        hama dan penyakit serta menaikkan hasil.
            ',
            'image' => '2142497414.png',
        ]);
    }
}
