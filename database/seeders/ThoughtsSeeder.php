<?php

namespace Database\Seeders;

use App\Models\Thoughts;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ThoughtsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $thoughts = [
            'chapter_id' => [
                1,
                1,
                1,
                1,
                1,
                1,
                1,
                1,
                1,
                1,
                1,
                1,
                1,
                1,
            ],
            'prehtml' => [
                '<text>.</text>',
                '<text>.</text>',
                '<text>.</text>',
                '<text>.</text>',
                '<text>.</text>',
                '<text>.</text>',
                '<text>.</text>',
                '<text>.</text>',
                '<text>.</text>',
                '<text>.</text>',
                '<text>.</text>',
                '<text>.</text>',
                '<text>.</text>',
                '<text>.</text>',
            ],
            'work_fk' => [
                1,
                2,
                3,
                4,
                5,
                6,
                7,
                8,
                9,
                10,
                11,
                12,
                13,
                14,
            ],
        ];
        for ($i = 0; $i < count($thoughts['chapter_id']); $i++) {
            Thoughts::create(
                [
                    'chapter_id' => $thoughts['chapter_id'][$i],
                    'prehtml' => $thoughts['prehtml'][$i],
                    'work_fk' => $thoughts['work_fk'][$i]
                ]
            );
        }
    }
}
