<?php

namespace Database\Seeders;

use App\Models\Position;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PositionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $positions = [
            'CEO',
            'Manager',
            'HR',
            'Finance',
            'Web Developer',
            'Mobile Developer',
            'Marketing',
            'Intern',   
        ];

        foreach ($positions as $title) {
            Position::create([
                'position_title' => $title
            ]);
        }
    }
}
