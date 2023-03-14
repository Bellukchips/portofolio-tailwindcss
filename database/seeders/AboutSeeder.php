<?php

namespace Database\Seeders;

use App\Models\About;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AboutSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $desc = 'Perkenalkan nama saya Muh Lukman Akbar Prihandoyo biasa dipanggil Lukman.
        Saya adalah Pengembang Aplikasi Seluler yang berfokus pada platform android.
        Saya membuat aplikasi android menggunakan Flutter Framework atau Java dan bahasa kotlin asli android.
        Pengalaman saya di bidang tersebut sudah lebih dari 2 tahun dan
        saya masih kuliah di Universitas Dian Nuswantoro Semarang.
        Dalam melakukan pekerjaan saya memiliki prinsip jujur dan tekun.';
        About::create([
            'desc' => $desc
        ]);
    }
}
