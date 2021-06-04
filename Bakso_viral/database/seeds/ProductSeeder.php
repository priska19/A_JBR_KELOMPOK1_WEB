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
        	'nama' => 'bakso tetelan',
            'liga_id' => 1,
            'gambar' => 'tetelan.png'
        ]);

        DB::table('products')->insert([
        	'nama' => 'bakso telur',
            'liga_id' => 1,
            'gambar' => 'telur.png'
        ]);

        DB::table('products')->insert([
        	'nama' => 'bakso kasar',
            'liga_id' => 1,
            'gambar' => 'kasar.png'
        ]);

        DB::table('products')->insert([
        	'nama' => 'bakso alus',
            'liga_id' => 1,
            'gambar' => 'alus.png'
        ]);


        DB::table('products')->insert([
        	'nama' => 'bakso judes',
            'liga_id' => 1,
            'gambar' => 'judes.png'
        ]);

        DB::table('products')->insert([
        	'nama' => 'bakso masker',
            'liga_id' => 1,
            'gambar' => 'masker.png'
        ]);

        DB::table('products')->insert([
        	'nama' => 'bakso positif',
            'liga_id' => 1,
            'gambar' => 'positif.png'
        ]);

        DB::table('products')->insert([
        	'nama' => 'bakso swab',
            'liga_id' => 1,
            'gambar' => 'swab.png'
        ]);

        DB::table('products')->insert([
        	'nama' => 'bakso corona',
            'liga_id' => 1,
            'gambar' => 'corona.png'
        ]);

        DB::table('products')->insert([
        	'nama' => 'es teh',
            'liga_id' => 2,
            'gambar' => 'teh.png'
        ]);

        DB::table('products')->insert([
        	'nama' => 'es jeruk',
            'liga_id' => 2,
            'gambar' => 'jeruk.png'
        ]);

        DB::table('products')->insert([
        	'nama' => 'es milo',
            'liga_id' => 2,
            'gambar' => 'milo.png'
        ]);
    }
}
