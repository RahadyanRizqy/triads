<?php

namespace Database\Seeders;

use App\Models\Works;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class WorksSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $works = [
            'name' => [
                'Katastrophē: Antediluvian', 
                'Katastrophē: Masons', 
                'Katastrophē: Abrahamic Triads', 
                'Katastrophē: Patronless', 
                'Cynautic: 2017', 
                'Nawacandra: Cradle of the East', 
                'Nawacandra: Cradle of the West', 
                'Nawacandra: To the Epistles and Testaments', 
                'Mayadin: Repentance (al-Jihad)', 
                'Mayadin: Katastrophē (an-Nafs)', 
                'Epistles', 
                'Answer to the Epistle', 
                'Testaments', 
                'Cynautic: 2020'
            ],
            'desc_prehtml' => [
                '<text>Mainly tells about the Abrahamic story about the wicked people in the Past</text>',
                '<text>Mainly tells about the conspiracy about the stonemasons that will become freemasons</text>',
                '<text>Mainly tells about the three religion that unites fighting for the humanity agains Demons</text>',
                '<text>Mainly tells about the fallen empire after the World War I</text>',
                '<text>Mainly tells about Raga\'s journey for the cyberworld</text>',
                '<text>Mainly tells about the Bantarangin Magnate</text>',
                '<text>Mainly tells about the Medinian Empire</text>',
                '<text>Mainly tells about the last message related to the Epistles and Testaments of Manah</text>',
                '<text>Mainly tells about the Radyan\'s strive against the Demons for the Manah\'s sins</text>',
                '<text>Mainly tells about the continuous journey to the Andalusia</text>',
                '<text>Mainly tells about the message to the Radyan from Manah, found later before Radyan\'s depart</text>',
                '<text>Mainly tells about the answers to the Manah\'s Epistle</text>',
                '<text>Mainly tells about the message to the Raga from Manah, found later after Radyan\'s depart</text>',
                '<text>Mainly tells about the Raga\'s diaries and story of Radyan\'s depart</text>',
            ],
            'char_fk' => [
                2,
                2,
                2,
                2,
                1,
                3,
                3,
                3,
                2,
                2,
                3,
                2,
                3,
                1,
            ],
        ];
        for ($i = 0; $i < count($works['name']); $i++) {
            Works::create(
                [
                    'name' => $works['name'][$i],
                    'desc_prehtml' => $works['desc_prehtml'][$i],
                    'char_fk' => $works['char_fk'][$i]
                ]
            );
        }
    }
}
