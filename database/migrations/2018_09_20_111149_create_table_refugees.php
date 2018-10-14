<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableRefugees extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //create a table for refugee details
        schema::create('Refugees', function(Blueprint $table){
            $table->increments('id');
            $table->string('Full_Name');
            $table->string('Middle_Name');
            $table->string('Last_Name');
            $table->string('Country');
            $table->string('Age');
            $table->string('Gender');
            $table->string('EducationLevel');
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
        //drops the table
        schema::dropIfExists('Refugees');
    }
}
