<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Vehicle;
use Illuminate\Support\Facades\Storage;



class ReadJson extends Controller
{
    public function showDataFromJson()
    {
        $filePath = 'json/vehicles.json'; 
        $contentJson = Storage::get($filePath);
        $vehiclesData = json_decode($contentJson, true);

        if ($vehiclesData) {
            $vehicles = collect($vehiclesData)->map(function ($vehicleData) {
                return new Vehicle($vehicleData);
            });

            return view('welcome', ['vehicles' => $vehicles]);
        } else {
            // Puedes lanzar una excepción o devolver una respuesta HTTP
            return response()->json(['message' => 'No se encontraron datos en el JSON.'], 404);
        }
    }

     public function search(Request $request)
    {
        $searchTerm = $request->input('searchTerm');

        $filePath = 'json/vehicles.json'; 
        $contentJson = Storage::get($filePath);
        $vehicles = json_decode($contentJson, true);

        $filteredVehicles = collect($vehicles)->filter(function ($vehicle) use ($searchTerm) {
            return stripos($vehicle["make"], $searchTerm) !== false ||
                   stripos($vehicle["model"], $searchTerm) !== false;
                   
        });
        $filteredVehicles = $filteredVehicles->map(function ($vehicle) {
            return new Vehicle($vehicle);
        });

        return view('welcome', ['vehicles' => $filteredVehicles]);
    }

}