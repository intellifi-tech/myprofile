<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUserPrivacySettingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user_privacy_settings', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('user_id');
            $table->boolean('visibility_on_the_map')->default(false); // Haritada görünmeme
            $table->boolean('no_message')->default(false); // Mesaj almama
            $table->boolean('no_follow_up_request')->default(false); // Takip isteği kabul etmeme
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
        Schema::dropIfExists('user_privacy_settings');
    }
}
