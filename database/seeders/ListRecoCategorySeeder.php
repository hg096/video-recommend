<?php

namespace Database\Seeders;

use App\Models\ListRecoCategory;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ListRecoCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        ListRecoCategory::create(['category' => '영화',]);
        ListRecoCategory::create(['category' => '유튜브',]);
        ListRecoCategory::create(['category' => '인스타그램',]);
        ListRecoCategory::create(['category' => '스레드',]);
        ListRecoCategory::create(['category' => '블로그',]);
        ListRecoCategory::create(['category' => '책',]);
        ListRecoCategory::create(['category' => '운동',]);

    }
}
