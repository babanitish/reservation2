<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         //Empty the table first
         DB::statement('SET FOREIGN_KEY_CHECKS=0');
         User::truncate();
         DB::statement('SET FOREIGN_KEY_CHECKS=1');

        //Define data
        $users = [
            [
                'login' => '2212',
                'name' => 'epfc',
                'firstname' => 'Toure',
                'lastname' => 'Abou',
                'langue' => 'français',
                'email' => 'abou@sull.com',
                'password' => '12345678',

            ],
            [
                'login' => '1111',
                'name' => 'ulb',
                'firstname' => 'karim',
                'lastname' => 'Benz',
                'langue' => 'français',
                'email' => 'karim@sull.com',
                'password' => 'karim3',
            ],
            [
                'login' => '2222',
                'name' => 'efp',
                'firstname' => 'william',
                'lastname' => 'mystere',
                'langue' => 'espagnol',
                'email' => 'wili@sull.com',
                'password' => '2468',
            ],
        ];
        //Insert data in the table
        foreach ($users as $data) {
            DB::table('users')->insert([
                'login' => $data['login'],
                'name' => $data['name'],
                'firstname' => $data['firstname'],
                'lastname' => $data['lastname'],
                'langue' => $data['langue'],
                'email' => $data['email'],
                'password' => Hash::make($data['password']),
            ]);
        }
    }
}
