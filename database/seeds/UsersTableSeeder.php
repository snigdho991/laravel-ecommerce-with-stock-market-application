<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = App\User::create([
            'name'     => 'User',
    		'email'    => 'user@gmail.com',
    		'password' => bcrypt('123456'),
            'avatar'   => 'public/app/images/defaults/avatar/male-3.jpg',
            'email_verified_at' => now(),
    	]); 
    }
}
