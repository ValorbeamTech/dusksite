<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Response;
use App\Models\Contact;
use App\Http\Requests\Contact\ContactStoreRequest;
use App\Http\Requests\Contact\ContactUpdateRequest;

use Illuminate\View\View;

class ContactController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(ContactStoreRequest $request): RedirectResponse
    {
        //validation
        $validated = $request->validated();
        $validated['created_by'] = $request->user()->id;
        // insert data
        $insert    = Contact::create($validated);

        if($insert){
            session()->flash('status', 'contact-created');
            return redirect()->route('contact.index');
        }
        return abort(500);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Request $request, Contact $contact): View
    {
        //edit contacts
        return view('contact.edit', ['user' => $request->user(), 'contact'=>$contact]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(ContactUpdateRequest $request, string $id)
    {
        //update contact details
        $contact = Contact::findOrFail($id);
        $validated = $request->validated();
        $validated['created_by'] = $request->user()->id;

        $update = $contact->update($validated);

        if($update) {
            session()->flash('status', 'Contact updated successfully!');
            return redirect()->route('contact.edit', $id);
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
