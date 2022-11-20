<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class RolesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('roles')->delete();
        
        \DB::table('roles')->insert(array (
            0 => 
            array (
                'id' => 1,
                'name' => 'admin',
                'display_name' => 'Administrator',
                'created_at' => '2021-03-10 14:11:40',
                'updated_at' => '2021-03-10 14:11:40',
            ),
            1 => 
            array (
                'id' => 2,
                'name' => 'user',
                'display_name' => 'Normal User',
                'created_at' => '2021-03-10 14:11:40',
                'updated_at' => '2021-03-10 14:11:40',
            ),
            2 => 
            array (
                'id' => 3,
                'name' => 'estudante',
                'display_name' => 'Estudante',
                'created_at' => '2021-03-12 16:07:51',
                'updated_at' => '2021-03-12 16:07:51',
            ),
            3 => 
            array (
                'id' => 6,
                'name' => 'docente',
                'display_name' => 'Docente',
                'created_at' => '2021-04-07 13:50:13',
                'updated_at' => '2021-04-07 13:50:13',
            ),
            4 => 
            array (
                'id' => 7,
                'name' => 'registo_academico',
                'display_name' => 'Registo Acadêmico',
                'created_at' => '2022-06-06 19:47:22',
                'updated_at' => '2022-06-06 19:49:13',
            ),
            5 => 
            array (
                'id' => 8,
                'name' => 'director',
                'display_name' => 'Diretor',
                'created_at' => '2022-06-06 19:50:03',
                'updated_at' => '2022-06-06 19:50:03',
            ),
        ));
        
        
    }
}