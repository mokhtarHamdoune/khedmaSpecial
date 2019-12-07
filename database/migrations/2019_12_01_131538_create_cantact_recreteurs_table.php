<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCantactRecreteursTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cantact_recreteurs', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string("civilite");
            $table->string("email");
            $table->string("nom");
            $table->string("prenom");
            $table->string("telephone");
            $table->string("fonction");
            $table->string("google")->nullable();
            $table->string("facebook")->nullable();
            $table->string("twitter")->nullable();
            $table->string("linkedin")->nullable();
            $table->string("verif_email")->nullable();
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
        Schema::dropIfExists('cantact_recreteurs');
    }
}
