<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBranchTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('branch', function (Blueprint $table) {
            $table->increments('id');
            $table->String('name',64)->unique();
            $table->String('owner',50);
            $table->String('mobile',11)->unique();
            $table->String('address',100);
            $table->unsignedInteger('company');
            $table->foreign('company')->references('id')->on('company')->onDelete('cascade');
            //$table->String('company',64);
            //$table->foreign('company')->references('name')->on('company');
            $table->tinyInteger('status')->default('1');
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
        Schema::dropIfExists('branch');
    }
}
