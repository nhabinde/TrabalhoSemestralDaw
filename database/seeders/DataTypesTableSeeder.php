<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DataTypesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('data_types')->delete();
        
        \DB::table('data_types')->insert(array (
            0 => 
            array (
                'id' => 1,
                'name' => 'users',
                'slug' => 'users',
                'display_name_singular' => 'User',
                'display_name_plural' => 'Users',
                'icon' => 'voyager-person',
                'model_name' => 'TCG\\Voyager\\Models\\User',
                'policy_name' => 'TCG\\Voyager\\Policies\\UserPolicy',
                'controller' => 'TCG\\Voyager\\Http\\Controllers\\VoyagerUserController',
                'description' => '',
                'generate_permissions' => 1,
                'server_side' => 0,
                'details' => NULL,
                'created_at' => '2021-03-10 14:11:28',
                'updated_at' => '2021-03-10 14:11:28',
            ),
            1 => 
            array (
                'id' => 2,
                'name' => 'menus',
                'slug' => 'menus',
                'display_name_singular' => 'Menu',
                'display_name_plural' => 'Menus',
                'icon' => 'voyager-list',
                'model_name' => 'TCG\\Voyager\\Models\\Menu',
                'policy_name' => NULL,
                'controller' => '',
                'description' => '',
                'generate_permissions' => 1,
                'server_side' => 0,
                'details' => NULL,
                'created_at' => '2021-03-10 14:11:28',
                'updated_at' => '2021-03-10 14:11:28',
            ),
            2 => 
            array (
                'id' => 3,
                'name' => 'roles',
                'slug' => 'roles',
                'display_name_singular' => 'Role',
                'display_name_plural' => 'Roles',
                'icon' => 'voyager-lock',
                'model_name' => 'TCG\\Voyager\\Models\\Role',
                'policy_name' => NULL,
                'controller' => 'TCG\\Voyager\\Http\\Controllers\\VoyagerRoleController',
                'description' => '',
                'generate_permissions' => 1,
                'server_side' => 0,
                'details' => NULL,
                'created_at' => '2021-03-10 14:11:28',
                'updated_at' => '2021-03-10 14:11:28',
            ),
            3 => 
            array (
                'id' => 4,
                'name' => 'cursos',
                'slug' => 'cursos',
                'display_name_singular' => 'Curso',
                'display_name_plural' => 'Cursos',
                'icon' => 'voyager-categories',
                'model_name' => 'App\\Models\\Curso',
                'policy_name' => NULL,
                'controller' => NULL,
                'description' => NULL,
                'generate_permissions' => 1,
                'server_side' => 0,
                'details' => '{"order_column":null,"order_display_column":null,"order_direction":"asc","default_search_key":null}',
                'created_at' => '2021-04-07 12:55:59',
                'updated_at' => '2021-04-07 12:55:59',
            ),
            4 => 
            array (
                'id' => 6,
                'name' => 'docentes',
                'slug' => 'docentes',
                'display_name_singular' => 'Docente',
                'display_name_plural' => 'Docentes',
                'icon' => 'voyager-person',
                'model_name' => 'App\\Models\\Docente',
                'policy_name' => NULL,
                'controller' => NULL,
                'description' => NULL,
                'generate_permissions' => 1,
                'server_side' => 0,
                'details' => '{"order_column":null,"order_display_column":null,"order_direction":"asc","default_search_key":null}',
                'created_at' => '2021-04-07 13:11:11',
                'updated_at' => '2021-04-07 13:11:11',
            ),
            5 => 
            array (
                'id' => 7,
                'name' => 'estudantes',
                'slug' => 'estudantes',
                'display_name_singular' => 'Estudante',
                'display_name_plural' => 'Estudantes',
                'icon' => 'voyager-person',
                'model_name' => 'App\\Models\\Estudante',
                'policy_name' => NULL,
                'controller' => NULL,
                'description' => NULL,
                'generate_permissions' => 1,
                'server_side' => 0,
                'details' => '{"order_column":null,"order_display_column":null,"order_direction":"asc","default_search_key":null,"scope":null}',
                'created_at' => '2021-04-07 14:06:19',
                'updated_at' => '2021-04-07 16:08:38',
            ),
            6 => 
            array (
                'id' => 8,
                'name' => 'semestres',
                'slug' => 'semestres',
                'display_name_singular' => 'Semestre',
                'display_name_plural' => 'Semestres',
                'icon' => 'voyager-alarm-clock',
                'model_name' => 'App\\Models\\Semestre',
                'policy_name' => NULL,
                'controller' => NULL,
                'description' => NULL,
                'generate_permissions' => 1,
                'server_side' => 0,
                'details' => '{"order_column":null,"order_display_column":null,"order_direction":"asc","default_search_key":null}',
                'created_at' => '2021-04-07 14:17:21',
                'updated_at' => '2021-04-07 14:17:21',
            ),
            7 => 
            array (
                'id' => 9,
                'name' => 'turmas',
                'slug' => 'turmas',
                'display_name_singular' => 'Turma',
                'display_name_plural' => 'Turmas',
                'icon' => 'voyager-group',
                'model_name' => 'App\\Models\\Turma',
                'policy_name' => NULL,
                'controller' => NULL,
                'description' => NULL,
                'generate_permissions' => 1,
                'server_side' => 0,
                'details' => '{"order_column":null,"order_display_column":null,"order_direction":"asc","default_search_key":null}',
                'created_at' => '2021-04-07 14:19:15',
                'updated_at' => '2021-04-07 14:19:15',
            ),
        ));
        
        
    }
}