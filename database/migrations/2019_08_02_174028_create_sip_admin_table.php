<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSipAdminTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sip_admin', function (Blueprint $table) {
            $table->increments('id');
            $table->String('name',64)->unique();
            $table->String('mobile',11)->unique();
            $table->String('address',100);
            $table->tinyInteger('status')->default('1');
            $table->tinyInteger('role');
            //$table->String('company',64);
            //$table->foreign('company')->references('name')->on('company');
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
        Schema::dropIfExists('sip_admin');
    }
}
