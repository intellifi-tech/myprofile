<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->tinyInteger('type')->default(1);
            $table->text('profile_photo')->nullable();
            $table->text('cover_photo')->nullable();
            $table->text('title')->nullable();
            $table->string('name');
            $table->string('surname');
            $table->longText('career_history')->nullable();
            $table->longText('short_biography')->nullable();
            $table->longText('credentials')->nullable();
            $table->string('date_of_birth')->nullable();
            $table->integer('company_id')->nullable();
            $table->integer('sector_id')->nullable();
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->string('api_token', 60)->unique();
            $table->tinyInteger('status')->default(1);
            $table->tinyInteger('package')->nullable();
            $table->rememberToken();
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
        Schema::dropIfExists('users');
    }
}
