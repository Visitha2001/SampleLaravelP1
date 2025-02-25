<?php

namespace App\Http\Controllers;

use App\Models\Ninja;
use Illuminate\Http\Request;

class NinjaController extends Controller
{
    public function index()
    {
        // route --> /ninjas/
        $ninjas = Ninja::orderBy('created_at' , 'desc')->paginate(10);
        return view('ninjas.index', ['ninjas' => $ninjas]);
    }

    public function show($id)
    {
        $ninja = Ninja::findOrFail($id);
        return view('ninjas.show', ['ninja' => $ninja]);
    }

    public function create()
    {
        return view('ninjas.create');
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
