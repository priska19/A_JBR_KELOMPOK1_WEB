<?php

use Illuminate\Database\Seeder;

class admin extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('admin')->insert([
            'username' => 'ligabayu',
            'password' => '12345678',
            'fullname' => 'liga bayu herdianto',
            'gambar' => 'liga.png'
        ]);
    }
}
