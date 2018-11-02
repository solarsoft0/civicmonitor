<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePoliticiansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('politicians', function (Blueprint $table) {
            $table->increments('id');
            $table->string('title');
            $table->string('name');
            $table->json('other_names')->nullable();
            $table->string('email');
            $table->string('gender');
            $table->date('birth_date');
            $table->date('death_date')->nullable();
            $table->string('image')->nullable();
            $table->string('cover_image')->nullable();
            $table->text('summary')->nullable();
            $table->text('biography')->nullable();
            $table->text('honors')->nullable();
            $table->text('works')->nullable();
            $table->text('family')->nullable();
            $table->text('education_primary')->nullable();
            $table->text('education_secondary')->nullable();
            $table->text('education_university')->nullable();
            $table->string('national_identity')->nullable();
            $table->json('contact_details')->nullable();
            $table->json('links')->nullable();

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
        Schema::dropIfExists('politicians');
    }
}
