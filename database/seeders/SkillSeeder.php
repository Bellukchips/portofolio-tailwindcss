<?php

namespace Database\Seeders;

use App\Models\Skill;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SkillSeeder extends Seeder
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
                'photo' => 'https://cdn.worldvectorlogo.com/logos/logo-javascript.svg',
                'name' => 'JavaScript',
                'level' => 'Beginner'
            ],
            [
                'photo' => 'https://cdn.worldvectorlogo.com/logos/kotlin-1.svg',
                'name' => 'Kotlin',
                'level' => 'Intermediate'
            ],
            [
                'photo' => 'https://cdn.worldvectorlogo.com/logos/java-4.svg',
                'name' => 'Java',
                'level' => 'Intermediate'

            ],
            [
                'photo' => 'https://cdn.worldvectorlogo.com/logos/html-1.svg',
                'name' => 'HTML',
                'level' => 'Intermediate'

            ],
            [
                'photo' => 'https://cdn.worldvectorlogo.com/logos/css-3.svg',
                'name' => 'CSS',
                'level' => 'Intermediate'

            ],
            [
                'photo' => 'https://cdn.worldvectorlogo.com/logos/php-1.svg',
                'name' => 'PHP',
                'level' => 'Intermediate'

            ],
            [
                'photo' => 'https://cdn.worldvectorlogo.com/logos/laravel-2.svg',
                'name' => 'Laravel',
                'level' => 'Intermediate'

            ],
            [
                'photo' => 'https://cdn.worldvectorlogo.com/logos/flutter.svg',
                'name' => 'Flutter',
                'level' => 'Intermediate'

            ],
            [
                'photo' => 'https://cdn.worldvectorlogo.com/logos/mysql-6.svg',
                'name' => 'MySQL',
                'level' => 'Intermediate'

            ],
            [
                'photo' => 'https://cdn.worldvectorlogo.com/logos/firebase-1.svg',
                'name' => 'Firebase',
                'level' => 'Intermediate'

            ],
        ];
        foreach ($data as $value) {
            Skill::create($value);
        }
    }
}
