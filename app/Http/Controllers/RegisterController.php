<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class RegisterController extends Controller
{
	public function create()
	{
		return view('auth.register');
	}
	public function store()
	{
		$this->validate(request(), [
			'name' => 'required',
			'apellido'=>'required',
			'telefono'=>'required',
			'email' => 'required|email',
			'password' => 'required|confirmed'
		]);
		$user = User::create(request(['name','apellido','telefono','direccion','email', 'password']));

		auth()->login($user);
		return redirect()->to('/cliente');
	}
}
