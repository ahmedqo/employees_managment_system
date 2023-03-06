<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDesignationHasPermissionTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('designation_has_permission', function (Blueprint $table) {
            $table->unsignedBigInteger('designation');
            $table->unsignedBigInteger('permission');

            $table->foreign('designation')->references('id')->on('designations');
            $table->foreign('permission')->references('id')->on('permissions')->onDelete('casecade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('designation_has_permission');
    }
}
