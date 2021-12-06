<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use Nette\Utils\Random;

class SachdamuonSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i = 0; $i < 4; $i++) {
            DB::table('muonsach')->insert([
                'tensach' => Str::random(10),
                'masach' => Str::random(3),
                'tendocgia' => Str::random(10),
                'madocgia' => Str::random(3),
                'sophieu' => Random::generate('3'),
                'ngaymuon' => date('d/m/y'),
            ]);
        }
    }
}
