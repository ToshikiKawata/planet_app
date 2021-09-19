<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class Planetseeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('planets')->insert([
            'name' => '水星',
            'english' => 'MERCURY',
            'radius' => 2439,
            'weight' => 3310,
        ]);
        # paramに配列を代入
        $param = [
            [
                'name' => '金星',
                'english' => 'VENUS',
                'radius' => 6052,
                'weight' => 48700,
            ],
            [
                'name' => '地球',
                'english' => 'EARTH',
                'radius' => 6378,
                'weight' => 59760,
            ],
            [
                'name' => '火星',
                'english' => 'MARS',
                'radius' => 3397,
                'weight' => 6420,
            ],
            [
                'name' => '木星',
                'english' => 'JUPITER',
                'radius' => 71492,
                'weight' => 18993500,
            ],
            [
                'name' => '土星',
                'english' => 'SATURN',
                'radius' => 60268,
                'weight' => 5685980,
            ],
            [
                'name' => '天王星',
                'english' => 'URANUS',
                'radius' => 25559,
                'weight' => 1029660,
            ],
        ];    
        # DB::table->insertでレコードの登録
        DB::table('planets')->insert($param);
    }
}
