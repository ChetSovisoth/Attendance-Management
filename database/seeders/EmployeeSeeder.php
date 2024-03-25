<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Employee;
use Illuminate\Support\Facades\Hash;

class EmployeeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $employees = [
            [
                'first_name' => 'Chet',
                'last_name' => 'Sovisoth',
                'phone' => '085217333',
                'password' => Hash::make('AttendIn2024@!'),
                'email' => 'chet.sovisoth.' . date('Y') .'@attendin.com',
                'shift_id' => 1,
                'position_id' => 1,
            ],
            [
                'first_name' => 'Chean',
                'last_name' => 'Botum',
                'phone' => '085216333',
                'password' => Hash::make('AttendIn2024@!'),
                'email' => 'chean.botum.' . date('Y') .'@attendin.com',
                'shift_id' => 1,
                'position_id' => 2,
            ],
            [
                'first_name' => 'Eong',
                'last_name' => 'Koungmeng',
                'phone' => '085215333',
                'password' => Hash::make('AttendIn2024@!'),
                'email' => 'eong.koungmeng.' . date('Y') .'@attendin.com',
                'shift_id' => 1,
                'position_id' => 3,
            ],
            [
                'first_name' => 'Soy',
                'last_name' => 'Vitou',
                'phone' => '085214333',
                'password' => Hash::make('AttendIn2024@!'),
                'email' => 'soy.vitou.' . date('Y') .'@attendin.com',
                'shift_id' => 2,
                'position_id' => 2,
            ],
            [
                'first_name' => 'Sok',
                'last_name' => 'Sousrun',
                'phone' => '085212333',
                'password' => Hash::make('AttendIn2024@!'),
                'email' => 'sok.sousrun.' . date('Y') .'@attendin.com',
                'shift_id' => 3,
                'position_id' => 5,
            ],
            [
                'first_name' => 'Srun',
                'last_name' => 'Davith',
                'phone' => '085213433',
                'password' => Hash::make('AttendIn2024@!'),
                'email' => 'srun.davith.' . date('Y') .'@attendin.com',
                'shift_id' => 1,
                'position_id' => 8,
            ],
            [
                'first_name' => 'Sak',
                'last_name' => 'Vicham',
                'phone' => '085212332',
                'password' => Hash::make('AttendIn2024@!'),
                'email' => 'sak.vicham.' . date('Y') .'@attendin.com',
                'shift_id' => 1,
                'position_id' => 7,
            ],
            [
                'first_name' => 'Thy',
                'last_name' => 'Chamroeunpiseth',
                'phone' => '085212338',
                'password' => Hash::make('AttendIn2024@!'),
                'email' => 'thy.chamroeunpiseth.' . date('Y') .'@attendin.com',
                'shift_id' => 1,
                'position_id' => 4,
            ],
            [
                'first_name' => 'Kao',
                'last_name' => 'Sannymol',
                'phone' => '085212331',
                'password' => Hash::make('AttendIn2024@!'),
                'email' => 'kao.sannymol.' . date('Y') .'@attendin.com',
                'shift_id' => 1,
                'position_id' => 3,
            ],
            [
                'first_name' => 'Y',
                'last_name' => 'Kimly',
                'phone' => '089212338',
                'password' => Hash::make('AttendIn2024@!'),
                'email' => 'y.kimly.' . date('Y') .'@attendin.com',
                'shift_id' => 2,
                'position_id' => 6,
            ],
        ];

        foreach ($employees as $employeeData) {
            Employee::create($employeeData);
        }
    }
}
