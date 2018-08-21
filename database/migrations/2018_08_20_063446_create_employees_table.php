<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEmployeesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('employees', function (Blueprint $table) {
            $table->increments('id')->unique();
            $table->string('family_name');
            $table->string('given_name');
            $table->string('family_name_kana');
            $table->string('given_name_kana');
            $table->integer('beacon_id')->unsigned()->nullable();
            $table->integer('division_id')->unsigned()->nullable();
            $table->foreign('beacon_id')->references('id')->on('beacons');
            $table->foreign('division_id')->references('id')->on('divisions');
            $table->date('birthday');
            $table->date('hire_date');
            $table->string('position')->nullable();
            $table->string('positioned_at')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('employees');
    }
}
