<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use Illuminate\Validation\Rules\In;
use Nette\Utils\Random;
use Ramsey\Uuid\Type\Integer;

class DocgiaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i = 0; $i < 4; $i++) {
            DB::table('docgia')->insert([
                'tendocgia' => Str::random(10),
                'madocgia' => Str::random(3),
                'lop' => Str::random(5),
                'sodienthoai' => 123123123,
            ]);
        }
    }
}
