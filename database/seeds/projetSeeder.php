<?php

use Illuminate\Database\Seeder;

class projetSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\projets::class,3)->create();
    }
}
