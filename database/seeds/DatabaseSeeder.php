<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        if (app()->environment('production')) {
            $this->call([
                UsersSeeder::class
            ]);
        } else {
            $this->call([
                UsersSeeder::class,
                ItemsSeeder::class,
                WeaponsSeeder::class,
                MagicSeeder::class,
                SkillsSeeder::class,
                ArticlesSeeder::class
            ]);
        }
    }
}
