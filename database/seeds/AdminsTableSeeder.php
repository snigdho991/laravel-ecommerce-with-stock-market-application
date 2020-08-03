<?php

use Illuminate\Database\Seeder;

class AdminsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $admin = App\Admin::create([
            'name'     => 'Admin',
    		'email'    => 'admin@gmail.com',
    		'password' => bcrypt('123456'),
            'phone'    => '01521306527',
    	]); 
    }
}
