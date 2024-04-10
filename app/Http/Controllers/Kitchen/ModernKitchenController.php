<?php

namespace App\Http\Controllers\Kitchen;

use App\Http\Controllers\Controller;
use App\Models\ModernKitchen;
use Illuminate\Http\Request;

class ModernKitchenController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view("web.kitchens.modern");
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
    public function show(ModernKitchen $modernKitchen)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(ModernKitchen $modernKitchen)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, ModernKitchen $modernKitchen)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(ModernKitchen $modernKitchen)
    {
        //
    }
}
