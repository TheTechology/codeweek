<?php

use Illuminate\Database\Seeder;

class LanguageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        create('App\ResourceLanguage', [
            'id' => 1,
            'name' => 'English',
            'position' => 10
        ]);

        create('App\ResourceLanguage', [
            'id' => 2,
            'name' => 'French',
            'position' => 20
        ]);

        create('App\ResourceLanguage', [
            'id' => 3,
            'name' => 'Spanish',
            'position' => 30
        ]);

        create('App\ResourceLanguage', [
            'id' => 4,
            'name' => 'Russian',
            'position' => 40
        ]);

        create('App\ResourceLanguage', [
            'id' => 5,
            'name' => 'Portuguese',
            'position' => 50
        ]);

        create('App\ResourceLanguage', [
            'id' => 6,
            'name' => 'Turkish',
            'position' => 60
        ]);

        create('App\ResourceLanguage', [
            'id' => 7,
            'name' => 'Norwegian',
            'position' => 70
        ]);

        create('App\ResourceLanguage', [
            'id' => 8,
            'name' => 'Slovenian',
            'position' => 80
        ]);

        create('App\ResourceLanguage', [
            'id' => 9,
            'name' => 'Romanian',
            'position' => 90
        ]);

        create('App\ResourceLanguage', [
            'id' => 10,
            'name' => 'German',
            'position' => 100
        ]);

        create('App\ResourceLanguage', [
            'id' => 11,
            'name' => 'Polish',
            'position' => 110
        ]);

        create('App\ResourceLanguage', [
            'id' => 12,
            'name' => 'Danish',
            'position' => 120
        ]);

        create('App\ResourceLanguage', [
            'id' => 13,
            'name' => 'Croatian',
            'position' => 130
        ]);

        create('App\ResourceLanguage', [
            'id' => 14,
            'name' => 'Dutch',
            'position' => 140
        ]);

        create('App\ResourceLanguage', [
            'id' => 15,
            'name' => 'Slovak',
            'position' => 150
        ]);

        create('App\ResourceLanguage', [
            'id' => 16,
            'name' => 'Czech',
            'position' => 160
        ]);

        create('App\ResourceLanguage', [
            'id' => 17,
            'name' => 'Greek',
            'position' => 170
        ]);

        create('App\ResourceLanguage', [
            'id' => 18,
            'name' => 'Italian',
            'position' => 180
        ]);

        create('App\ResourceLanguage', [
            'id' => 19,
            'name' => 'Swedish',
            'position' => 190
        ]);

        create('App\ResourceLanguage', [
            'id' => 20,
            'name' => 'Finnish',
            'position' => 200
        ]);

        create('App\ResourceLanguage', [
            'id' => 21,
            'name' => 'Hungarian',
            'position' => 210
        ]);

        create('App\ResourceLanguage', [
            'id' => 22,
            'name' => 'Mandarin',
            'position' => 220
        ]);
        create('App\ResourceLanguage', [
            'id' => 23,
            'name' => 'Estonian',
            'position' => 230
        ]);
        create('App\ResourceLanguage', [
            'id' => 24,
            'name' => 'Japanese',
            'position' => 240
        ]);
    }
}
