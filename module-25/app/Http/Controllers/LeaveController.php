<?php

namespace App\Http\Controllers;

use App\Http\Resources\LeaveResource;
use App\Models\Leave;
use Illuminate\Http\Request;
use Inertia\Inertia;
use Inertia\Response;

class LeaveController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(): Response
    {
        $leaves = Leave::with('user')->get();
        return Inertia::render(
            'Admin/Leaves/LeaveIndex',
            [
                'leaves' => $leaves
            ]
        );
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
    public function show(Leave $leave)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Leave $leave)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Leave $leave)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Leave $leave)
    {
        //
    }
}
