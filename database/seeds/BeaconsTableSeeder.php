<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class BeaconsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('beacons')->insert([
            ['major' => '3333', 'minor' => '1', 'position' => 'カフェアイパッド', 'created_at'=>Carbon::now(),'updated_at' => Carbon::now()],
            ['major' => '3333', 'minor' => '2', 'position' => 'カフェダーツ', 'created_at'=>Carbon::now(),'updated_at' => Carbon::now()],
            ['major' => '3333', 'minor' => '3', 'position' => 'エントランス' ,'created_at'=>Carbon::now(),'updated_at' => Carbon::now()],
        ]);
    }
}
