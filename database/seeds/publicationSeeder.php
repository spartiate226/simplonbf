<?php

use Illuminate\Database\Seeder;

class publicationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\evenement::class,10)->create();
        factory(App\evenement::class,10)->create(['type'=>'actualite']);
    }
}
