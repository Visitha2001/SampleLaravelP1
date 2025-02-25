<?php

namespace App\Http\Controllers;

use App\Models\Ninja;
use Illuminate\Http\Request;

class NinjaController extends Controller
{
    public function index()
    {
        // route --> /ninjas/
        $ninjas = Ninja::orderBy('created_at' , 'desc')->get();

        return view('ninjas.index', ['ninjas' => $ninjas]);
    }

    // public function show($id)
    // {
    //     return view('ninja.show', ['id' => $id]);
    // }

    // public function create()
    // {
    //     return view('ninja.create');
    // }

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
