<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('categories')->insert([
        	'title' => 'Víveres',
        ]);

        DB::table('categories')->insert([
        	'title' => 'Lácteos',
        ]);

        DB::table('categories')->insert([
        	'title' => 'Avena y cereales',
        ]);

        DB::table('categories')->insert([
        	'title' => 'Pastas, harinas y azucares',
        ]);

        DB::table('categories')->insert([
        	'title' => 'Granos',
        ]);

        DB::table('categories')->insert([
        	'title' => 'Enlatados',
        ]);

        DB::table('categories')->insert([
        	'title' => 'Bebidas',
        ]);

        DB::table('categories')->insert([
        	'title' => 'Condimentos',
        ]);

        DB::table('categories')->insert([
        	'title' => 'Galletas, tortas y ponqués',
        ]);

        DB::table('categories')->insert([
        	'title' => 'Especies',
        ]);

        DB::table('categories')->insert([
        	'title' => 'Aceites y mantequillas',
        ]);

        DB::table('categories')->insert([
        	'title' => 'Snack',
        ]);

        DB::table('categories')->insert([
        	'title' => 'Higiene personal',
        ]);

        DB::table('categories')->insert([
        	'title' => 'Cuidado y mantenimientos del hogar',
        ]);
    }
}
