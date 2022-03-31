<?php

use Illuminate\Database\Seeder;
use App\Tiburones;
use Illuminate\Support\Facades\DB;
class tiburones_seed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       
    $nombre = ["Tiburon peregrino","Tiburon amarillo","Tintorera","Tiburon zorro","Tiburones de profundidad","Tiburon arenero","Tiburon blanco","Tiburon limon","Marrajo carite","Gata nodriza"];
    $tamaño =["10m","4m","6m","5m","4.2m","4.5m","3.1m", "4.5m","4m","2.5m"];
    $peso =["7 toneladas", "400 kilos","205.9 kilos","348 kilos","400 kilos","347 kilos", "2250 kilos","90 kilos","750 kilos","110 kilos"];
    $residencia =["Mar mediterraneo","Oceano atlantico, indico y pacifico","Oceanos tropicales","Oceanos tropicales","Mesopelagica","Ecuador","Mar mediterraneo","Oceano atlantico y pacifico","Mares templados","Centroamerica"];
    for ($i=0; $i <10; $i++) { 
      DB::table('tiburones')->insert([
        'nombre' => $nombre(rand(0,10)),
        'tamaño' => $tamaño(rand(0,10)),
        'peso' => $peso(rand(0,10)),
        'residencia' => $residencia(rand(0,10))
      ]);
    }
}

}