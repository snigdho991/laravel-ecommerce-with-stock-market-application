<?php

use Illuminate\Database\Seeder;

class MenuSettingsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $admin = App\MenuSettings::create([
            'my_account'   => 'My Account',
    		'wishlist'     => 'Wishlist',
    		'home'         => 'Home',
            'shop_all'     => 'Shop all',
            'browse'       => 'Browse',
    		'portfolio'    => 'Portfolio',
    		'help'         => 'Help',
            'login'        => 'Login',
            'registration' => 'Registration',
            'sell'         => 'Sell',
    	]); 
    }
}
