<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOfficesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('offices', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('office_type_id');
            $table->string('name');
            $table->json('meta');
            // {
            //     state: lagos,
            //     local-government: agege,
            // } don't know is this is necessary but will enable use to search by state or local-goverment in case of HOR, else this might be null or meta concerning te office type
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
        Schema::dropIfExists('offices');
    }
}
