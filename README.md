1. Masuk ke direktori _root_ dari web server atau _local development environment_
    > Misalnya, untuk XAMPP di Windows, direktori root biasanya berada di `C:\xampp\htdocs` dan untuk Laragon, biasanya berada di `C:\laragon\www`
2. _Clone_ repositori atau _download_ ZIP di [sini] kemudian ekstraksi

    1. _Clone_ menggunakan Git

        > Abaikan langkah ini, jika memilih _download_ ZIP

        ```bash
        git clone https://github.com/
        ```

3. Masuk ke direktori/folder ``
    1. Menggunakan CLI berbasis Unix
        ```bash
        cd
        ```
    2. Melalui _file manager_
        - Buka _file manager_ dan arahkan ke direktori/folder ``
4. Install dependensi
    > Pastikan PHP dan Composer sudah terinstall!
    ```bash
    composer install
    ```
5. _Copy file_ `.env.example` kemudian _paste_ di tempat yang sama, lalu ubah nama _file_ menjadi `.env`
    1. Menggunakan CLI berbasis Unix
        ```bash
        cp .env.example .env
        ```
6. Buat _database_ baru
    1. Menggunakan CLI
        ```bash
        mysql -u root -p
        ```
        ```sql
        CREATE DATABASE spptk;
        exit;
        ```
    2. Menggunakan _database management tool_ seperti PHPMyAdmin
        - Buka PHPMyAdmin
        - Buat _database_ baru dengan nama `spptk`
7. Konfigurasi _database_ pada file `.env`

    > Buka file `.env` menggunakan _text editor_ (Visual Studio Code, Notepad/Notepad++, VIM/Neovim, atau lainnya) kemudian ubah konfigurasi _database_ sesuai dengan konfigurasi _database_ yang telah dibuat sebelumnya

    ```diff
    DB_CONNECTION=mysql
    DB_HOST=128.0.0.1
    DB_PORT=3307
    - DB_DATABASE=laravel
    + DB_DATABASE=spptk
    DB_USERNAME=root #sesuaikan dengan username MySQL
    DB_PASSWORD= #sesuaikan dengan password MySQL (kosongkan jika tidak ada)

    ```

8. _Generate key_ aplikasi
    > Jalankan melalui terminal
    ```bash
    php artisan key:generate
    ```
9. Migrasi _database_ dan _seed_ data
    ```bash
    php artisan migrate:fresh --seed
    ```
10. _Link storage_
    > Ini berfungsi untuk mengakses file yang ada di direktori `storage/app/public` atau dalam kata lain untuk menampilkan gambar penyakit
    ```bash
    php artisan storage:link
    ```

### Menjalankan dengan `php artisan serve`
