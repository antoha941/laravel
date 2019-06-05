<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use App\Car;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Validation\ValidatesRequests;
class CarsController extends Controller
{
    use ValidatesRequests;
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
    	return view('cars.addCar', ['types' => Car::$types]);
    }

    public function store(Request $request)
    {

        $this->validate(request(), [
            'make' => 'sometimes|required|max:10',
            'model' => 'required|max:10',
            'year' => 'required|digits:4|integer|min:1900|max:'.(date('Y')+1),
        ]);
    	$car = $request->all();
        
    	Car::create($car); 
    	return redirect('/home/listCar')->with('Status','Create car succes');
       
    }

    public function editCar($id)
    {
    	$car = Car::where('id',$id)->first();
    	return view('cars.editCar',compact('car'), ['types' => Car::$types]);
    }

    public function updateCar(Request $request, $id)
    {
        $this->validate(request(), [
            'make' => 'required|max:10',
            'model' => 'required|max:10',
            'year' => 'required|digits:4|integer|min:1900|max:'.(date('Y')+1),
        ]);
    	$car = $request->all();
    	$car = Car::find($id)->update($car);    	
        return redirect('/home/listCar')->with('Status','Car succes update');;
    }

    public function deleteCar($id)
    {
    	$car = Car::where('id',$id)->delete();
    	return redirect('/home/listCar')->with('Status','Delete with succes');
    }
}
