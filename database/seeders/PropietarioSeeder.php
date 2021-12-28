<?php

namespace Database\Seeders;

use App\Models\Propietario;
use Illuminate\Database\Seeder;

class PropietarioSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $pro= new Propietario;
        $pro->nombre=('Manuel');
        $pro->save();

        $pro1= new Propietario;
        $pro1->nombre=('Lupita');
        $pro1->save();

        $pro2= new Propietario;
        $pro2->nombre=('Maribel');
        $pro2->save();
    }
}
