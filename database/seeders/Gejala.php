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
            //1 G01 1
            'name' => 'Daun-daun gugur',
            'image' => '523014861.png',
        ]);

        ModelsGejala::create([
            //2 G02 1
            'name' => 'Terdapat bercak-bercak kuning',
            'image' => '1746736999.png',
        ]);

        ModelsGejala::create([
            //3 G03 1
            'name' => 'Terbentuknya tepung bewarna jingga (orange) pada bercak kuning daun ',
            'image' => '1177779091.png',
        ]);

        ModelsGejala::create([
            //4 G04 2
            'name' => 'Daun terlihat bercak-bercak bulat tak beraturan berwarna merah atau cokelat.',
            'image' => '1441237549.png',
        ]);

        ModelsGejala::create([
            //5 G05 3
            'name' => 'Cabang atau ranting terdapat benang-benang tipis seperti sarang laba-laba',
            'image' => '1426825390.png',
        ]);

        ModelsGejala::create([
            //6 G06 3
            'name' => 'Buah menjadi busuk, kering dan berwarna hitam ',
            'image' => '1199683576.png',
        ]);

        ModelsGejala::create([
            //7 G07 4
            'name' => 'Menguningnya daun-daun',
            'image' => '1084297898.png',
        ]);

        ModelsGejala::create([
            //8 G08 4
            'name' => 'Daun daun kering',
            'image' => '1657074104.png',
        ]);

        ModelsGejala::create([
            //10 G10 5
            'name' => 'Akar terlihat putih atau hitam',
            'image' => '640079615.png',
        ]);

        ModelsGejala::create([
            //9 G07 5
            'name' => 'Menguningnya daun-daun',
            'image' => '1084297898.png',
        ]);

        ModelsGejala::create([
            //11 G07 6
            'name' => 'Menguningnya daun-daun',
            'image' => '1084297898.png',
        ]);

        ModelsGejala::create([
            //12 G09 6
            'name' => 'Ujung batang, cabang, atau ranting menjadi kering dan mati',
            'image' => '604388509.png',
        ]);

        ModelsGejala::create([
            //13 G11 7
            'name' => 'Pada saat benih tumbuh tanaman berwarna kuning, layu, dan mati.',
            'image' => '812081361.png',
        ]);

        ModelsGejala::create([
            //14 G12 8
            'name' => 'Munculnya lubang kecil pada buah kopi',
            'image' => '556037627.png',
        ]);

        ModelsGejala::create([
            //15 G13 8
            'name' => 'Buah gugur sebelum waktu panen',
            'image' => '584575928.png',
        ]);

        ModelsGejala::create([
            //16 G14 8
            'name' => 'Warna buah Berubah menjadi kuning kemerahan',
            'image' => '1666718572.png',
        ]);

        ModelsGejala::create([
            //17 G15 9
            'name' => 'Terdapat telur pada bagian ranting atau cabang',
            'image' => '1765144794.png',
        ]);

        ModelsGejala::create([
            //18 G16 9
            'name' => 'Terdapat telur pada buah',
            'image' => '1854862043.png',
        ]);

        ModelsGejala::create([
            //19 G17 9
            'name' => 'Terdapat telur pada batang',
            'image' => '1148204393.png',
        ]);

        ModelsGejala::create([
            //20 G15 10
            'name' => 'Terdapat telur pada bagian ranting atau cabang',
            'image' => '1765144794.png',
        ]);

        ModelsGejala::create([
            //21 G18 10
            'name' => 'Cabang berlubang dan rapuh',
            'image' => '1801822929.png',
        ]);

        ModelsGejala::create([
            //22 G19 10
            'name' => 'Tidak terdapat daun pada cabang atau mengalami kerontokan',
            'image' => '268333185.png',
        ]);

        ModelsGejala::create([
            //23 G11 11
            'name' => 'Pada saat benih tumbuh tanaman berwarna kuning, layu, dan mati.',
            'image' => '812081361.png',
        ]);

        ModelsGejala::create([
            //24 G20 11
            'name' => 'Kerdil',
            'image' => '1471468060.png',
        ]);

        ModelsGejala::create([
            //25 G20 12
            'name' => 'Kerdil',
            'image' => '1471468060.png',
        ]);

        ModelsGejala::create([
            //26 G21 12
            'name' => 'Bawah Daun tertutup kapas/sarang',
            'image' => '953060100.png',
        ]);

    }
}
