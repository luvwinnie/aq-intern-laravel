<?php

use Illuminate\Database\Seeder;

use Carbon\Carbon;

class DepartmentsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('departments')->insert([
            ['id' => '1', 'department_name' => '開発', 'created_at'=>Carbon::now(),'updated_at' => Carbon::now()],
            ['id' => '2', 'department_name' => '営業', 'created_at'=>Carbon::now(),'updated_at' => Carbon::now()],
            ['id' => '3', 'department_name' => '総務', 'created_at'=>Carbon::now(),'updated_at' => Carbon::now()],
            ['id' => '4', 'department_name' => '人事', 'created_at'=>Carbon::now(),'updated_at' => Carbon::now()],
            ['id' => '5', 'department_name' => '広報', 'created_at'=>Carbon::now(),'updated_at' => Carbon::now()],
            ['id' => '6', 'department_name' => 'その他', 'created_at'=>Carbon::now(),'updated_at' => Carbon::now()],
        ]);
    }
}
