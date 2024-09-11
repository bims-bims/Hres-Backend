<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\BudgetService;

class BudgetServicesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
       $DataUserOffice = BudgetService::with('OfficeUser')->get();
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
        $DataUserOffice = BudgetService::find($id);
        return response()->json([
            'status' => '200',   
            'data' => $DataUserOffice,
            
        ]);
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
