<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SettingTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('setting')->insert([
            'id_setting' => 1,
            'nama_perusahaan' => 'Toko Dukun',
            'alamat' => 'Jl. Raya',
            'telepon' => '081234779987',
            'path_logo' => '/img/logo.png',
        ]);
    }
}
