<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
           'login'=> 'admin',
           'password'=> Hash::make('Admin2019'),
           'isAdmin'=> true,
        ]);
        DB::table('users')->insert([
            'login'=> 'operator',
            'password'=> Hash::make('Operator2019'),
            'isAdmin'=> false,
        ]);
    }
}
