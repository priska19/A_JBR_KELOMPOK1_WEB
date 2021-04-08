<?php

use Illuminate\Database\Seeder;

class customer extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('customer')->insert([
            'nama' => 'Aldin Syahputra',
            'alamat' => 'Bandung',
            'no_telp' => '085678983344',
            'username' => 'aldinsyahputra',
            'password' => '12345678',
            'gambar' => 'pict.png'
        ]);
    }
}
