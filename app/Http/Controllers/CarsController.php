<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\CarValidation;

use App\Car;

class CarsController extends Controller
{
    public function index()
    {
        return Car::all();
    }

    public function show($id)
    {
        return Car::find($id);
    }

    public function store(CarValidation $request)
    {
        $car = Car::create($request->all());
        return  $car;
    }

    public function update(CarValidation $request, $id)
    {
        return Car::where('id', $id)->update($request->all());


    }

    public function destroy($id)
    {
        return Car::destroy($id);
    }
}
