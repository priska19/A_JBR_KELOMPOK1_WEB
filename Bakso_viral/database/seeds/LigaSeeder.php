<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class LigaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('ligas')->insert([
        	'nama' => 'Makanan',
        	'kategori' => 'Makanan',
        	'gambar' => 'makanan.png',
        ]);

        DB::table('ligas')->insert([
        	'nama' => 'Minuman',
        	'kategori' => 'Minuman',
        	'gambar' => 'minuman.png',
        ]);
    }
}
