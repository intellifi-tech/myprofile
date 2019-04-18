<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUserExperiencesTable extends Migration
{
    /**
     * Run the migrations.
     * user_id          = Kullanıcı id
     * title            = Deneyimlediği şirketteki ünvanı
     * company_id       = Deneyim şirketin veritabanındaki id'si
     * start_time       = Deneyime başlama zamanı
     * end_time         = Deneyimden ayrılmaz zamanı
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user_experiences', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('user_id');
            $table->string('title');
            $table->integer('company_id');
            $table->string('start_time');
            $table->string('end_time');
            $table->mediumText('description')->nullable();
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
        Schema::dropIfExists('user_experiences');
    }
}
