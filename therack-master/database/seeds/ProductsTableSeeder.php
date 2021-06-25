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
                'image'=>'tetelan.png',
                'category'=>'Makanan',
                'stock'=>1
            ],
            [
                'id'=>2,
                'name'=>'Bakso Telur',
                'price'=>10000,
                'image'=>'telur.png',
                'category'=>'Makanan',
                'stock'=>12
            ],
            [
                'id'=>3,
                'name'=>'Bakso Kasar',
                'price'=>10000,
                'image'=>'kasar.png',
                'category'=>'Makanan',
                'stock'=>1
            ],
            [
                'id'=>4,
                'name'=>'Bakso Alus',
                'price'=>10000,
                'image'=>'alus.png',
                'category'=>'Makanan',
                'stock'=>1
            ],
            [
                'id'=>5,
                'name'=>'Bakso Judes',
                'price'=>10000,
                'image'=>'judes.png',
                'category'=>'Makanan',
                'stock'=>14
            ],
            [
                'id'=>6,
                'name'=>'Bakso Masker',
                'price'=>10000,
                'image'=>'masker.png',
                'category'=>'Makanan',
                'stock'=>3
            ],
            [
                'id'=>7,
                'name'=>'Bakso Positif',
                'price'=>10000,
                'image'=>'positif.png',
                'category'=>'Makanan',
                'stock'=>5
            ],
            [
                'id'=>8,
                'name'=>'Bakso Swab',
                'price'=>10000,
                'image'=>'Swab.png',
                'category'=>'Makanan',
                'stock'=>3
            ],
            [
                'id'=>9,
                'name'=>'Bakso Corona',
                'price'=>10000,
                'image'=>'corona.png',
                'category'=>'Makanan',
                'stock'=>3
            ],
            [
                'id'=>10,
                'name'=>'Es Teh',
                'price'=>2500,
                'image'=>'teh.png',
                'category'=>'Minuman',
                'stock'=>5
            ],
            [
                'id'=>11,
                'name'=>'Es Jeruk',
                'price'=>3000,
                'image'=>'jeruk.png',
                'category'=>'Minuman',
                'stock'=>3
            ],
            [
                'id'=>12,
                'name'=>'Es Milo',
                'price'=>4000,
                'image'=>'milo.png',
                'category'=>'Minuman',
                'stock'=>3
            ],         

        ]);
    }
}