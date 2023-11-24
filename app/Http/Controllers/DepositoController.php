<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Deposito;

class DepositoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(string $id,string $id2,string $nomb)
    {
        //
        $empleado=$id;
        $afi=$id2;
        $nombre=$nomb;
       
        $datosDeposito=Deposito::all();
        return view('deposito.index')->with('datosDeposito', $datosDeposito)
        ->with('empleado',$empleado)->with('afi',$afi)
        ->with('nombre',$nombre);
        
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(string $nombre)
    {
        //
        $datos=$nombre;
        return view('deposito.create')->with('nombre', $datos);
       
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
