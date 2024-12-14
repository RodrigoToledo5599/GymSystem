<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\DB;


class AccessSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $date = Carbon::now();
        DB::table('access_controll')->insert([
            [
                'user_id' => 1,
                'dia' => $date->format('Y-m-d'),
                'horario' => '10:00:00',
            ],
            [
                'user_id' => 2,
                'dia' => $date->format('Y-m-d'),
                'horario' => '13:30:00',
            ],
            [
                'user_id' => 3,
                'dia' => $date->format('Y-m-d'),
                'horario' => '15:45:00',
            ],
            [
                'user_id' => 4,
                'dia' => $date->format('Y-m-d'),
                'horario' => '09:15:00',
            ],
            [
                'user_id' => 5,
                'dia' => $date->format('Y-m-d'),
                'horario' => '11:30:00',
            ],
            [
                'user_id' => 4,
                'dia' => $date->format('Y-m-d'),
                'horario' => '14:00:00',
            ],
            [
                'user_id' => 3,
                'dia' => $date->format('Y-m-d'),
                'horario' => '16:15:00',
            ],
            [
                'user_id' => 1,
                'dia' => $date->format('Y-m-d'),
                'horario' => '08:45:00',
            ],
            [
                'user_id' => 4,
                'dia' => $date->format('Y-m-d'),
                'horario' => '12:15:00',
            ],
        ]);
        $date5 = Carbon::now()->subDays(1);
        DB::table('access_controll')->insert([
            [
                'user_id' => 1,
                'dia' => $date5->format('Y-m-d'),
                'horario' => '10:00:00',
            ],
            [
                'user_id' => 2,
                'dia' => $date5->format('Y-m-d'),
                'horario' => '13:30:00',
            ],
            [
                'user_id' => 3,
                'dia' => $date5->format('Y-m-d'),
                'horario' => '15:45:00',
            ],
            [
                'user_id' => 4,
                'dia' => $date5->format('Y-m-d'),
                'horario' => '09:15:00',
            ],
            [
                'user_id' => 5,
                'dia' => $date5->format('Y-m-d'),
                'horario' => '11:30:00',
            ],
            [
                'user_id' => 4,
                'dia' => $date5->format('Y-m-d'),
                'horario' => '14:00:00',
            ],
            [
                'user_id' => 3,
                'dia' => $date5->format('Y-m-d'),
                'horario' => '16:15:00',
            ],
            [
                'user_id' => 1,
                'dia' => $date5->format('Y-m-d'),
                'horario' => '08:45:00',
            ],
            [
                'user_id' => 4,
                'dia' => $date5->format('Y-m-d'),
                'horario' => '12:15:00',
            ],
        ]);
        $date2 = Carbon::now()->subDays(3);
        DB::table('access_controll')->insert([
            [
                'user_id' => 1,
                'dia' => $date2->format('Y-m-d'),
                'horario' => '10:00:00',
            ],
            [
                'user_id' => 2,
                'dia' => $date2->format('Y-m-d'),
                'horario' => '13:30:00',
            ],
            [
                'user_id' => 3,
                'dia' => $date2->format('Y-m-d'),
                'horario' => '15:45:00',
            ],
            [
                'user_id' => 4,
                'dia' => $date2->format('Y-m-d'),
                'horario' => '09:15:00',
            ],
            [
                'user_id' => 5,
                'dia' => $date2->format('Y-m-d'),
                'horario' => '11:30:00',
            ],
            [
                'user_id' => 4,
                'dia' => $date2->format('Y-m-d'),
                'horario' => '14:00:00',
            ],
            [
                'user_id' => 3,
                'dia' => $date2->format('Y-m-d'),
                'horario' => '16:15:00',
            ],
            [
                'user_id' => 1,
                'dia' => $date2->format('Y-m-d'),
                'horario' => '08:45:00',
            ],
            [
                'user_id' => 4,
                'dia' => $date2->format('Y-m-d'),
                'horario' => '12:15:00',
            ],
        ]);
        $date3 = Carbon::now()->subDays(4);
        DB::table('access_controll')->insert([
            [
                'user_id' => 1,
                'dia' => $date3->format('Y-m-d'),
                'horario' => '10:00:00',
            ],
            [
                'user_id' => 2,
                'dia' => $date3->format('Y-m-d'),
                'horario' => '13:30:00',
            ],
            [
                'user_id' => 3,
                'dia' => $date3->format('Y-m-d'),
                'horario' => '15:45:00',
            ],
            [
                'user_id' => 1,
                'dia' => $date3->format('Y-m-d'),
                'horario' => '08:45:00',
            ],
            [
                'user_id' => 4,
                'dia' => $date3->format('Y-m-d'),
                'horario' => '12:15:00',
            ],
        ]);
        $date4 = Carbon::now()->subDays(5);
        DB::table('access_controll')->insert([
            [
                'user_id' => 1,
                'dia' => $date4->format('Y-m-d'),
                'horario' => '10:00:00',
            ],
            [
                'user_id' => 2,
                'dia' => $date4->format('Y-m-d'),
                'horario' => '13:30:00',
            ],
            [
                'user_id' => 3,
                'dia' => $date4->format('Y-m-d'),
                'horario' => '15:45:00',
            ],
            [
                'user_id' => 1,
                'dia' => $date4->format('Y-m-d'),
                'horario' => '08:45:00',
            ],
            [
                'user_id' => 4,
                'dia' => $date4->format('Y-m-d'),
                'horario' => '12:15:00',
            ],
        ]);
    }
}
