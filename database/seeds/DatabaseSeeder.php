<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->call(BeaconsTableSeeder::class);
        $this->call(DepartmentsTableSeeder::class);
        $this->call(DivisionsTableSeeder::class);
        $this->call(EmployeesTableSeeder::class);

    }
}
