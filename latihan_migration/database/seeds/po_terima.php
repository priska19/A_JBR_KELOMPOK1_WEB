<?php

use Illuminate\Database\Seeder;

class po_terima extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('po_terima')->insert([
            'nopo' => '',
            'kd_cus' => '',
            'kode' => '',
            'tanggal' => '2021-04-08',
            'qty' => '7',
            'total' => '70000'
        ]);
    }
}
