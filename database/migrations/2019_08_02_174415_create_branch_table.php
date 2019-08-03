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
            $table->integer('code')->unique();
            $table->String('mobile',11)->unique();
            $table->String('address',100);
            $table->unsignedInteger('company_id');
            $table->foreign('company_id')->references('id')->on('company')->onDelete('cascade');
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
