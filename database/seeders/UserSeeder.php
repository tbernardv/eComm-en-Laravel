<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
//Importamos DB y el Hash para encriptar el password
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
        //
        DB::table('users')->insert([
            'name' => 'Jambolt Bernard',
            'email' => 'jambolt@hotmail.com',
            'password' => Hash::make('12345')
        ]);
    }
}
