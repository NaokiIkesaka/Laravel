<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\Models\Post;
use App\Models\User;
use Faker\Factory;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
        $faker = Factory::create('ja_JP');

        $admin = User::create([
             'name' => 'admin',
             'email' => 'user@user.com',
             'password' => Hash::make('password')
        ]);

        $user1 = User::create([
             'name' => $faker->name(),
             'email' => 'test@test.com',
             'password' => Hash::make('password')
        ]);

        for ($i = 0; $i < 10; $i++) {
             Post::create([
                  'title' => $faker->text(40),
                  'content' => $faker->text(),
                  'user_id' => $user1->id
             ]);
        } 
    }
}
