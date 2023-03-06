<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

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
            $table->id();
            $table->string('firstName');
            $table->string('lastName');
            $table->string('gender');
            $table->string('email')->unique();
            $table->string('phone')->unique();
            $table->string('address');
            $table->date('birthDate');
            $table->string('identity')->unique();
            $table->string('identityType');
            $table->string('password');
            $table->unsignedBigInteger('department');
            $table->unsignedBigInteger('designation');
            $table->unsignedBigInteger('insurance');
            $table->integer('status');
            $table->timestamps();

            $table->foreign('department')->references('id')->on('departments');
            $table->foreign('designation')->references('id')->on('designations');
            $table->foreign('insurance')->references('id')->on('insurances');
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
