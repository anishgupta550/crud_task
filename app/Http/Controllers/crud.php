<?php

namespace App\Http\Controllers;

use App\Models\crudModel;
use Illuminate\Http\Request;

class crud extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // $data = crudModel::get();
        // return view('crud', compact('data'));
        $data = crudModel::get();
        return view('crud', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email',
        ],
        [
            'name' => 'Name is required',
            'email' => 'Email is required',
            'email' => 'Email is not valid',
        ]);
        $data = crudModel::create([
            'name' => $request->name,
            'email' => $request->email,
        ]);
        return redirect()->route('crud.index')->with('status',"Data Add SuccessFully");
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $data = crudModel::findOrFail($id);
        return view('single', compact('data'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $data = crudModel::find($id);
        return view('edit', compact('data'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email',
        ],
        [
            'name' => 'Name is required',
            'email' => 'Email is required',
            'email' => 'Email is not valid',
        ]);
        $data = crudModel::findOrFail($id);
        $data->update([
            'name' => $request->name,
            'email' => $request->email,
        ]);
        return redirect()->route('crud.index')->with('status',"Data Update SuccessFully");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $data = crudModel::destroy($id);
        return redirect()->route('crud.index')->with('status',"Data Delete SuccessFully");
    }
}
