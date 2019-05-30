<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use App\Car;
use App;
class CarsController extends Controller
{
    public function index()
    {
		$cars = Car::all();
    	return view('cars.index',compact('cars'));
    }

    public function show($id)
    {
    	$car = Car::find($id);
    	return view('cars.showCar',compact('car'));
    }

    public function createCar()
    {
    	return view('cars.addCar',compact('car'));
    }

    public function store(Request $request)
    {
    	$car = $request->all();
    	Car::create($car); 
    	return redirect('/home');
    }

    public function editCar($id)
    {
    	$car = Car::where('id',$id)->first();
    	return view('cars.editCar',compact('car'));
    }

    public function updateCar(Request $request)
    {
    	$car = Car::find($request->id);
    	$car->make = $request->make;
    	$car->model = $request->model;
    	$car->year = $request->year;
    	$car->type = $request->type;
    	$car->save();
    	return redirect('/home/listCar');
    }

    public function deleteCar($id)
    {
    	$car = Car::where('id',$id)->delete();
    	return redirect('/home/listCar');
    }
}
