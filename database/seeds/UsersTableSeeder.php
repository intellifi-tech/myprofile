<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('users')->delete();
        
        \DB::table('users')->insert(array (
            0 => 
            array (
                'id' => 1,
                'type' => 1,
                'profile_photo' => 'no-profile.png',
                'cover_photo' => NULL,
                'title' => NULL,
                'name' => 'Muharrem',
                'surname' => 'Özdemir',
                'career_history' => NULL,
                'short_biography' => NULL,
                'credentials' => NULL,
                'date_of_birth' => NULL,
                'company_id' => NULL,
                'sector_id' => NULL,
                'email' => 'muharrem@clouidsoft.com',
                'email_verified_at' => NULL,
                'password' => '$2y$10$SXxhZIZz2PxaJboiRs/PNuvj4b9KJUh1q6pzqWIK1IemT3I16Azea',
                'api_token' => 'kY9su8Y5VVksM4tXRPvcGpRH9vNbIj8Aya1nR2cGU2kvX6K5HQidEm7p19E5',
                'status' => 1,
                'package' => 1,
                'remember_token' => NULL,
                'created_at' => '2019-05-02 11:31:35',
                'updated_at' => '2019-05-02 11:31:35',
            ),
        ));
        
        
    }
}