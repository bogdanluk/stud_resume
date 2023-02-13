<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Education;
use App\Models\JobType;
use App\Models\UserRoles;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        #заполнение таблицы user_roles в бд
        $roles = ['Администратор', 'Студент', 'Работодатель'];
        foreach ($roles as $role){
            UserRoles::create(['name'=>$role]);
        }

        #заполнение таблицы education
        $educations = ['Основное общее', 'Среднее общее', 'Среднее профессиональное', 'Бакалавриат', 'Магистратура'];
        foreach ($educations as $education){
            Education::create(['name'=>$education]);
        }

        #заполнение таблицы job_types
        $types = ['Подработка', 'Стажировка', 'Официальное трудоустройство'];
        foreach ($types as $type){
            JobType::create(['name'=>$type]);
        }



        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
    }
}
