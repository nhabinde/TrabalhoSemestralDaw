<?php

namespace Database\Seeders;

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
                'role_id' => 1,
                'name' => 'Ernesto Argentina Cumbe',
                'email' => 'ernestoargentina@gmail.com',
                'avatar' => 'users/default.png',
                'email_verified_at' => NULL,
                'password' => '$2y$10$lOcHYfFfqEOwpQVta712nufChSrP9fhJ4bGOW3iGeZV9ga8zcW/pi',
                'remember_token' => NULL,
                'settings' => NULL,
                'created_at' => '2021-03-10 14:54:02',
                'updated_at' => '2021-03-12 14:46:26',
            ),
            1 => 
            array (
                'id' => 2,
                'role_id' => 2,
                'name' => 'Normal user',
                'email' => 'normal@email.com',
                'avatar' => 'users/default.png',
                'email_verified_at' => NULL,
                'password' => '$2y$10$BleA9mtGedm73FcZGrfPQOpgzsnxpCu9My148vRJ8DFc2B0pHR5pm',
                'remember_token' => NULL,
                'settings' => '{"locale":"pt"}',
                'created_at' => '2021-03-12 14:48:22',
                'updated_at' => '2021-03-12 14:48:22',
            ),
            2 => 
            array (
                'id' => 3,
                'role_id' => 3,
                'name' => 'Yuran Faizal',
                'email' => 'yuranfaizal@gmail.com',
                'avatar' => 'users/default.png',
                'email_verified_at' => NULL,
                'password' => '$2y$10$e6xNQnSXYr1CGeS8gGjWcu7JEgWZubf36Qm0DM1oJMObjUTejCN7i',
                'remember_token' => NULL,
                'settings' => NULL,
                'created_at' => '2022-06-04 19:36:40',
                'updated_at' => '2022-06-04 19:36:40',
            ),
            3 => 
            array (
                'id' => 4,
                'role_id' => 6,
                'name' => 'Joao Pedro Chavango',
                'email' => 'joao@email.com',
                'avatar' => 'users/default.png',
                'email_verified_at' => NULL,
                'password' => '$2y$10$/SA6j/T4ArDldJCuuFhWneempGPDsv1tv0jWjki9HpiyQOZPhPdce',
                'remember_token' => NULL,
                'settings' => NULL,
                'created_at' => '2022-06-04 19:38:38',
                'updated_at' => '2022-06-04 19:38:38',
            ),
        ));
        
        
    }
}