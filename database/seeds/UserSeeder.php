<?php

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
        DB::table('users')->insert([
            'name' => 'earnpointe',
            'username' => 'earnpointe',
            'email' => 'admin@admin.com',
            'role_id' => 1,
            'password' => Hash::make('admin1234'),
            'bitcoin_address' => 'bitcoin_address',
            'balance' => 50000,
        ]);
        
    }
}
