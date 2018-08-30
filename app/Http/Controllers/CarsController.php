<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
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

    public function store(Request $request)
    {
        $car = Car::create($request->all());
        return  $car;
    }

    public function update(Request $request, $id)
    {
        $car = Car::findOrFail($id);
        $car->update($request->all());
        return $car;
    }

    public function destroy($id)
    {
        return Car::destroy($id);
    }
}
