<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\About;
use Illuminate\View\View;
use App\Http\Requests\About\AboutUpdateRequest;

class AboutController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
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
    public function edit(Request $request, About $about): View
    {
        // edit about
        return view('about.edit', ['user' => $request->user(), 'about'=>$about]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(AboutUpdateRequest $request, string $id)
    {
        // update about details
         //update contact details
         $about = About::findOrFail($id);
         $validated = $request->validated();
        //  $validated['created_by'] = $request->user()->id;
 
         $update = $about->update($validated);
 
         if($update) {
             session()->flash('status', 'About updated successfully!');
             return redirect()->route('about.edit', $id);
         }
 
         return abort(500);
 
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
