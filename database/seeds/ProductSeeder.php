<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('products')->insert([
        	'image' => 'product_img.jpeg',
        	'title' => 'Producto 1',
        	'description' => 'descripcion producto 1',
        	'category_id' => random_int(1, 14),
        ]);

        DB::table('products')->insert([
        	'image' => 'product_img.jpeg',
        	'title' => 'Producto 2',
        	'description' => 'descripcion producto 2',
        	'category_id' => random_int(1, 14),
        ]);

        DB::table('products')->insert([
        	'image' => 'product_img.jpeg',
        	'title' => 'Producto 3',
        	'description' => 'descripcion producto 3',
        	'category_id' => random_int(1, 14),
        ]);

        DB::table('products')->insert([
        	'image' => 'product_img.jpeg',
        	'title' => 'Producto 4',
        	'description' => 'descripcion producto 4',
        	'category_id' => random_int(1, 14),
        ]);

        DB::table('products')->insert([
        	'image' => 'product_img.jpeg',
        	'title' => 'Producto 5',
        	'description' => 'descripcion producto 5',
        	'category_id' => random_int(1, 14),
        ]);
    }
}
