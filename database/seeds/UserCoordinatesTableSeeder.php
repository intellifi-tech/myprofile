<?php

use Illuminate\Database\Seeder;

class UserCoordinatesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('user_coordinates')->delete();
        
        \DB::table('user_coordinates')->insert(array (
            0 => 
            array (
                'id' => 1,
                'user_id' => 3,
                'latitude' => 0.0,
                'longitude' => 0.0,
                'created_at' => '2019-06-27 12:13:20',
                'updated_at' => NULL,
            ),
            1 => 
            array (
                'id' => 2,
                'user_id' => 6,
                'latitude' => 0.0,
                'longitude' => 0.0,
                'created_at' => '2019-06-27 12:13:20',
                'updated_at' => NULL,
            ),
            2 => 
            array (
                'id' => 3,
                'user_id' => 7,
                'latitude' => 0.0,
                'longitude' => 0.0,
                'created_at' => '2019-06-27 12:31:35',
                'updated_at' => NULL,
            ),
        ));
        
        
    }
}