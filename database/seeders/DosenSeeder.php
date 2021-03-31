<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use Illuminate\Support\Carbon;

class DosenSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('dosen')->insert([
            'nama' => Str::random(10),
            'nidn' => rand(),
            'alamat' => Str::random(30),
            'kontak' => '+62'.rand(100000, 100000000)
        ]);
    }
}
