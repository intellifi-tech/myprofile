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
            $table->bigInteger('event_id'); // Etkinlik ID'si
            $table->bigInteger('user_id'); // Kullanıcı ID'si
            $table->text('event_description'); // Etkinlik açıklaması
            $table->text('event_image'); // Etkinlik resmi
            $table->dateTime('date_of_participation'); // Katılım tarihi
            $table->dateTime('end_date')->nullable(); // Bitiş tarihi
            $table->bigInteger('rating')->default(0); // Beğenilme sayısı
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