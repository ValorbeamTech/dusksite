<?php

namespace App\Http\Controllers;

use App\Http\Requests\Testimonial\TestimonialStoreRequest;
use App\Models\Testimonial;
use Illuminate\Http\Request;


class TestimonialController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        echo "I went cool";
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('testimonial.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(TestimonialStoreRequest $request)
    {
        
        $validated = $request->validated();
        $file = $request->file('img');
        $filename = date('YmdHi').$file->getClientOriginalName();
        $file->move(public_path('uploads'), $filename);

        $testimonial = new Testimonial();
        $testimonial->img = $filename;
        $testimonial->name = $validated['name'];
        $testimonial->description = $validated['description'];
        $testimonial->profession = $validated['profession'];

        $insert    = $testimonial->save();

        if($insert){
            session()->flash('status', 'testimonial-created');
            return redirect()->route('testimonial.index');
        }
        return abort(500);
        
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
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
