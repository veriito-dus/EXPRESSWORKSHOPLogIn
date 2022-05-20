<?php

namespace App\Http\Controllers;

// use App\mantenimiento;
use App\reception;
// use App\User;
// use App\vehiculo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ReceptionController extends Controller
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

        ->get();

        $vehiculos = DB::table('vehiculos')
        ->select('vehiculos.id','vehiculos.placa')


        ->get();

        $mantenimiento = DB::table('mantenimientos')
        ->select('mantenimientos.id','mantenimientos.tipo_de_mantenimiento')

        ->get();

        $usuario = DB::table('users')
        ->select('users.id','users.name','users.apellido')
        ->where('rol_id', '=', '2')

        ->get();


        // return $NuevosUser.$vehiculos.$mantenimiento;
        return view('recepcion',['mantenimientos'=>$mantenimiento,
                                    'vehiculos'=>$vehiculos,
                                    'reservaciones'=>$reservaciones,
                                    'usuarios'=> $usuario]);
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // return view('recepcion');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // return $request->all();
        $recepcion= new reception();
        $recepcion->id_cliente = $request->id_cliente;
        $recepcion->id_vehiculo = $request->id_vehiculo;
        $recepcion->fecha = $request->fecha;
        $recepcion->id_mantenimiento = $request->id_mantenimiento;
        $recepcion->id_estado = $request->id_estado;
        $recepcion->id_recepcionista = $request->id_recepcionista;

        $recepcion->save();
        return redirect()->route('recepcion.index');
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
        return redirect()->route('recepcion.index');
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
