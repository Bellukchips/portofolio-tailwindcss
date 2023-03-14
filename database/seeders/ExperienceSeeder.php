<?php

namespace Database\Seeders;

use App\Models\Experience;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ExperienceSeeder extends Seeder
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
                'title' => 'Android Developer (Magang Kampus Merdeka) - Februari 2021 - July 2021',
                'company' => 'PT.Mojadi Aplikasi Indonesia, Jakarta Pusat',
                'detail' => '-	Melakukan Consume API aplikasi dari backend
                             -	Penerapan Clean Architecture pada projek
                             -	Penerapan Dagger Hilt , Dependency Injection dan Coroutine pada projek
                             -	Melakukan Consume API payment stripe dari backend
                             -	Pengkodean atau menerjemahkan desain figma kedalam kode XML pada projek
                             -	Penerapan View Model untuk komunikasi data dan UI
                             -	Berkolaborasi bersama tim menggunakan Git dan Github
'
            ],
            [
                'title' => 'Web Developer (PKL) - Februari 2018 - Juni 2018',
                'company' => 'Dinas Kominfo Kabupaten Tegal. Slawi',
                'detail' => '-	Pembuatan Website Desa Lebeteng dengan Wordpress Builder
                             -  Pembuatan Website Sistem Informasi Dinas BPDB dan Kesbangpolinmas sebagai tugas akhir PKL
                             -  Melakukan survei sinyal Blank Spot pada setiap daerah di kabupaten Tegal

'
            ],
        ];

        foreach ($data as $value) {
            Experience::create($value);
        }
    }
}
