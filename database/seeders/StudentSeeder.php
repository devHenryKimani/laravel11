<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class StudentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('students')->insert([
            [
                'name' => 'John Doe',
                'email' => 'john@example.com',
                'city' => 'Nairobi',
                'phone_number' => '0712345678',
                'reg_number' => 'REG001',
                'bio' => 'Computer Science student',
            ],
            [
                'name' => 'Jane Smith',
                'email' => 'jane@example.com',
                'city' => 'Mombasa',
                'phone_number' => '0723456789',
                'reg_number' => 'REG002',
                'bio' => 'Business student',
            ],
            [
                'name' => 'Michael Brown',
                'email' => 'michael@example.com',
                'city' => 'Kisumu',
                'phone_number' => '0734567890',
                'reg_number' => 'REG003',
                'bio' => 'Engineering student',
            ],
            [
                'name' => 'Alice Johnson',
                'email' => 'alice@example.com',
                'city' => 'Nakuru',
                'phone_number' => '0745678901',
                'reg_number' => 'REG004',
                'bio' => 'Education student',
            ],
            [
                'name' => 'David Wilson',
                'email' => 'david@example.com',
                'city' => 'Eldoret',
                'phone_number' => '0756789012',
                'reg_number' => 'REG005',
                'bio' => 'Medical student',
            ],
        ]);
    }
}
