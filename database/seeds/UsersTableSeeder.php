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
                'cover_photo' => 'no-cover.png',
                'title' => 'Yazılım Geliştirici',
                'name' => 'Muharrem',
                'surname' => 'Özdemir',
                'career_history' => NULL,
                'short_biography' => 'Kendi çapında bir yazılım geliştirici.',
                'credentials' => NULL,
                'date_of_birth' => '1990-08-06',
                'company_id' => 1,
                'sector_id' => 100,
                'email' => 'muharrem@clouditsoft.com',
                'email_verified_at' => NULL,
                'password' => '123456',
                'status' => 1,
                'remember_token' => NULL,
                'created_at' => NULL,
                'updated_at' => '2019-04-22 09:05:30',
            ),
        ));
        
        
    }
}