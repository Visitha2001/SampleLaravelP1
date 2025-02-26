<?php

namespace App\Http\Controllers;

use App\Models\Ninja;
use App\Models\Dojo;
use Illuminate\Http\Request;

class NinjaController extends Controller
{
    public function index()
    {
        // route --> /ninjas/
        // 10 results per page and load the dojo relationship with the current ninjas collection all with a single query
        $ninjas = Ninja::with('dojo')->orderBy('created_at' , 'desc')->paginate(10);
        return view('ninjas.index', ['ninjas' => $ninjas]);
    }

    public function show($id)
    {
        // route --> /ninjas/{id}
        // load the dojo relationship with the current ninja model by id and return the show view with the ninja data
        $ninja = Ninja::with('dojo')->findOrFail($id);
        return view('ninjas.show', ['ninja' => $ninja]);
    }

    public function add()
    {
        $dojos = Dojo::all();

        // route --> /add
        return view('ninjas.add' , ['dojos' => $dojos]);
    }

    // public function store()
    // {
    //     return redirect()->route('ninja.index');
    // }

    // public function edit($id)
    // {
    //     return view('ninja.edit', ['id' => $id]);
    // }

    // public function update($id)
    // {
    //     return redirect()->route('ninja.show', ['id' => $id]);
    // }

    // public function destroy($id)
    // {
    //     return redirect()->route('ninja.index');
    // }
}
