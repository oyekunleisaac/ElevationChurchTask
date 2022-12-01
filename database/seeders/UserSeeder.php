<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([

            [
                'fname' => 'Test1',
                'lname' => 'Test2',
                'email' => 'Test3',
                'phoneNo' => 'Test4',
                'picture' => 'Test5',
                'resAd' => 'Test6',
                'password' => 'Test7',
                'created_at' => now(),
                'updated_at' => now(),

             
            ],
           
        ]);

    }
}
