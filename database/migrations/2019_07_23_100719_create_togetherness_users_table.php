<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTogethernessUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('togetherness_users', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('togetherness_id');
            $table->bigInteger('with_whom_user_id'); //Kiminle birlikte
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
        Schema::dropIfExists('togetherness_users');
    }
}
