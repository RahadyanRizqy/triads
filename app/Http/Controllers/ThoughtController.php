<?php

namespace App\Http\Controllers;

use App\Models\Thoughts;
use App\Models\Works;
use Illuminate\Http\Request;

class ThoughtController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return true;
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
        $request->validate([
            'chapter_id' => 'required|max:1000',
            'prehtml' => 'required|nullable',
            'work_fk' => 'required|max:1',
        ]);

        $input = $request->all();
        $input['status'] = 'success';
        return response()->json(Thoughts::create($input));
    }

    /**
     * Display the specified resource.
     */
    public function show(Thoughts $thoughts)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Thoughts $thoughts)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Thoughts $thoughts)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Thoughts $thoughts)
    {
        //
    }
}
