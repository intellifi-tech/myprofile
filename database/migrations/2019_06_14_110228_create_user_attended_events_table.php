<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUserAttendedEventsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user_attended_events', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('event_id');
            $table->bigInteger('user_id');
            $table->text('event_description');
            $table->text('event_image');
            $table->dateTime('date_of_participation');
            $table->dateTime('end_date');
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
        Schema::dropIfExists('user_attended_events');
    }
}
