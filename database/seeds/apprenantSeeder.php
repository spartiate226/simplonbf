<?php

use Illuminate\Database\Seeder;

class apprenantSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $apprenant=factory(App\apprenant::class,15)->create(['entreprise_actuelle'=>'']);
        $almni=factory(App\apprenant::class,15)->create(['statu'=>'alumnis']);

        foreach ($apprenant as $apprenant){
            factory(App\projet_realiser::class)->create(['id_apprenant'=>$apprenant->id,'id_projet'=>1]);
            factory(App\projet_realiser::class)->create(['id_apprenant'=>$apprenant->id,'id_projet'=>2]);
            factory(App\projet_realiser::class)->create(['id_apprenant'=>$apprenant->id,'id_projet'=>3]);
        }
        foreach ($almni as $almni){
            factory(App\projet_realiser::class)->create(['id_apprenant'=>$almni->id,'id_projet'=>1]);
            factory(App\projet_realiser::class)->create(['id_apprenant'=>$almni->id,'id_projet'=>2]);
            factory(App\projet_realiser::class)->create(['id_apprenant'=>$almni->id,'id_projet'=>3]);
        }
    }
}
