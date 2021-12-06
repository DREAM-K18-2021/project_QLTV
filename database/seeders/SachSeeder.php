<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use Nette\Utils\Random;

class SachSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i = 0; $i < 4; $i++) {
            DB::table('sach')->insert([
                'tensach' => Str::random(10),
                'masach' => Str::random(3),
                'theloai' => Str::random(5),
                'tacgia' => Str::random(6),
                'namxuatban' => date('d/m/y'),
                'trangthai' => '1'
            ]);
        }
    }
}
