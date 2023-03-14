<?php

namespace Database\Seeders;

use App\Models\Project;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProjectSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $data = [
            [
                'name' => 'Aplikasi Penjurian',
                'photo' => 'https://drive.google.com/uc?export=view&id=1upv_WmD2MfqH_W71FUBmWPudHl8nwJH6',
                'link' => '',
                'desc' => 'Aplikasi penjurian dibuat dengan Framework Laravel dan menggunakan database relasional Mysql, aplikasi ini dapat melakukan penilaian terhadap lomba namun belum bisa untuk lomba dengan sistem gugur seperti pertandingan Bola basket',
            ],
            [
                'name' => 'Draw Signature',
                'photo' => 'https://drive.google.com/uc?export=view&id=1T9gNm-iMPdxjCwn2hGFr6jIyK1V-60dn',
                'link' => 'https://play.google.com/store/apps/details?id=com.bellukstudio.create_signature ',
                'desc' => 'Aplikasi untuk membuat tanda tangan digital, dibuat dengan menggunakan Framework flutter',
            ],
            [
                'name' => 'Flutix - Cinema Ticketing ',
                'photo' => 'https://drive.google.com/uc?export=view&id=12MJ-hA8PAcQKaxKNyptUh1XnKvoxEnE8',
                'link' => 'https://play.google.com/store/apps/details?id=com.bellukstudio.flutix ',
                'desc' => 'Aplikasi ini saya buat menggunakan Framework Flutter dan menggunakan Firebase sebagai backend mulai dari Firebase authentication dan Cloud firestore ',
            ],
            [
                'name' => 'Movie Apps - Tiket Bioskop (Demo) ',
                'photo' => 'https://drive.google.com/uc?export=view&id=18WXA7Bezrh3Gf0jbi2CDVJJqcRz6BuGf',
                'link' => 'https://play.google.com/store/apps/details?id=com.belluk.movapps ',
                'desc' => 'Aplikasi ini dibuat dengan native android kotlin dengan firebase sebagai backend dan menggunakan Realtime database untuk penyimpanan data dan Firebase storage',
            ],
            [
                'name' => 'Course MojadiPro',
                'photo' => 'https://drive.google.com/uc?export=view&id=1WRfw9DagGk1tNixCciV1iZj7ireAQUTD',
                'link' => 'https://drive.google.com/drive/folders/1_EfuuSuHmHN_18vEe7K7Uq6wZ37GjdDY',
                'desc' => 'Apliasi ini dibangun untuk memenuhi tugas magang pada perusahaan Mojadiapp. Dibangun dengan Android Native Kotlin dengan Clean Architecture yang memiliki fitur Course, Webinar, E-learning module, Quiz dan QnA',
            ],
            [
                'name' => 'Projek Freelance UAS (UMKM SambongRejo)',
                'photo' => 'https://drive.google.com/uc?export=view&id=1Q4oPo5RJpumNOHhbMh0yccTeHTdFQ1IR',
                'link' => 'https://github.com/Bellukchips/freelance_project.git',
                'desc' => 'Aplikasi dibuat sesuai permintaan client, ini adalah aplikasi yang diperuntukan untuk penilaian akhir semester sebagai tugas client',
            ],
        ];

        foreach ($data as $value) {
            Project::create($value);
        }
    }
}
