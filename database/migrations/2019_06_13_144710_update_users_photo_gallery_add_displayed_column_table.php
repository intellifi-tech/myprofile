<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class UpdateUsersPhotoGalleryAddDisplayedColumnTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('user_photo_gallery', function (Blueprint $table) {
            $table->bigInteger('displayed')->after('photo_name')->default(0);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('user_photo_gallery', function (Blueprint $table) {
            $table->dropColumn('displayed');
        });
    }
}
