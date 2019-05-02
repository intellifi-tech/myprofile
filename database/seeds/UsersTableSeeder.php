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
                'email' => 'muharrem@clouditsoft.com',
                'email_verified_at' => NULL,
                'password' => '$2y$10$tTcq1sijFNOjSAaSvsQzL.SVPEnhvpGXdPdtmtczfX3mU2gAZCIwG',
                'api_token' => 'Ac8QJrbMKestFLAtIEtIUOQiRWSmpTaWIfTxbLXsbxVyMeO57e5k5FHqO6Oj',
                'status' => 1,
                'remember_token' => NULL,
                'created_at' => '2019-05-01 12:45:54',
                'updated_at' => '2019-05-01 12:45:54',
            ),
            1 => 
            array (
                'id' => 6,
                'type' => 1,
                'profile_photo' => NULL,
                'cover_photo' => NULL,
                'title' => NULL,
                'name' => 'Mesut',
                'surname' => 'Polat',
                'career_history' => NULL,
                'short_biography' => NULL,
                'credentials' => NULL,
                'date_of_birth' => NULL,
                'company_id' => NULL,
                'sector_id' => NULL,
                'email' => 'mesut@intellifi.tech',
                'email_verified_at' => NULL,
                'password' => '$2y$10$08obyTGNVs2.bC1CzjTKCusOs1r1skQ1AcNxRiu5wP.ynq2DEUSbS',
                'api_token' => 'CyCvQjSNQ8Fm6JQEPRRe6B1pKsKIi0lTkPbiyyOjsjsxfSlvo2Go9x3SS5gi',
                'status' => 1,
                'remember_token' => NULL,
                'created_at' => '2019-05-01 14:16:28',
                'updated_at' => '2019-05-01 14:16:28',
            ),
        ));
        
        
    }
}