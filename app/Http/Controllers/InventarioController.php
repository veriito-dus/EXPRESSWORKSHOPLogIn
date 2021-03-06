<?php

namespace App\Http\Controllers;

use App\inventario;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class InventarioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $inventario = DB::table('inventarios')

        ->select('*')


        ->get();

        // return view('admin.inicioAdmin', compact('NuevosUser'));

        return view('inventario/index',['inventarios'=>$inventario]);
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
        $inventario= new inventario();
        $inventario->producto = $request->producto;
        $inventario->marca = $request->marca;
        $inventario->cantidad = $request->cantidad;
        $inventario->tiempo_de_uso = $request->tiempo_de_uso;
        $inventario->user_id_inventario = $request->user_id_inventario;

        $inventario->save();
        return redirect()->route('inventario.index');
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
        $inventario = inventario::findOrFail($id);
        return view('inventario/edit',['inventario'=>$inventario]);

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
        $datosInventarios = $request->except(['_token','_method']);
        inventario::where(['id'=>$id])->update($datosInventarios);
        // return back();
        return redirect()->route('inventario.index');
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
