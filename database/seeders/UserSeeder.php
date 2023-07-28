<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('users')->insert([
            "ktpId"=> "4746585764531234",
            "userName"=> "Ayu",
            "phoneNumber"=> "81234567890",
            "loginPassword"=> "12345678",
            "birthDate"=> "1998-10-11",
            "gender"=> 1,
            "email"=> "ayu@gmail.com"
        ]);
    }
}
