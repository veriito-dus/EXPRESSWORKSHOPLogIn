<?php

namespace App\Http\Controllers;

use App\reception;
use App\User;
use App\vehiculo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class ClienteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $NuevosUser = DB::table('users')

        ->select('users.id','users.name','users.apellido', 'users.telefono', 'users.direccion','users.email','users.password')
        ->where('users.id', '=', '2')

        ->get();

        $reservaciones = DB::table('receptions')
        ->join('vehiculos', 'vehiculos.id', '=', 'receptions.id_vehiculo')
        ->join('estado_reservas', 'estado_reservas.id', '=', 'receptions.id_estado')
        ->join('mantenimientos', 'mantenimientos.id', '=', 'receptions.id_mantenimiento')
        ->join('users', 'users.id', '=', 'receptions.id_cliente')
        ->select('vehiculos.placa','receptions.fecha','receptions.id', 'mantenimientos.tipo_de_mantenimiento','users.name','users.apellido','estado_reservas.estado')
        ->where('receptions.id_cliente', '=', '2')

        ->get();

        $vehiculos = DB::table('vehiculos')
        ->select('vehiculos.id','vehiculos.placa','vehiculos.marca','vehiculos.modelo')
        ->where('vehiculos.user_id', '=', '2')
        ->where('vehiculos.estado', '=', 'en circulacion')


        ->get();

        $mantenimiento = DB::table('mantenimientos')
        ->select('mantenimientos.id','mantenimientos.tipo_de_mantenimiento')

        ->get();
        return view('client/index',['mantenimientos'=>$mantenimiento,
        'vehiculos'=>$vehiculos,'reservaciones'=>$reservaciones,
        'usuarios'=>$NuevosUser]);
        // return $id;
        // return $NuevosUser;
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
        $recepcion= new reception();
        $recepcion->id_cliente = $request->id_cliente;
        $recepcion->id_vehiculo = $request->id_vehiculo;
        $recepcion->fecha = $request->fecha;
        $recepcion->id_mantenimiento = $request->id_mantenimiento;
        $recepcion->id_estado = $request->id_estado;
        $recepcion->id_recepcionista = $request->id_recepcionista;

        $recepcion->save();
        return redirect()->route('cliente.index');
    }

    public function storeVehiculo(Request $request)
    {
        $vehiculoCliente= new vehiculo();
        $vehiculoCliente->marca = $request->marca;
        $vehiculoCliente->modelo = $request->modelo;
        $vehiculoCliente->placa = $request->placa;
        $vehiculoCliente->user_id = $request->user_id;
        $vehiculoCliente->estado = $request->estado;

        $vehiculoCliente->save();
        return redirect()->route('cliente.index');
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
        $usuario = User::findOrFail($id);
        return view('client/edit',['cliente'=>$usuario]);
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
        $estado = $request->except(['_token','_method']);
        vehiculo::where(['id'=>$id])->update($estado);
        return redirect()->route('cliente.index');
    }

    public function updateUsuer(Request $request, $id)
    {
        $datos = $request->except(['_token','_method']);
        User::where(['id'=>$id])->update($datos);
        // return back();
        return redirect()->route('cliente.index');
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
