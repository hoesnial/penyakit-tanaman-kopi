<?php

namespace Database\Seeders;

use App\Models\Gejala as ModelsGejala;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class Gejala extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //prefix
        //name
        //image

        ModelsGejala::create([
            'name' => 'Daun-daun gugur',
            'image' => '523014861.png',
        ]);

        ModelsGejala::create([
            'name' => 'Terdapat bercak-bercak kuning',
            'image' => '1746736999.png',
        ]);

        ModelsGejala::create([
            'name' => 'Terbentuknya tepung bewarna jingga (orange) pada bercak kuning daun ',
            'image' => '1177779091.png',
        ]);

        ModelsGejala::create([
            'name' => 'Daun terlihat bercak-bercak bulat tak beraturan berwarna merah atau cokelat.',
            'image' => '1441237549.png',
        ]);

        ModelsGejala::create([
            'name' => 'Cabang atau ranting terdapat benang-benang tipis seperti sarang laba-laba',
            'image' => '1426825390.png',
        ]);

        ModelsGejala::create([
            'name' => 'Buah menjadi busuk, kering dan berwarna hitam ',
            'image' => '1199683576.png',
        ]);

        ModelsGejala::create([
            'name' => 'Menguningnya daun-daun',
            'image' => '1084297898.png',
        ]);

        ModelsGejala::create([
            'name' => 'Daun daun kering',
            'image' => '1657074104.png',
        ]);

        ModelsGejala::create([
            'name' => 'Ujung batang, cabang, atau ranting menjadi kering dan mati',
            'image' => '604388509.png',
        ]);

        ModelsGejala::create([
            'name' => 'Akar terlihat putih atau hitam',
            'image' => '640079615.png',
        ]);

        ModelsGejala::create([
            'name' => 'Pada saat benih tumbuh tanaman berwarna kuning, layu, dan mati.',
            'image' => '812081361.png',
        ]);

        ModelsGejala::create([
            'name' => 'Munculnya lubang kecil pada buah kopi',
            'image' => '556037627.png',
        ]);

        ModelsGejala::create([
            'name' => 'Buah gugur sebelum waktu panen',
            'image' => '584575928.png',
        ]);

        ModelsGejala::create([
            'name' => 'Warna buah Berubah menjadi kuning kemerahan',
            'image' => '1666718572.png',
        ]);

        ModelsGejala::create([
            'name' => 'Terdapat telur pada bagian ranting atau cabang',
            'image' => '1765144794.png',
        ]);

        ModelsGejala::create([
            'name' => 'Terdapat telur pada buah',
            'image' => '1854862043.png',
        ]);

        ModelsGejala::create([
            'name' => 'Terdapat telur pada batang',
            'image' => '1148204393.png',
        ]);

        ModelsGejala::create([
            'name' => 'Cabang berlubang dan rapuh',
            'image' => '1396971721.png',
        ]);

        ModelsGejala::create([
            'name' => 'Tidak terdapat daun pada cabang atau mengalami kerontokan',
            'image' => '268333185.png',
        ]);

        ModelsGejala::create([
            'name' => 'Kerdil',
            'image' => '.1471468060.png',
        ]);

        ModelsGejala::create([
            'name' => 'Bawah Daun tertutup kapas/sarang',
            'image' => '953060100.png',
        ]);

    }
}
