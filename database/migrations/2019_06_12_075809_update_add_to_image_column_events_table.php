<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class UpdateAddToImageColumnEventsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('events', function (Blueprint $table) {
            $table->text('image')->after('name');
            $table->text('end_date')->after('activity_date');
            $table->text('latitude')->after('end_date');
            $table->text('longitude')->after('latitude');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('events', function (Blueprint $table) {
            $table->dropColumn('image');
            $table->dropColumn('end_date');
            $table->dropColumn('latitude');
            $table->dropColumn('longitude');
        });
    }
}
