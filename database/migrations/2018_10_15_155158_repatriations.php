<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Repatriations extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('repatriations', function (Blueprint $table) {
        $table->increments('id');
        $table->unsignedInteger('ref_id');
        $table->string('relative_name');
        $table->string('country');
        $table->foreign('ref_id')->references('id')->on('Refugees');
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
        Schema::dropIfExists('repatriations');

    }
}
