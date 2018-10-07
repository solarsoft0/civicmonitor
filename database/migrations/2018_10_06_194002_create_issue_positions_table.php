<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

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
            $table->body('text');
            $table->string('audio')->nullable();
            $table->string('title')->nullable();
            $table->json('sources')->nullable();
            $table->timestamps();
            $table->foreign('issue_id')
            ->reference('issues')
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
        Schema::dropIfExists('issue_positions');
    }
}
