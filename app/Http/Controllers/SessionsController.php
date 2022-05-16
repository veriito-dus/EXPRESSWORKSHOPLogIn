<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class SessionsController extends Controller
{
	public function create()
	{
		return view('auth.login');
	}
	public function store()
	{

		if (auth()->attempt(request(['email', 'password'])) == false) {
			return back()->withErrors([
				'message' => 'La contraseña o el usuario estan mal escritos, intente de nuevo',
			]);
		}else{

			if (auth()->user()->rol_id == '1') {
				return redirect()->to('/admin');
				} elseif (auth()->user()->rol_id == '2') {
						return redirect()->to('/cliente');
				} elseif (auth()->user()->rol_id == '3') {
						return redirect()->to('/inventario');
				}elseif (auth()->user()->rol_id == '4') {
					return redirect()->to('/mecanico');
				}elseif (auth()->user()->rol_id == '5') {
					return redirect()->to('/recepcion');
				}
		}
		return redirect()->to('/');
	}

	public function destroy()
	{
		auth()->logout();
		return redirect()->to('/');
	}
}
