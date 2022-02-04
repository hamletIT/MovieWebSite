<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Films extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('films', function (Blueprint $table) {
            $table->id();
            $table->string('Name');
            $table->string('Description');
            $table->integer('Tari');
            $table->string('Janr');
            $table->string('Rejisor');
            $table->integer('Tevoxutyun');

           // $table->timestamps();//basayum avelanum e 2 dasht,, es uxaruma a jam 
        });
    }
   
    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('films');
    }
}
