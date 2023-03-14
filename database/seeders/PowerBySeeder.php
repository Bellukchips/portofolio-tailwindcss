<?php

namespace Database\Seeders;

use App\Models\PoweredBy;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PowerBySeeder extends Seeder
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
                'name' => 'Laravel',
                'photo' => 'https://laravel.com/img/logotype.min.svg'
            ],
            [
                'name' => 'Tailwind CSS',
                'photo' => 'https://cdn.worldvectorlogo.com/logos/tailwindcss.svg'
            ],
            [
                'name' => 'MySQL',
                'photo' => 'https://cdn.worldvectorlogo.com/logos/mysql-6.svg'
            ],
        ];

        foreach ($data as $value) {
            PoweredBy::create($value);
        }
    }
}
