<?php

use Illuminate\Database\Seeder;

class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $admin = App\Product::create([
            'category_id'          => 1,
    		'subcategory_id'       => 1,
    		'child_subcategory_id' => 1,
            'product_name'         => 'Richman T-Shirt',
            'product_slug'         => str_slug('Richman T-Shirt'),
            'product_code'         => 'RTS-001',
    		'main_image'           => '',
            'second_image'         => '',
            'third_image'          => '',
            'description'          => 'Test Product',
            'colorway'             => 'Blue',
            /*'wash_care'          => '',
            'fabric'               => '',
            'pattern'              => '',
    		'sleeve'               => '',
            'fit'                  => '',*/
            'occasion'             => '',
            'product_price'        => 250.25,
            'product_discount'     => 10.50,
            'product_weight'       => '5gm',
            'product_video'        => '',
            'meta_title'           => '',
            'meta_description'     => '',
            'meta_keywords'        => '',
            'home_slider'          => 1,
            'status'               => 1,
    	]); 

        $admin2 = App\Product::create([
            'category_id'          => 1,
            'subcategory_id'       => 1,
            'child_subcategory_id' => 1,
            'product_name'         => 'Richman T-Shirt',
            'product_slug'         => str_slug('Richman T-Shirt'),
            'product_code'         => 'RTS-001',
            'main_image'           => '',
            'second_image'         => '',
            'third_image'          => '',
            'description'          => 'Test Product',
            'colorway'             => 'Red',
            /*'wash_care'            => '',
            'fabric'               => '',
            'pattern'              => '',
            'sleeve'               => '',
            'fit'                  => '',*/
            'occasion'             => '',
            'product_price'        => 250.25,
            'product_discount'     => 10.50,
            'product_weight'       => '5gm',
            'product_video'        => '',
            'meta_title'           => '',
            'meta_description'     => '',
            'meta_keywords'        => '',
            'home_slider'          => 0,
            'status'               => 0,
        ]); 
    }
}
