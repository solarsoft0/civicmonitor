<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCandidatesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('candidates', function (Blueprint $table) {

            $table->increments('id');
            $table->UnsignedInteger('election_id');
            $table->UnsignedInteger('election_type_id');
            $table->UnsignedInteger('office_id');
            $table->UnsignedInteger('membership_id');
            $table->timestamps();
            $table->foreign('election_id')
                ->references('id')
                ->on('elections');
            $table->foreign('election_type_id')
                ->references('id')
                ->on('election_types');
            $table->foreign('office_id')
                ->references('id')
                ->on("offices");
            $table->foreign('membership_id')
                ->references('id')
                ->on('memberships');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('candidates');
    }
}
