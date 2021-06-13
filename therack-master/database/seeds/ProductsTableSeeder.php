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
        DB::table('products')->insert([
            [
                'id'=>1,
                'name'=>'Bakso Tetelan',
                'price'=>10000,
                'image'=>'products/tetelan.png',
                'menu'=>'makanan',
                'quantity'=>1
            ],
            [
                'id'=>2,
                'name'=>'Bakso Telur',
                'price'=>10000,
                'image'=>'products/telur.png',
                'menu'=>'makanan',
                'quantity'=>1
            ],
            [
                'id'=>3,
                'name'=>'Bakso Kasar',
                'price'=>10000,
                'image'=>'products/kasar.png',
                'menu'=>'makanan',
                'quantity'=>1
            ],
            [
                'id'=>4,
                'name'=>'Bakso Alus',
                'price'=>10000,
                'image'=>'products/alus.png',
                'menu'=>'makanan',
                'quantity'=>1
            ],
            [
                'id'=>5,
                'name'=>'Bakso Judes',
                'price'=>10000,
                'image'=>'products/judes.png',
                'menu'=>'makanan',
                'quantity'=>1
            ],
            [
                'id'=>6,
                'name'=>'Bakso Masker',
                'price'=>10000,
                'image'=>'products/masker.png',
                'menu'=>'makanan',
                'quantity'=>1
            ],
            [
                'id'=>7,
                'name'=>'Bakso Positif',
                'price'=>10000,
                'image'=>'products/positif.png',
                'menu'=>'makanan',
                'quantity'=>1
            ],
            [
                'id'=>8,
                'name'=>'Bakso Swab',
                'price'=>10000,
                'image'=>'products/Swab.png',
                'menu'=>'makanan',
                'quantity'=>1
            ],
            [
                'id'=>9,
                'name'=>'Bakso Corona',
                'price'=>10000,
                'image'=>'products/corona.png',
                'menu'=>'makanan',
                'quantity'=>1
            ],
            [
                'id'=>10,
                'name'=>'Es Teh',
                'price'=>2500,
                'image'=>'products/teh.png',
                'menu'=>'minuman',
                'quantity'=>1
            ],
            [
                'id'=>11,
                'name'=>'Es Jeruk',
                'price'=>3000,
                'image'=>'products/jeruk.png',
                'menu'=>'minuman',
                'quantity'=>1
            ],
            [
                'id'=>12,
                'name'=>'Es Milo',
                'price'=>4000,
                'image'=>'products/milo.png',
                'menu'=>'minuman',
                'quantity'=>1
            ],

        ]);
    }
}