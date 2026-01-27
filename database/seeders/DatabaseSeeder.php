<?php

namespace Database\Seeders;

use App\Models\Tour;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    use WithoutModelEvents;

    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        // User::create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
        User::create([
            'name' => 'admin',
            'middlename' => 'admin',
            'lastname' => 'admin',
            'login' => 'admin',
            'tel' => '79999999999',
            'email' => 'admin@adm.ru',
            'role' => 'admin',
            'password' => 'administrator'
        ]);

        DB::table('tours')->insert(
            [
                'image' => 'resources/images/tour3.jpg',
                'title' => '"Холзан" - питомник хищных птиц (г.Сысерть)',
                'date' => '2025-08-09',
                'cost' => '2100'
            ]
        );
        DB::table('tours')->insert(
            [
                'image' => 'resources/images/tour4.jpg',
                'title' => 'Обзорная экскурсия по Челябинску',
                'date' => '2025-07-01',
                'cost' => '650'
            ]
        );
    }
}
