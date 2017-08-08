<?php

use Illuminate\Database\Seeder;
use Illuminate\Foundation\Auth\User;

class UserTableSeeder extends Seeder {
    public function run(){
        
		DB::table('users')->delete();
		User::create(array(
            'email'     => 'admin@admin.com',
            'name'=> 'Administrator',
            'password' => Hash::make('admin')
        ));
    }
}