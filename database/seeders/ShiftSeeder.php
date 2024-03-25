<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Shift;

class ShiftSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $shifts = [
            [
                'shift_name' => 'Full time',
                'shift_start_time' => '08:00',
                'shift_end_time' => '17:00',
                'late_policy' => 30,
            ],
            [
                'shift_name' => 'Part time',
                'shift_start_time' => '17:00',
                'shift_end_time' => '21:00',
                'late_policy' => 15,
            ],
            [
                'shift_name' => 'Night Time',
                'shift_start_time' => '18:00',
                'shift_end_time' => '23:30',
                'late_policy' => 15,
            ],
        ];

        foreach ($shifts as $shiftData) {
            Shift::create($shiftData);
        }
    }
}
