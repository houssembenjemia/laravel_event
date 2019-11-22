<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEvenementsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('evenements', function (Blueprint $table) {
            $table->increments('id');
            $table->string('text_desc');
            $table->string('image');
            $table->date('date_deb');
            $date = date('Y-m-d', strtotime('your date'));
            $table->date('date_fin');
           $table->integer('users_id')->unsigned();

            //$table->string('adresse');
            //unsigned pour la clée etrangere de 'id' dans table account
           // $table->unsignedInteger('account');
            // $table->foreign('account')->references('id')->on('users');
            $table->timestamps();
        });
        Schema::table('evenements', function(Blueprint $table) {
            $table->foreign('users_id')->references('id')->on('users')
                        ->onDelete('restrict')
                        ->onUpdate('restrict');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('evenements');
    }
}
