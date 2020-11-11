<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\car;

class carController extends Controller
{
    public function createCar(){
        return view('layouts/al-cars-add');
        
    }
    public function addCar(Request $request){


        $car = new car();
        $car->name = $request->name;
        $car->make = $request->make;
        $car->model = $request->model;
        $car->license_number = $request->license_number;
        $car->weight = $request->weight;
        $car->registartion_year = $request->registration_year;
        $car->save();
        return redirect('/product/all');
    }
    public function viewAllCars(){
        $cars = car::all();
        return view('layouts/al-cars')->with('cars',$cars);
    }
    public function editCars(){
        $cars = car::all();
    return view('layouts/al-cars-edit')->with('cars',$cars);
    }

    public function deleteCar(Request $request){ 
        
        car::where('id',$request->id)->delete();
        return redirect('/product/edit');
    }
    public function editCarsIndividual(Request $request){
        $car=car::where('id',$request->id)->first();
        return view('layouts/al-cars-indedit')->with('cars',$car);
        
    }
    public function updateCar(Request $request){
        car::where('id',$request->id)->update([
            'name' => $request->name,
            'make' => $request->make,
            'model' => $request->model,
            'license_number' => $request->license_number,
            'weight' => $request->weight,
            'registartion_year' => $request->registartion_year,

        ]);
        return redirect('/product/edit');
    }
}
