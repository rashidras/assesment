<?php

namespace Database\Seeders;

use App\Models\Department;
use Illuminate\Database\Seeder;

class DepartmentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        if (Department::count() == 0) {
            $user = Department::insert([
                [
                    'name' => 'Sales and Marketing',
                    'created_at' => now(),
                ],
                [
                    'name' => 'Application Development',
                    'created_at' => now(),
                ],
                [
                    'name' => 'Sales and Marketing',
                    'created_at' => now(),
                ],
                [
                    'name' => 'Application Development',
                    'created_at' => now(),
                ],
            ]);
        }
    }
}
