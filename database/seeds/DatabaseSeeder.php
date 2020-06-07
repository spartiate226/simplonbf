<?php

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
        // $this->call(UsersTableSeeder::class);
        $this->call(publicationSeeder::class);
        $this->call(projetSeeder::class);
        $this->call(apprenantSeeder::class);
    }
}
