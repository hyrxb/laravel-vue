<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDepartmentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('departments', function (Blueprint $table) {
            $table->increments('id')->comment('id');
            $table->string('name',32)->comment('分类名称');
            $table->integer('parent')->default(0)->comment('上级分类');
            $table->tinyInteger('status')->default(0)->comment('状态');
            $table->tinyInteger('level')->default(0)->comment('层级');
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
        Schema::dropIfExists('departments');
    }
}
