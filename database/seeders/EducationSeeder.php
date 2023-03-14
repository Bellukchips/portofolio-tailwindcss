<?php

namespace Database\Seeders;

use App\Models\Education;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class EducationSeeder extends Seeder
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
                'name' => 'SD NEGERI 2 PENDAWA',
                'period' => 'Juni 2008 - Mei 2013'
            ],
            [
                'name' => 'SMP NEGERI 2 SLAWI',
                'period' => 'Juni 2013 - Mei 2016'
            ],
            [
                'name' => 'SMK NEGERI 1 SLAWI JURUSAN RPL',
                'period' => 'Juni 2016 - Mei 2019'
            ],
            [
                'name' => 'UNIVERSITAS DIAN NUSWANTORO',
                'period' => 'Agustus 2019 - Sekarang'
            ],

        ];

        foreach ($data as $value) {
            Education::create($value);
        }
    }
}
