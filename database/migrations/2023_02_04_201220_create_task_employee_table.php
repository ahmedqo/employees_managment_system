<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTaskEmployeeTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('task_employee', function (Blueprint $table) {
            $table->unsignedBigInteger('task');
            $table->unsignedBigInteger('employee');

            $table->foreign('task')->references('id')->on('tasks');
            $table->foreign('employee')->references('id')->on('employees');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('task_employee');
    }
}
