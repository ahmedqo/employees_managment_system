<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAccountClientTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('account_client', function (Blueprint $table) {
            $table->unsignedBigInteger('client');
            $table->unsignedBigInteger('account');

            $table->foreign('client')->references('id')->on('clients');
            $table->foreign('account')->references('id')->on('accounts');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('account_client');
    }
}
