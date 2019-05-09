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
                'type' => 0,
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
                'password' => '$2y$10$SXxhZIZz2PxaJboiRs/PNuvj4b9KJUh1q6pzqWIK1IemT3I16Azea',
                'api_token' => 'kY9su8Y5VVksM4tXRPvcGpRH9vNbIj8Aya1nR2cGU2kvX6K5HQidEm7p19E5',
                'status' => 1,
                'package' => 1,
                'remember_token' => NULL,
                'created_at' => '2019-05-02 11:31:35',
                'updated_at' => '2019-05-02 11:31:35',
            ),
            1 => 
            array (
                'id' => 2,
                'type' => 0,
                'profile_photo' => NULL,
                'cover_photo' => NULL,
                'title' => NULL,
                'name' => 'MyProfile',
                'surname' => 'MyProfile',
                'career_history' => NULL,
                'short_biography' => NULL,
                'credentials' => NULL,
                'date_of_birth' => NULL,
                'company_id' => NULL,
                'sector_id' => NULL,
                'email' => 'demo@myprofile.com',
                'email_verified_at' => NULL,
                'password' => '$2y$10$kHWZaspPfh2ZkcaNQVEdDuas/uVqyO3QkHxzj/UJERUms71z.eAfu',
                'api_token' => 'Qh6aZ325SG5FBBiAAHlOQkuDfh8kKXGQOw7BTLO7fl09MAQNlR7DEOjWTmWo',
                'status' => 1,
                'package' => NULL,
                'remember_token' => NULL,
                'created_at' => '2019-05-03 11:18:54',
                'updated_at' => '2019-05-03 11:18:54',
            ),
            2 => 
            array (
                'id' => 3,
                'type' => 1,
                'profile_photo' => NULL,
                'cover_photo' => NULL,
                'title' => NULL,
                'name' => 'Mobil',
                'surname' => 'Kullanıcı',
                'career_history' => NULL,
                'short_biography' => NULL,
                'credentials' => NULL,
                'date_of_birth' => NULL,
                'company_id' => NULL,
                'sector_id' => NULL,
                'email' => 'mobil@myprofile.com',
                'email_verified_at' => NULL,
                'password' => '$2y$10$ee1KgyHMv2IrEPw7QonEwugZpkpofKUwUpaUzmSooENrUIv2yMy7e',
                'api_token' => '0gYC6gfkAswgSkwFymv1EetYCs7Z9EIC0dW1wTiuu3OrhPaQ7tSCyZrz0QBY',
                'status' => 1,
                'package' => NULL,
                'remember_token' => NULL,
                'created_at' => '2019-05-09 09:54:25',
                'updated_at' => '2019-05-09 09:54:25',
            ),
        ));
        
        
    }
}