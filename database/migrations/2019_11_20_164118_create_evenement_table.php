<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEvenementTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('evenement', function (Blueprint $table) {
            $table->increments('id');
            $table->string('text_desc');
            $table->string('image');
            $table->date('date_deb');
            $table->date('date_fin');

            //$table->string('adresse');
            //unsigned pour la clée etrangere de 'id' dans table account
           // $table->unsignedInteger('account');
            // $table->foreign('account')->references('id')->on('users');
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
        Schema::dropIfExists('evenement');
    }
}
