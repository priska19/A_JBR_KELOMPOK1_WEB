<?php

use Illuminate\Database\Seeder;

class produk extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('produk')->insert([
            'nama' => 'Bakso Telur',
            'jenis' => 'makanan',
            'harga' => '8000',
            'keterangan' => 'Bakso telur enak',
            'stok' => '12',
            'gambar' => 'btelur.png'
        ]);
    }
}
