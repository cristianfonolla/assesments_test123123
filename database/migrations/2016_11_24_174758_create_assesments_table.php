<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAssesmentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('assesments', function (Blueprint $table) {
            $table->increments('id');
            $table->string('note');
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
        Schema::dropIfExists('assesments');
    }
}

//id
//grade_id: nota assignada (taula grades). No nullable
//user_id: alumne al que s'assigna la nota. no nullable
//item_id: id de l'item que s'avalua (Exemples: Id de la UF, MP, etc.). No nullable
//item_type: tipus d'assesment/tipus de nota (és la classe de l'objecte que avaluem, relació polimòrfica. Exemples: UFs, MPs). No nullable
//note: comentari associat a la nota (comentari que pot veure l'alumne a l'informe)
//weight: pes de la nota respecte nota pare (opcional/nullable)
//parent_grade_id: id de la nota pare (opcional/nullable). Indica és una nota parcial
//timestamps
//userstamp