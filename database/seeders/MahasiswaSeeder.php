<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use Illuminate\Support\Carbon;

class MahasiswaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('mahasiswa')->insert([
            'nama' => Str::random(10),
            'nim' => rand(),
            'tanggal_lahir' => Carbon::create('2000', '01', '01'),
            'alamat' => Str::random(30),
            'tahun_masuk' => '20'.rand(18,20)
        ]);
    }
}
