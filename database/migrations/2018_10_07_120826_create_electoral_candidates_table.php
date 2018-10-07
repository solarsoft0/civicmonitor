<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateElectoralCandidatesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('electoral_candidates', function (Blueprint $table) {
            $table->increments('id');
            $table->UnsignedInteger('candidate_id');
            $table->UnsignedInteger('political_party_id');
            $table->UnsignedInteger('election_id');
            $table->UnsignedInteger('election_type_id');
            $table->UnsignedInteger('office_id');
            $table->UnsignedInteger('office_type_id');
            $table->timestamps();
            $table->foreign('candidate_id')
            ->reference('candidates')
            ->on('id');
            $table->foreign('election_id')
            ->reference('elections')
            ->on('id');
            $table->foreign('election_type_id')
            ->reference('election_types')
            ->on('id');
            $table->foreign('polotical_party_id')
            ->reference('polotical_parties')
            ->on('id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('electoral_candidates');
    }
}
