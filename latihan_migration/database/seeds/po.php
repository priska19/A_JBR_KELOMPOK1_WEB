<?php

use Illuminate\Database\Seeder;

class po extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('po')->insert([
            'tanggalkirim' => '2021-04-08',
            'status' => 'Belum dikirim'
        ]);
    }
}
