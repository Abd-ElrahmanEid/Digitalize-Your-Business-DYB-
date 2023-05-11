<?php

namespace App\Http\Controllers;

use App\Models\Communicate;
use Illuminate\Http\Request;

class UserComplaintController extends Controller
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
        return view('contactus');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Communicate::create([
            'content' => $request['content'],
            'user_id' => auth()->user()->id,
        ]);

        return redirect()->route('usercomplaint.create')->with('success' , 'We have received your complaint');
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
