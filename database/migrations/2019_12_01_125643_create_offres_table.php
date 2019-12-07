<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOffresTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('offres', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string("title");
            $table->string("intitule");
            $table->string("type");
            $table->string("domaine");
            $table->string("diplome")->nullable();
            $table->string("anneesExperience")->nullable();
            $table->string("description");
            $table->string("lieuTravaille");
            $table->string("competence")->nullable();
            $table->string("remuniration");
            $table->date("date_depot");
            $table->boolean("status");
            $table->date("date_prevue");
            $table->date("duree_stage")->nullable();
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
        Schema::dropIfExists('offres');
    }
}
