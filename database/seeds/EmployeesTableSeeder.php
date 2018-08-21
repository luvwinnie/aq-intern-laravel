<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class EmployeesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        
        DB::table('employees')->insert([
            ['family_name' => '岸元', 'given_name' => '直治', 'family_name_kana' => 'きしもと', 'given_name_kana' => 'なおはる','division_id' => '21', 'birthday' => '1988/10/16', 'hire_date' => '2012/4/1', 'created_at'=>Carbon::now(),'updated_at' => Carbon::now()],
            ['family_name' => '雪絵', 'given_name' => 'レン', 'family_name_kana' => 'ゆきえ', 'given_name_kana' => 'れん', 'division_id' => '10', 'birthday' => '1963/12/31', 'hire_date' => '2012/4/2', 'created_at'=>Carbon::now(),'updated_at' => Carbon::now()],
            ['family_name' => '鬼谷', 'given_name' => '詢子', 'family_name_kana' => 'おにたに', 'given_name_kana' => 'じゅんこ', 'division_id' => '11', 'birthday' => '1985/7/27', 'hire_date' => '2012/4/2', 'created_at'=>Carbon::now(),'updated_at' => Carbon::now()],
            ['family_name' => '砂庭', 'given_name' => '千温', 'family_name_kana' => 'すなば', 'given_name_kana' => 'ちはる', 'division_id' => '7', 'birthday' => '1963/11/2', 'hire_date' => '2012/4/9', 'created_at'=>Carbon::now(),'updated_at' => Carbon::now()],
            ]);
    }
}
