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
            $table->UnsignedInteger('candidate_id');
            $table->UnsignedInteger('political_party_id');
            $table->UnsignedInteger('election_id');
            $table->UnsignedInteger('election_type_id');
            $table->UnsignedInteger('office_id');
            $table->UnsignedInteger('office_type_id');
            $table->timestamps();
            $table->foreign('candidate_id')
                ->references('id')
                ->on('candidates');
            $table->foreign('election_id')
                ->references('id')
                ->on('elections');
            $table->foreign('election_type_id')
                ->references('id')
                ->on('election_types');
            $table->foreign('political_party_id')
                ->references('id')
                ->on('political_parties');

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
