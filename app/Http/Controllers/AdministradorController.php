<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class AdministradorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $Nuevoadmin = DB::table('users')

        ->select('users.id','users.name','users.apellido', 'users.telefono', 'users.direccion','users.email','users.password')
        ->where('users.id', '=', '1')

        ->get();
        
        $NuevosUser = DB::table('users')
        ->join('rol', 'rol.id', '=', 'users.rol_id')
        ->select('users.name','users.apellido','users.telefono','users.direccion','users.email','rol.rol')
        ->where('users.rol_id', '!=', '1')

        ->get();

        $reservaciones = DB::table('receptions')
        ->join('vehiculos', 'vehiculos.id', '=', 'receptions.id_vehiculo')
        ->join('estado_reservas', 'estado_reservas.id', '=', 'receptions.id_estado')
        ->join('mantenimientos', 'mantenimientos.id', '=', 'receptions.id_mantenimiento')
        ->join('users', 'users.id', '=', 'receptions.id_cliente')
        ->select('vehiculos.placa','receptions.fecha','receptions.id', 'mantenimientos.tipo_de_mantenimiento','users.name','users.email','users.apellido','estado_reservas.estado')

        ->get();


        $inventarios = DB::table('inventarios')
        ->join('users', 'users.id', '=', 'inventarios.user_id_inventario')
        ->select('users.name','inventarios.id','inventarios.producto','inventarios.marca','inventarios.tiempo_de_uso','inventarios.cantidad','inventarios.created_at','inventarios.updated_at')

        ->get();
        
        $vehiculo = DB::table('vehiculos')

        ->join('users', 'users.id', '=', 'vehiculos.user_id')
        ->select('vehiculos.id','vehiculos.marca','vehiculos.placa', 'users.name', 'vehiculos.modelo', 'vehiculos.estado')


        ->get();

        // return $NuevosUser;
        return view('admin/index',['usuarios'=>$NuevosUser,
                                    'reservaciones'=>$reservaciones,
                                    'inventario'=>$inventarios,
                                    'vehiculos'=>$vehiculo,'admin'=>$Nuevoadmin]);

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
        $admin = User::findOrFail($id);
        return view('admin/edit',['admin'=>$admin]);
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
        $datos = $request->except(['_token','_method']);
        User::where(['id'=>$id])->update($datos);
        // return back();
        return redirect()->route('administrador.index');
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
