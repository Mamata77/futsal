<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Futsal;
use Illuminate\Support\Carbon;

class FutsalController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $futsal = Futsal::paginate(5);
        return view('admin.futsal', compact('futsal'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.futsalcreate');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'address' => 'required',
            'price' => 'required',
            'description' => 'required',
            'image' => 'required'
        ]);

        $futsal = new Futsal();
        $futsal->address = $request->address;
        $futsal->price = $request->price;
        $futsal->description = $request->description;

        $imageName = Carbon::now()->timestamp. '.' . $request->image->extension();
        $request->image->move(public_path('images'), $imageName);
        $futsal->image = $imageName;
        $futsal->save();
        return redirect()->route('futsal.index')->with('success', "Futsal Item has been created Successfully.");
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $futsal = Futsal::find($id);
        return view('admin.futsalupdate', compact('futsal'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'address' => 'required',
            'price' => 'required',
            'description' => 'required',
            'image' => 'required'
        ]);

        $futsal = Futsal::find($id);
        $futsal->address = $request->address;
        $futsal->price = $request->price;
        $futsal->description = $request->description;

        $imageName = Carbon::now()->timestamp. '.' . $request->image->extension();
        $request->image->move(public_path('images'), $imageName);
        $futsal->image = $imageName;
        $futsal->save();
        return redirect()->route('futsal.index')->with('success', "Futsal Item has been Updated Successfully.");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $futsal = Futsal::find($id);
        $futsal->delete();
        return redirect()->route('futsal.index')->with('success', "Futsal Item has been deleted Successfully.");

    }
}
