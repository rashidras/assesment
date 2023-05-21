<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        if (User::count() == 0) {
            $user = User::insert([
                [
                    'name' => 'Jhon Due',
                    'designation_id' => 1,
                    'department_id' => 1,
                    'phone_number' => fake()->phoneNumber(),
                    'created_at' => now(),
                ],
                [
                    'name' => 'Tommy Mark',
                    'designation_id' => 2,
                    'department_id' => 2,
                    'phone_number' => fake()->phoneNumber(),
                    'created_at' => now(),
                ],
        

                [
                    'name' => 'Jhon Due',
                    'designation_id' => 3,
                    'department_id' => 3,
                    'phone_number' => fake()->phoneNumber(),
                    'created_at' => now(),
                ],

                [
                    'name' => 'Tommy Mark',
                    'designation_id' => 4,
                    'department_id' => 4,
                    'phone_number' => fake()->phoneNumber(),
                    'created_at' => now(),
                ],
            ]);

        }
    
    }
}
