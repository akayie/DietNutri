<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Disease;

class DiseaseController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $diseases = Disease::all();
        return view('backend.disease.list',compact('diseases'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('backend.disease.create');

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // var_dump ($request->all());
        // die();
        $request->validate([
            'diseaseName' => 'required',
        ]);
        
        $diseaseName = $request->diseaseName;

        // store into database table
        Disease::create([
            'name' => $diseaseName,
        ]);
        // return $diseaseName;
        // redirect to list page (index)

        return redirect()->route('diseases.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
            return view('backend.disease.detail', compact('id'));

    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $disease = Disease::find($id);
        return view('backend.disease.edit', compact('disease'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
       // var_dump ($request->all());
        // die();
        $request->validate([
            'diseaseName' => 'required|min:3',
        ]);
        
        $diseaseName = $request->diseaseName;

        // store into database table
        $disease = Disease::find($id);
        $disease->name = $diseaseName;
        $disease->save();
        // return $diseaseName;
        // redirect to list page (index)

        return redirect()->route('diseases.index');
    }

    /**
     * Remove the specified resource from storage.
     */
   public function destroy(string $id)
{
    $disease = Disease::findOrFail($id);
    $disease->delete();
    return redirect()->route('diseases.index');
}

}
