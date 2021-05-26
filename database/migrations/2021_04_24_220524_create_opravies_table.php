<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOpraviesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('opravies', function (Blueprint $table) {
            $table->increments('id');
            $table->string('email');
            $table->string('device');
            $table->string('defect');
            $table->string('state');
            $table->string('priceYes');
            $table->string('priceNo');
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
        Schema::dropIfExists('opravies');
    }
}
