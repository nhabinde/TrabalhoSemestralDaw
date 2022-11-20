<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class PermissionsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('permissions')->delete();
        
        \DB::table('permissions')->insert(array (
            0 => 
            array (
                'id' => 1,
                'key' => 'browse_admin',
                'table_name' => NULL,
                'created_at' => '2021-03-10 14:11:40',
                'updated_at' => '2021-03-10 14:11:40',
            ),
            1 => 
            array (
                'id' => 2,
                'key' => 'browse_bread',
                'table_name' => NULL,
                'created_at' => '2021-03-10 14:11:40',
                'updated_at' => '2021-03-10 14:11:40',
            ),
            2 => 
            array (
                'id' => 3,
                'key' => 'browse_database',
                'table_name' => NULL,
                'created_at' => '2021-03-10 14:11:41',
                'updated_at' => '2021-03-10 14:11:41',
            ),
            3 => 
            array (
                'id' => 4,
                'key' => 'browse_media',
                'table_name' => NULL,
                'created_at' => '2021-03-10 14:11:41',
                'updated_at' => '2021-03-10 14:11:41',
            ),
            4 => 
            array (
                'id' => 5,
                'key' => 'browse_compass',
                'table_name' => NULL,
                'created_at' => '2021-03-10 14:11:41',
                'updated_at' => '2021-03-10 14:11:41',
            ),
            5 => 
            array (
                'id' => 6,
                'key' => 'browse_menus',
                'table_name' => 'menus',
                'created_at' => '2021-03-10 14:11:41',
                'updated_at' => '2021-03-10 14:11:41',
            ),
            6 => 
            array (
                'id' => 7,
                'key' => 'read_menus',
                'table_name' => 'menus',
                'created_at' => '2021-03-10 14:11:41',
                'updated_at' => '2021-03-10 14:11:41',
            ),
            7 => 
            array (
                'id' => 8,
                'key' => 'edit_menus',
                'table_name' => 'menus',
                'created_at' => '2021-03-10 14:11:42',
                'updated_at' => '2021-03-10 14:11:42',
            ),
            8 => 
            array (
                'id' => 9,
                'key' => 'add_menus',
                'table_name' => 'menus',
                'created_at' => '2021-03-10 14:11:42',
                'updated_at' => '2021-03-10 14:11:42',
            ),
            9 => 
            array (
                'id' => 10,
                'key' => 'delete_menus',
                'table_name' => 'menus',
                'created_at' => '2021-03-10 14:11:42',
                'updated_at' => '2021-03-10 14:11:42',
            ),
            10 => 
            array (
                'id' => 11,
                'key' => 'browse_roles',
                'table_name' => 'roles',
                'created_at' => '2021-03-10 14:11:43',
                'updated_at' => '2021-03-10 14:11:43',
            ),
            11 => 
            array (
                'id' => 12,
                'key' => 'read_roles',
                'table_name' => 'roles',
                'created_at' => '2021-03-10 14:11:43',
                'updated_at' => '2021-03-10 14:11:43',
            ),
            12 => 
            array (
                'id' => 13,
                'key' => 'edit_roles',
                'table_name' => 'roles',
                'created_at' => '2021-03-10 14:11:43',
                'updated_at' => '2021-03-10 14:11:43',
            ),
            13 => 
            array (
                'id' => 14,
                'key' => 'add_roles',
                'table_name' => 'roles',
                'created_at' => '2021-03-10 14:11:43',
                'updated_at' => '2021-03-10 14:11:43',
            ),
            14 => 
            array (
                'id' => 15,
                'key' => 'delete_roles',
                'table_name' => 'roles',
                'created_at' => '2021-03-10 14:11:43',
                'updated_at' => '2021-03-10 14:11:43',
            ),
            15 => 
            array (
                'id' => 16,
                'key' => 'browse_users',
                'table_name' => 'users',
                'created_at' => '2021-03-10 14:11:44',
                'updated_at' => '2021-03-10 14:11:44',
            ),
            16 => 
            array (
                'id' => 17,
                'key' => 'read_users',
                'table_name' => 'users',
                'created_at' => '2021-03-10 14:11:44',
                'updated_at' => '2021-03-10 14:11:44',
            ),
            17 => 
            array (
                'id' => 18,
                'key' => 'edit_users',
                'table_name' => 'users',
                'created_at' => '2021-03-10 14:11:44',
                'updated_at' => '2021-03-10 14:11:44',
            ),
            18 => 
            array (
                'id' => 19,
                'key' => 'add_users',
                'table_name' => 'users',
                'created_at' => '2021-03-10 14:11:44',
                'updated_at' => '2021-03-10 14:11:44',
            ),
            19 => 
            array (
                'id' => 20,
                'key' => 'delete_users',
                'table_name' => 'users',
                'created_at' => '2021-03-10 14:11:44',
                'updated_at' => '2021-03-10 14:11:44',
            ),
            20 => 
            array (
                'id' => 21,
                'key' => 'browse_settings',
                'table_name' => 'settings',
                'created_at' => '2021-03-10 14:11:44',
                'updated_at' => '2021-03-10 14:11:44',
            ),
            21 => 
            array (
                'id' => 22,
                'key' => 'read_settings',
                'table_name' => 'settings',
                'created_at' => '2021-03-10 14:11:44',
                'updated_at' => '2021-03-10 14:11:44',
            ),
            22 => 
            array (
                'id' => 23,
                'key' => 'edit_settings',
                'table_name' => 'settings',
                'created_at' => '2021-03-10 14:11:45',
                'updated_at' => '2021-03-10 14:11:45',
            ),
            23 => 
            array (
                'id' => 24,
                'key' => 'add_settings',
                'table_name' => 'settings',
                'created_at' => '2021-03-10 14:11:45',
                'updated_at' => '2021-03-10 14:11:45',
            ),
            24 => 
            array (
                'id' => 25,
                'key' => 'delete_settings',
                'table_name' => 'settings',
                'created_at' => '2021-03-10 14:11:45',
                'updated_at' => '2021-03-10 14:11:45',
            ),
            25 => 
            array (
                'id' => 26,
                'key' => 'browse_hooks',
                'table_name' => NULL,
                'created_at' => '2021-03-10 14:11:50',
                'updated_at' => '2021-03-10 14:11:50',
            ),
            26 => 
            array (
                'id' => 27,
                'key' => 'browse_cursos',
                'table_name' => 'cursos',
                'created_at' => '2021-04-07 12:55:59',
                'updated_at' => '2021-04-07 12:55:59',
            ),
            27 => 
            array (
                'id' => 28,
                'key' => 'read_cursos',
                'table_name' => 'cursos',
                'created_at' => '2021-04-07 12:55:59',
                'updated_at' => '2021-04-07 12:55:59',
            ),
            28 => 
            array (
                'id' => 29,
                'key' => 'edit_cursos',
                'table_name' => 'cursos',
                'created_at' => '2021-04-07 12:55:59',
                'updated_at' => '2021-04-07 12:55:59',
            ),
            29 => 
            array (
                'id' => 30,
                'key' => 'add_cursos',
                'table_name' => 'cursos',
                'created_at' => '2021-04-07 12:55:59',
                'updated_at' => '2021-04-07 12:55:59',
            ),
            30 => 
            array (
                'id' => 31,
                'key' => 'delete_cursos',
                'table_name' => 'cursos',
                'created_at' => '2021-04-07 12:55:59',
                'updated_at' => '2021-04-07 12:55:59',
            ),
            31 => 
            array (
                'id' => 32,
                'key' => 'browse_docentes',
                'table_name' => 'docentes',
                'created_at' => '2021-04-07 13:11:11',
                'updated_at' => '2021-04-07 13:11:11',
            ),
            32 => 
            array (
                'id' => 33,
                'key' => 'read_docentes',
                'table_name' => 'docentes',
                'created_at' => '2021-04-07 13:11:11',
                'updated_at' => '2021-04-07 13:11:11',
            ),
            33 => 
            array (
                'id' => 34,
                'key' => 'edit_docentes',
                'table_name' => 'docentes',
                'created_at' => '2021-04-07 13:11:11',
                'updated_at' => '2021-04-07 13:11:11',
            ),
            34 => 
            array (
                'id' => 35,
                'key' => 'add_docentes',
                'table_name' => 'docentes',
                'created_at' => '2021-04-07 13:11:11',
                'updated_at' => '2021-04-07 13:11:11',
            ),
            35 => 
            array (
                'id' => 36,
                'key' => 'delete_docentes',
                'table_name' => 'docentes',
                'created_at' => '2021-04-07 13:11:11',
                'updated_at' => '2021-04-07 13:11:11',
            ),
            36 => 
            array (
                'id' => 37,
                'key' => 'browse_estudantes',
                'table_name' => 'estudantes',
                'created_at' => '2021-04-07 14:06:20',
                'updated_at' => '2021-04-07 14:06:20',
            ),
            37 => 
            array (
                'id' => 38,
                'key' => 'read_estudantes',
                'table_name' => 'estudantes',
                'created_at' => '2021-04-07 14:06:20',
                'updated_at' => '2021-04-07 14:06:20',
            ),
            38 => 
            array (
                'id' => 39,
                'key' => 'edit_estudantes',
                'table_name' => 'estudantes',
                'created_at' => '2021-04-07 14:06:20',
                'updated_at' => '2021-04-07 14:06:20',
            ),
            39 => 
            array (
                'id' => 40,
                'key' => 'add_estudantes',
                'table_name' => 'estudantes',
                'created_at' => '2021-04-07 14:06:20',
                'updated_at' => '2021-04-07 14:06:20',
            ),
            40 => 
            array (
                'id' => 41,
                'key' => 'delete_estudantes',
                'table_name' => 'estudantes',
                'created_at' => '2021-04-07 14:06:20',
                'updated_at' => '2021-04-07 14:06:20',
            ),
            41 => 
            array (
                'id' => 42,
                'key' => 'browse_semestres',
                'table_name' => 'semestres',
                'created_at' => '2021-04-07 14:17:21',
                'updated_at' => '2021-04-07 14:17:21',
            ),
            42 => 
            array (
                'id' => 43,
                'key' => 'read_semestres',
                'table_name' => 'semestres',
                'created_at' => '2021-04-07 14:17:21',
                'updated_at' => '2021-04-07 14:17:21',
            ),
            43 => 
            array (
                'id' => 44,
                'key' => 'edit_semestres',
                'table_name' => 'semestres',
                'created_at' => '2021-04-07 14:17:21',
                'updated_at' => '2021-04-07 14:17:21',
            ),
            44 => 
            array (
                'id' => 45,
                'key' => 'add_semestres',
                'table_name' => 'semestres',
                'created_at' => '2021-04-07 14:17:21',
                'updated_at' => '2021-04-07 14:17:21',
            ),
            45 => 
            array (
                'id' => 46,
                'key' => 'delete_semestres',
                'table_name' => 'semestres',
                'created_at' => '2021-04-07 14:17:21',
                'updated_at' => '2021-04-07 14:17:21',
            ),
            46 => 
            array (
                'id' => 47,
                'key' => 'browse_turmas',
                'table_name' => 'turmas',
                'created_at' => '2021-04-07 14:19:15',
                'updated_at' => '2021-04-07 14:19:15',
            ),
            47 => 
            array (
                'id' => 48,
                'key' => 'read_turmas',
                'table_name' => 'turmas',
                'created_at' => '2021-04-07 14:19:15',
                'updated_at' => '2021-04-07 14:19:15',
            ),
            48 => 
            array (
                'id' => 49,
                'key' => 'edit_turmas',
                'table_name' => 'turmas',
                'created_at' => '2021-04-07 14:19:15',
                'updated_at' => '2021-04-07 14:19:15',
            ),
            49 => 
            array (
                'id' => 50,
                'key' => 'add_turmas',
                'table_name' => 'turmas',
                'created_at' => '2021-04-07 14:19:15',
                'updated_at' => '2021-04-07 14:19:15',
            ),
            50 => 
            array (
                'id' => 51,
                'key' => 'delete_turmas',
                'table_name' => 'turmas',
                'created_at' => '2021-04-07 14:19:15',
                'updated_at' => '2021-04-07 14:19:15',
            ),
        ));
        
        
    }
}