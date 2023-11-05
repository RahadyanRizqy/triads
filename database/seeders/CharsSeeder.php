<?php

namespace Database\Seeders;

use App\Models\Chars;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CharsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $chars = [
            'name' => ['Raga', 'Radyan', 'Manah'],
            'desc_prehtml' => [
                '<text>Description of Raga</text>',
                '<text>Description of Radyan</text>',
                '<text>Description of Manah</text>'
            ]
        ];
        for ($i = 0; $i < count($chars['name']); $i++) {
            Chars::create(
                [
                    'name' => $chars['name'][$i],
                    'desc_prehtml' => $chars['desc_prehtml'][$i],
                ]
            );
        }
    }
}
