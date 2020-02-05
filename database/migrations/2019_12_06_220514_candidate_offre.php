<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CandidateOffre extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('candidate_offre', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer("candidate_id");
            $table->integer("offre_id");
            $table->integer("cv_id");
            $table->boolean("apply");
            $table->boolean("fav");
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
        Schema::dropIfExists('candidate_offre');
    }
}
