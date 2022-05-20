<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class MecanicoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $reservacion = DB::table('receptions')
        ->join('vehiculos', 'vehiculos.id', '=', 'receptions.id_vehiculo')
        ->join('estado_reservas', 'estado_reservas.id', '=', 'receptions.id_estado')
        ->join('mantenimientos', 'mantenimientos.id', '=', 'receptions.id_mantenimiento')
        ->join('users', 'users.id', '=', 'receptions.id_cliente')
        ->select('vehiculos.placa','receptions.fecha','receptions.id', 'mantenimientos.tipo_de_mantenimiento','users.name','users.apellido','estado_reservas.estado')
        ->get();
        return view('mecanico',['reservaciones'=>$reservacion]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
