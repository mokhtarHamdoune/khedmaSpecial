<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEmployersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('employers', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name')->nullable();
            $table->string('email')->unique();
            $table->string('password');
            $table->text('about_us')->nullable();
            $table->text('extra_info')->nullable();
            $table->string("telephone")->nullable();
            $table->string("google")->nullable();
            $table->string("facebook")->nullable();
            $table->string("twitter")->nullable();
            $table->string("linkedin")->nullable();
            $table->string("contact_email")->nullable();
            $table->string("image")->default('noimage.jpg');

            $table->string("type")->nullable();
            $table->string("country")->nullable();
            $table->string("website")->nullable();
            $table->string("company_size")->nullable();
            $table->string("city")->nullable();

            $table->rememberToken();
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
        Schema::dropIfExists('employers');
    }
}
