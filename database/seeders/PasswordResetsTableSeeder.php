<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class PasswordResetsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('password_resets')->delete();
        
        \DB::table('password_resets')->insert(array (
            0 => 
            array (
                'email' => 'ernestoargentina@gmail.com',
                'token' => '$2y$10$JxWpXnEHazJsKX.m7rhjeuPmm1MeYXVLC6AhdCdHQt39mItYYqdgy',
                'created_at' => '2021-03-12 16:14:12',
            ),
        ));
        
        
    }
}