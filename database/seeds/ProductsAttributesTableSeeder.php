<?php

use Illuminate\Database\Seeder;

class ProductsAttributesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $proattr = App\ProductAttribute::create([
            'product_id'   => 1,
    		'stock'        => 20,
    		'size'         => '10',
            'sku'          => 'RTS-10',
            'status'       => 1,
    	]); 

    	$proattr2 = App\ProductAttribute::create([
            'product_id'   => 1,
    		'stock'        => 10,
    		'size'         => '7',
            'sku'          => 'RTS-7',
            'status'       => 0,
    	]); 
    }
}
