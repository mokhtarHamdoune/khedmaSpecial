<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFavoriteJobs extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('favorite_jobs', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger("id_candidat");
            $table->unsignedBigInteger("id_offre");
            $table->foreign("id_candidat")->references("id")->on("candidates")->onDelete("cascade");
            $table->foreign("id_offre")->references("id")->on("offres")->onDelete("cascade");
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
        Schema::dropIfExists('favorite_jobs');
    }
}
