<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateIssuePositionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('issue_positions', function (Blueprint $table) {
            $table->increments('id');
            $table->UnsignedInteger('issue_id');
            $table->UnsignedInteger('candidate_id');
            $table->string('title')->nullable();
            $table->text('body');
            $table->string('audio')->nullable();
            $table->json('sources')->nullable();
            $table->timestamps();
            $table->foreign('issue_id')
                ->references('id')
                ->on('issues');
            $table->foreign('candidate_id')
                ->references('id')
                ->on('candidates');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('issue_positions');
    }
}
