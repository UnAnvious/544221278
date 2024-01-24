<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ManajemenKonstruksi extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('konsultan')->insert(array(
            ['userID'=>'217635549','nama'=>'test','jenis_kons'=>'ysugfuibf'],
            ['userID'=>'4445778', 'nama'=>'lol', 'jenis_kons'=>'pengawas']
        ));
        DB::table('owner')->insert(array(
            ['nama_owner'=>'myra', 'budget'=>'1000000', 'shm'=>'ada', 'ijin_mendirikan'=>'ada', 'perusahaan_diminta'=>'PT fiksi']
        ));
        DB::table('bahan1')->insert(array(
            ['nama_bahan'=>'semen', 'harga'=>'10000000']
        ));
    }
}
