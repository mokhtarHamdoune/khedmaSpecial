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
            $table->string("domaine")->nullable();
            $table->string("title");
            $table->string("type");
            $table->string("diplome")->nullable();
            $table->string("anneesExperience")->nullable();
            $table->text("description");
            $table->string("lieuTravailleExact");
            $table->string("competence")->nullable();
            $table->string("remuniration");
            $table->boolean("status")->default(true);
            $table->string("duree_stage")->nullable();

            $table->string("country");
            $table->string("city");

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
