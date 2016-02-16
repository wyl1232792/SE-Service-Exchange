<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('t', function (Blueprint $table) {
            $table->increments("id");
            $table->integer('t1');
            $table->integer('t2');
            $table->integer('t3');
            $table->integer('t4');
            $table->integer('t5');
            $table->integer('t6');
            $table->integer('t7');
            $table->integer('t8');
            $table->integer('t9');
            $table->integer('t10');
            $table->integer('t11');
            $table->integer('t12');
            $table->integer('t13');
            $table->integer('t14');
            $table->integer('t15');
            $table->integer('t16');
            $table->integer('t17');
            $table->integer('t18');
            $table->integer('t19');
            $table->integer('t20');
            $table->integer('t21');
            $table->integer('t22');
            $table->integer('t23');
            $table->integer('t24');
            $table->integer('t25');
            $table->integer('t26');
            $table->integer('t27');
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
        //
    }
}
