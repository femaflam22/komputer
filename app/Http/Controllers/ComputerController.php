<?php

namespace App\Http\Controllers;

use App\Models\Computer;
use Illuminate\Http\Request;

class ComputerController extends Controller
{
    public function index()
    {
        $computers = Computer::orderBy('lab')->get();
        return view('index');
    }

    public function create()
    {
        return view('create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'merk' => 'required|min:2',
            'type' => 'required|min:3',
            'lab' => 'required',
        ]);

        Computer::create([
            'merk' => $request->merk,
            'type' => $request->type,
            'lab' => $request->lab,
        ]);

        return redirect()->route('index')->with('add', 'Success add new computer!');
    }

    public function show(Computer $computer)
    {
        //
    }

    public function edit($id)
    {
        $computer = Computer::where('id', $id)->first();
        return view('edit', compact('computer'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'merk' => 'required|min:2',
            'type' => 'required|min:3',
            'lab' => 'required',
        ]);

        Computer::where('id', $id)->update([
            'merk' => $request->merk,
            'type' => $request->type,
            'lab' => $request->lab,
        ]);

        return redirect('/index')->with('update', 'Success update data computer!');   
    }

    public function destroy($id)
    {
        Computer::delete();
        return redirect()->back()->with('delete', 'Data computer was deleted!');
    }
}
