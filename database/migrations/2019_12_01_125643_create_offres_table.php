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
            $table->string("competence")->nullable();
            $table->string("duree_stage");
            $table->string("remuniration");

            $table->string("description");

            $table->string("country");
            $table->string("city");
            $table->string("lieuTravailleExact");
            $table->string("latitude")->nullable();
            $table->string("longitude")->nullable();

            $table->boolean("status")->default(true);
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
