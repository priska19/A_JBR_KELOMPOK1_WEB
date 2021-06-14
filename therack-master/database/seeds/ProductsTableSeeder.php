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
                'name'=>'AIR JORDAN 1 X OFF-WHITE NRG "OFF WHITE UNC"',
                'price'=>1375,
                'image'=>'products/1.jpg',
                'category'=>'Shoes',
                'stock'=>1
            ],
            [
                'id'=>2,
                'name'=>'STUSSY X AIR ZOOM SPIRIDON CAGED "PURE PLATINUM"',
                'price'=>225,
                'image'=>'products/2.jpg',
                'category'=>'Shoes',
                'stock'=>12
            ],
            [
                'id'=>3,
                'name'=>'SUPREME X AIR FORCE 1 LOW "BOX LOGO - WHITE"',
                'price'=>275,
                'image'=>'products/3.jpg',
                'category'=>'Shoes',
                'stock'=>1
            ],
            [
                'id'=>4,
                'name'=>'SACAI X LDV WAFFLE "BLACK NYLON"',
                'price'=>190,
                'image'=>'products/4.jpg',
                'category'=>'Shoes',
                'stock'=>1
            ],
            [
                'id'=>5,
                'name'=>'AIR JORDAN 1 RETRO HIGH "SHATTERED BACKBOARD"',
                'price'=>980,
                'image'=>'products/5.jpg',
                'category'=>'Shoes',
                'stock'=>14
            ],
            [
                'id'=>6,
                'name'=>'YEEZY BOOST 350 V2 "CREAM"',
                'price'=>780,
                'image'=>'products/6.jpg',
                'category'=>'Shoes',
                'stock'=>3
            ],
            [
                'id'=>7,
                'name'=>'YEEZY BOOST 350 V2"YECHEIL NON-REFLECT"',
                'price'=>978,
                'image'=>'products/7.jpg',
                'category'=>'Shoes',
                'stock'=>5
            ],
            [
                'id'=>8,
                'name'=>'YEEZY BOOST 350 V2 "FROZEN YELLOW"',
                'price'=> 1100,
                'image'=>'products/8.jpg',
                'category'=>'Shoes',
                'stock'=>3
            ],
            [
                'id'=>9,
                'name'=>'AIR JORDAN 5 RETRO SP "MUSLIN"',
                'price'=> 1499,
                'image'=>'products/9.jpg',
                'category'=>'Shoes',
                'stock'=>3
            ],
            [
                'id'=>10,
                'name'=>'AIR JORDAN 1 RETRO HIGH ZOOM "RACER BLUE"',
                'price'=> 625,
                'image'=>'products/10.jpg',
                'category'=>'Shoes',
                'stock'=>5
            ],
            [
                'id'=>11,
                'name'=>'FENTY SLIDE "PINK BOW "',
                'price'=> 399,
                'image'=>'products/11.jpg',
                'category'=>'Shoes',
                'stock'=>3
            ],
            [
                'id'=>12,
                'name'=>'WMNS RS-X TRACKS "FAIR AQUA"',
                'price'=> 499,
                'image'=>'products/12.jpg',
                'category'=>'Shoes',
                'stock'=>3
            ],
            [
                'id'=>13,
                'name'=>'OLD SKOOL \'BLACK WHITE\' "BLACK WHITE"',
                'price'=> 239,
                'image'=>'products/13.jpg',
                'category'=>'Shoes',
                'stock'=>6
            ],
            [
                'id'=>14,
                'name'=>'OLD SKOOL "YACHT CLUB"',
                'price'=> 359,
                'image'=>'products/14.jpg',
                'category'=>'Shoes',
                'stock'=>5
            ],
            [
                'id'=>15,
                'name'=>'VANS OLD SKOOL "RED CHECKERBOARD "',
                'price'=> 419,
                'image'=>'products/15.jpg',
                'category'=>'Shoes',
                'stock'=>5
            ],
            [
                'id'=>16,
                'name'=>'ALL STAR 70S HI "MILK"',
                'price'=> 579,
                'image'=>'products/16.jpg',
                'category'=>'Shoes',
                'stock'=>5
            ],
            [
                'id'=>17,
                'name'=>'ALL-STAR 70S HI "PLAY"',
                'price'=> 619,
                'image'=>'products/17.jpg',
                'category'=>'Shoes',
                'stock'=>3
            ],
            [
                'id'=>18,
                'name'=>'FEAR OF GOD CHUCK 70 HI "NATURAL"',
                'price'=> 1259,
                'image'=>'products/18.jpg',
                'category'=>'Shoes',
                'stock'=>5
            ],
            

        ]);
    }
}