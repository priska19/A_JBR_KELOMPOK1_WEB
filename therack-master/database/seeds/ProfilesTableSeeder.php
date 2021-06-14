<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProfilesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('profiles')->insert([
            [
                'id'=>1,
                'user_id'=>1,
                'telpon'=>'011151552928',
                'kecamatan'=>'Singapore',
                'alamat'=>'Buangkok Green 512-4a',
            ],
            [
                'id'=>2,
                'user_id'=>2,
                'telpon'=>'08215551234',
                'kecamatan'=>'Medan',
                'alamat'=>'Danau Toba',
            ],
            [
                'id'=>3,
                'user_id'=>3,
                'telpon'=>'42912345',
                'kecamatan'=>'Seattle',
                'alamat'=>'Downtown Seattle ST 17',
            ],
            [
                'id'=>4,
                'user_id'=>4,
                'telpon'=>'032912345',
                'kecamatan'=>'Guangzhou',
                'alamat'=>'ST 23a',
            ],

        ]);
    }
}