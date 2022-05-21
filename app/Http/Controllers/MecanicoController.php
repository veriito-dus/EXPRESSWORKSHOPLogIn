<?php

namespace App\Http\Controllers;

use App\historial;
use App\reception;
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
        $reservaciones = DB::table('receptions')
        ->join('vehiculos', 'vehiculos.id', '=', 'receptions.id_vehiculo')
        ->join('estado_reservas', 'estado_reservas.id', '=', 'receptions.id_estado')
        ->join('mantenimientos', 'mantenimientos.id', '=', 'receptions.id_mantenimiento')
        ->join('users', 'users.id', '=', 'receptions.id_cliente')
        ->select('vehiculos.placa','receptions.fecha','receptions.id', 'mantenimientos.tipo_de_mantenimiento','users.name','users.apellido','estado_reservas.estado')
        ->where('receptions.id_estado', '=', '4')

        ->get();

        $reservacionesPendiente = DB::table('receptions')
        ->join('vehiculos', 'vehiculos.id', '=', 'receptions.id_vehiculo')
        ->join('estado_reservas', 'estado_reservas.id', '=', 'receptions.id_estado')
        ->join('mantenimientos', 'mantenimientos.id', '=', 'receptions.id_mantenimiento')
        ->join('users', 'users.id', '=', 'receptions.id_cliente')
        ->select('vehiculos.placa','receptions.fecha','receptions.id', 'mantenimientos.tipo_de_mantenimiento','users.name','users.apellido','estado_reservas.estado')
        ->where('receptions.id_estado', '=', '2')

        ->get();

        // return $NuevosUser.$vehiculos.$mantenimiento;
        return view('mecanico',['reservaciones'=>$reservaciones,
                                'reservacionesPendientes'=>$reservacionesPendiente]);
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
        $historial = new historial();
        $historial->user_id_mecanico= $request->user_id_mecanico;
        $historial->reserva_id= $request->reserva_id;
        $historial->observaciones= $request->observaciones;

        $historial->save();
        return redirect()->route('mecanico.index');
        
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
        $estadoReserva = $request->except(['_token','_method']);
        reception::where(['id'=>$id])->update($estadoReserva);

        return redirect()->route('mecanico.index');
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
