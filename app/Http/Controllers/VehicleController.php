<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Vehicle;

class VehicleController extends Controller
{
    public function index()
    {
        $vehicle = Vehicle::with('dojo')->orderBy('created_at' , 'desc')->paginate(10);
        return view('vehicles.index' , ['vehicle' => $vehicle]);
    }

    public function show(Vehicle $vehicle)
    {
        $vehicle->load('dojo');
        return view('vehicles.show', ['vehicle' => $vehicle]);
    }

    public function create()
    {
        return view('vehicles.create');
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

        $vehicle = new Vehicle();
        $vehicle->name = $request->name;
        $vehicle->model = $request->model;
        $vehicle->year = $request->year;
        $vehicle->color = $request->color;
        $vehicle->weight = $request->weight;
        $vehicle->dojo_id = $request->dojo_id;
        $vehicle->save();

        return redirect()->route('vehicles.index');
    }

    public function edit($id)
    {
        $vehicle = Vehicle::find($id);
        return view('vehicles.edit', compact('vehicle'));
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

        $vehicle = Vehicle::find($id);
        $vehicle->name = $request->name;
        $vehicle->model = $request->model;
        $vehicle->year = $request->year;
        $vehicle->color = $request->color;
        $vehicle->weight = $request->weight;
        $vehicle->dojo_id = $request->dojo_id;
        $vehicle->save();

        return redirect()->route('vehicles.index');
    }

    public function destroy($id)
    {
        $vehicle = Vehicle::find($id);
        $vehicle->delete();

        return redirect()->route('vehicles.index');
    }
}
