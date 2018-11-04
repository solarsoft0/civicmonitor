<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMembershipsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('memberships', function (Blueprint $table) {
            $table->increments('id');

            $table->UnsignedInteger('politician_id');
            $table->UnsignedInteger('political_party_id');
            $table->UnsignedInteger('position_id');
            $table->date('start_date')->nullable();
            $table->date('end_date')->nullable();
            $table->timestamps();
            $table->foreign('political_party_id')
                ->references('id')
                ->on('political_parties');
            $table->foreign('politician_id')
                ->references('id')
                ->on('politicians');
            $table->foreign('position_id')
                ->references('id')
                ->on('positions');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('memberships');
    }
}
