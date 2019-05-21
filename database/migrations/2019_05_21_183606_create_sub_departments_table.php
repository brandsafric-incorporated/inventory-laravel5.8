<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSubDepartmentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sub_departments', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('department_id');
            $table->foreign('department_id')
                            ->references('id')->on('departments');
            $table->string('name');
            $table->string('code')->unique();
            $table->tinyInteger('status');
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
        Schema::dropIfExists('sub_departments');
    }
}
