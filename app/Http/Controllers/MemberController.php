<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\Member\MemberStoreRequest;
use App\Http\Requests\Member\MemberUpdateRequest;
use App\Models\Member;
use Illuminate\View\View;

class MemberController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $members = Member::all();
        return view('member.index', ['members'=>$members]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(): View
    {
        return view('member.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(MemberStoreRequest $request)
    {
        //validation
        $validated = $request->validated();
        // $validated['created_by'] = $request->user()->id;
        // insert data
        $insert    = Member::create($validated);

        if($insert){
            session()->flash('status', 'member-created');
            return redirect()->route('member.index');
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
    public function edit(Request $request, string $id)
    {
        //edit member
        $member = Member::find($id);
        return view('member.edit', ['user' => $request->user(), 'member'=>$member]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(MemberUpdateRequest $request, string $id)
    {
        //update member details
        $member = Member::findOrFail($id);
        $validated = $request->validated();
        // $validated['created_by'] = $request->user()->id;

        $update = $member->update($validated);

        if($update) {
            session()->flash('status', 'Member updated successfully!');
            return redirect()->route('member.edit', $id);
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
