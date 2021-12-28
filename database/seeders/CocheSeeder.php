<?php

namespace Database\Seeders;

use App\Models\Coche;
use Illuminate\Database\Seeder;

class CocheSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $coche= new Coche();
        $coche->id_propietario="1";
        $coche->marca="Renault";
        $coche->modelo="megane";
        $coche->color="rojo";
        $coche->save();

        $coche1= new Coche();
        $coche1->id_propietario="1";
        $coche1->marca="Fiat";
        $coche1->modelo="uno";
        $coche1->color="verde";
        $coche1->save();

        $coche2= new Coche();
        $coche2->id_propietario="1";
        $coche2->marca="BMW";
        $coche2->modelo="320";
        $coche2->color="azul";
        $coche2->save();

        $coche3= new Coche();
        $coche3->id_propietario="2";
        $coche3->marca="Peugeot";
        $coche3->modelo="405";
        $coche3->color="rojo";
        $coche3->save();

        $coche4= new Coche();
        $coche4->id_propietario="2";
        $coche4->marca="Mercedes";
        $coche4->modelo="AMG";
        $coche4->color="blanco";
        $coche4->save();

        $coche5= new Coche();
        $coche5->id_propietario="3";
        $coche5->marca="Renault";
        $coche5->modelo="clio";
        $coche5->color="amarillo";
        $coche5->save();
    }
}
