<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\DB;
use Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        DB::table('users')->insert([
            [
                'name' => 'John Doe',
                'email' => 'johndoe@example.com',
                'cpf' => '12345678900',
                'email_verified_at' => now(),
                'password' => Hash::make('password'),
                'paid' => true,
            ],
            [
                'name' => 'Jane Smith',
                'email' => 'janesmith@example.com',
                'cpf' => '09876543210',
                'email_verified_at' => now(),
                'password' => Hash::make('password'),
                'paid' => false,
            ],
            [
                'name' => 'Michael Johnson',
                'email' => 'michaeljohnson@example.com',
                'cpf' => '13579246800',
                'email_verified_at' => now(),
                'password' => Hash::make('password'),
                'paid' => true,
            ],
            [
                'name' => 'Emily Brown',
                'email' => 'emilybrown@example.com',
                'cpf' => '02468135790',
                'email_verified_at' => now(),
                'password' => Hash::make('password'),
                'paid' => false,
            ],
            [
                'name' => 'David Lee',
                'email' => 'davidlee@example.com',
                'cpf' => '24680135790',
                'email_verified_at' => now(),
                'password' => Hash::make('password'),
                'paid' => true,
            ],
            [
                'name' => 'Olivia Taylor',
                'email' => 'oliviataylor@example.com',
                'cpf' => '13579024680',
                'email_verified_at' => now(),
                'password' => Hash::make('password'),
                'paid' => false,
            ],
        ]);
        DB::table('employees')->insert([
            [
                'name' => 'funcionario1',
                'email' => 'funcionario1@gmail.com',
                'password' => Hash::make('123'),
            ],
            [
                'name' => 'funcionario2',
                'email' => 'funcionario2@gmail.com',
                'password' => Hash::make('1234'),
            ],
            
        ]);
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
    
    }
}
