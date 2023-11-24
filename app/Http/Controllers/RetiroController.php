<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Retiro;

class RetiroController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(string $id,string $id2)
    {
        //
        $empleado=$id;
        $afi=$id2;
        $datosRetiro=Retiro::all();
        return view('retiro.index')->with('datosRetiro', $datosRetiro)
        ->with('empleado',$empleado)->with('afi',$afi);
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
