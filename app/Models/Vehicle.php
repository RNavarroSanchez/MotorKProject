<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Model;

class Vehicle
{
    public $id;
    public $make;
    public $model;
    public $type;
    public $version;
    public $seats;
    public $classCode;
    public $price;
    public $km;
    public $registrationYear;
    public $co2;
    public $isKM0;
    public $status;
    public $image;
    public $consumptionCombined;
    public $unitOfMeasure;

    public function __construct($vehicle)
    {
        $this->id = $vehicle["id"]?? null;
        $this->make = $vehicle["make"]?? null;
        $this->model = $vehicle["model"]?? null;
        $this->type = $vehicle["type"]?? null;
        $this->version = $vehicle['version']?? null;
        $this->seats = $vehicle['seats']?? null;
        $this->classCode = $vehicle['classCode']?? null;
        $this->price = $vehicle['price']?? null;
        $this->km = $vehicle['km']?? null;
        $this->registrationYear = $vehicle['registrationYear']?? null;
        $this->co2 = $vehicle['co2']?? null;
        $this->isKM0 = $vehicle['isKm0']?? null;
        $this->status = $vehicle['status']?? null;
        $this->image = $vehicle['image']?? null;
        $this->consumptionCombined = $vehicle["homologationStandard"]["wltp"]["consumption"]["combined"]?? null;
        $this->unitOfMeasure = $vehicle["homologationStandard"]["wltp"]["consumption"]["unitOfMeasure"]?? null;       
    }
}