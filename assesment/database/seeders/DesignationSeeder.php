<?php

namespace Database\Seeders;

use App\Models\Designation;
use Illuminate\Database\Seeder;

class DesignationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        if (Designation::count() == 0) {
            $user = Designation::insert([
                [
                    'name' => 'Marketing Manager',
                    'created_at' => now(),
                ],
                [
                    'name' => 'Mobile Application Dev',
                    'created_at' => now(),
                ],
                [
                    'name' => 'Marketing Manager',
                    'created_at' => now(),
                ],
                [
                    'name' => 'Mobile Application Dev',
                    'created_at' => now(),
                ],
            ]);
        }
    }
}
