<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Vehicle;

class ReadJson extends Controller
{
    public function showDataFromJson()
    {
       // Código para leer el JSON y decodificar los datos
       $contentJson = file_get_contents(storage_path('app/json/vehicles.json'));
       $vehicles = json_decode($contentJson, true);

       // Verificar si hay datos
       if ($vehicles)
        {     
            
            $vehiclesjson = [];
            foreach ($vehicles as $vehiclesData) {
                
                $vehiclesjson[] = new Vehicle($vehiclesData);
            }
            
            return view('welcome', ['vehicles' => $vehiclesjson]);
        }
       else 
       {
           echo "No se encontraron datos en el JSON.";
       }
       

       
   }

}