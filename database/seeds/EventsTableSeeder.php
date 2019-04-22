<?php

use Illuminate\Database\Seeder;

class EventsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('events')->delete();
        
        \DB::table('events')->insert(array (
            0 => 
            array (
                'id' => 1,
                'name' => 'IntelliFi Hackathon',
                'activity_date' => '2019-04-22 10:30:00',
                'created_at' => '2019-04-22 00:00:00',
                'updated_at' => NULL,
            ),
        ));
        
        
    }
}