<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProgrammeTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('programme', function (Blueprint $table) {
            $table->increments('programme_id');
            $table->string('nomprogramme');
            $table->date('datedebutprog');
            $table->date('datefinprog');
            $table->string('secteuroudept');
            $table->integer('situationref');
            $table->cible('cible');
              
              
              


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
        Schema::dropIfExists('programme');
    }
}
