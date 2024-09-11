<?php

namespace App\Http\Controllers;
use App\Models\OfficeUser;
use Illuminate\Http\Request;

class ApiUserOffice extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $DataUserOffice = OfficeUser::all();
        return response()->json([
            'status' => '200',   
            'data' => $DataUserOffice,
            
        ]);
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
