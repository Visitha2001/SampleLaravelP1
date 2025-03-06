<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Vehicle;
use App\Models\Dojo;

class VehicleController extends Controller
{
    public function index()
    {
        $vehicles = Vehicle::with('dojo')->orderBy('created_at' , 'desc')->paginate(10);
        return view('vehicles.index' , ['vehicles' => $vehicles]);
    }

    public function show(Vehicle $vehicles)
    {
        $vehicles->load('dojo');
        return view('vehicles.show', ['vehicles' => $vehicles]);
    }

    public function create()
    {
        $dojos = Dojo::all();
        return view('vehicles.create' , ['dojos' => $dojos]);
    }

    public function store(Request $request)
    {
        $request->validate([
            'make' => 'required|string',
            'model' => 'required|string',
            'year' => 'required|integer',
            'color' => 'required|string',
            'weight' => 'required|integer',
            'dojo_id' => 'required|exists:dojos,id',
        ]);

        $vehicles = new Vehicle();
        $vehicles->make = $request->make;
        $vehicles->model = $request->model;
        $vehicles->year = $request->year;
        $vehicles->color = $request->color;
        $vehicles->weight = $request->weight;
        $vehicles->dojo_id = $request->dojo_id;
        $vehicles->save();

        return redirect()->route('vehicles.index');
    }

    public function edit($id)
    {
        $vehicle = Vehicle::find($id);
        return view('vehicles.edit', compact('vehicles'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'make' => 'required|string',
            'model' => 'required|string',
            'year' => 'required|integer',
            'color' => 'required|string',
            'weight' => 'required|integer',
            'dojo_id' => 'required|exists:dojos,id',
        ]);

        $vehicles = Vehicle::find($id);
        $vehicles->make = $request->make;
        $vehicles->model = $request->model;
        $vehicles->year = $request->year;
        $vehicles->color = $request->color;
        $vehicles->weight = $request->weight;
        $vehicles->dojo_id = $request->dojo_id;
        $vehicles->save();

        return redirect()->route('vehicles.index');
    }

    public function destroy($id)
    {
        $vehicles = Vehicle::find($id);
        $vehicles->delete();

        return redirect()->route('vehicles.index')->with('success', 'Vehicle deleted successfully');;
    }
}
