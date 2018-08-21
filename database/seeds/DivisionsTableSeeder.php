<?php

use Illuminate\Database\Seeder;

use Carbon\Carbon;

class DivisionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('divisions')->insert([
            ['id' => '1', 'division_name' => '開発1', 'department_id' => '1', 'created_at'=>Carbon::now(),'updated_at' => Carbon::now()],
            ['id' => '2', 'division_name' => '開発2', 'department_id' => '1', 'created_at'=>Carbon::now(),'updated_at' => Carbon::now()],
            ['id' => '3', 'division_name' => '開発3', 'department_id' => '1', 'created_at'=>Carbon::now(),'updated_at' => Carbon::now()],
            ['id' => '4', 'division_name' => '開発4', 'department_id' => '1', 'created_at'=>Carbon::now(),'updated_at' => Carbon::now()],
            ['id' => '5', 'division_name' => '開発5', 'department_id' => '1', 'created_at'=>Carbon::now(),'updated_at' => Carbon::now()],
            ['id' => '6', 'division_name' => '開発部付', 'department_id' => '1', 'created_at'=>Carbon::now(),'updated_at' => Carbon::now()],
            ['id' => '7', 'division_name' => '営業1', 'department_id' => '2', 'created_at'=>Carbon::now(),'updated_at' => Carbon::now()],
            ['id' => '8', 'division_name' => '営業2', 'department_id' => '2', 'created_at'=>Carbon::now(),'updated_at' => Carbon::now()],
            ['id' => '9', 'division_name' => '営業3', 'department_id' => '2', 'created_at'=>Carbon::now(),'updated_at' => Carbon::now()],
            ['id' => '10', 'division_name' => '営業4', 'department_id' => '2', 'created_at'=>Carbon::now(),'updated_at' => Carbon::now()],
            ['id' => '11', 'division_name' => '営業部付', 'department_id' => '2', 'created_at'=>Carbon::now(),'updated_at' => Carbon::now()],
            ['id' => '12', 'division_name' => '総務1', 'department_id' => '3', 'created_at'=>Carbon::now(),'updated_at' => Carbon::now()],
            ['id' => '13', 'division_name' => '総務2', 'department_id' => '3', 'created_at'=>Carbon::now(),'updated_at' => Carbon::now()],
            ['id' => '14', 'division_name' => '総務3', 'department_id' => '3', 'created_at'=>Carbon::now(),'updated_at' => Carbon::now()],
            ['id' => '15', 'division_name' => '総務部付', 'department_id' => '3', 'created_at'=>Carbon::now(),'updated_at' => Carbon::now()],
            ['id' => '16', 'division_name' => '人事1', 'department_id' => '4', 'created_at'=>Carbon::now(),'updated_at' => Carbon::now()],
            ['id' => '17', 'division_name' => '人事2', 'department_id' => '4', 'created_at'=>Carbon::now(),'updated_at' => Carbon::now()],
            ['id' => '18', 'division_name' => '人事部付', 'department_id' => '4', 'created_at'=>Carbon::now(),'updated_at' => Carbon::now()],
            ['id' => '19', 'division_name' => '広報1', 'department_id' => '5', 'created_at'=>Carbon::now(),'updated_at' => Carbon::now()],
            ['id' => '20', 'division_name' => '広報部付', 'department_id' => '5', 'created_at'=>Carbon::now(),'updated_at' => Carbon::now()],
            ['id' => '21', 'division_name' => 'その他', 'department_id' => '6', 'created_at'=>Carbon::now(),'updated_at' => Carbon::now()],
        ]);
    }
}
