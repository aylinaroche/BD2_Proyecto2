<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\User;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;

class UsuariosController extends Controller
{

    public function __construct()
    {
        //$this->middleware('auth');
    }

    public function create(Request $data)
    {
        request()->validate([
            'nombre' => ['string', 'max:255'],
            'apellido' => ['string', 'max:255'],
            'edad' => ['integer'],
            'nickname' => ['required', 'string', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'confirmed'],
        ]);

        User::create([
            'nombre' => $data['nombre'],
            'apellido' => $data['apellido'],
            'edad' => $data['edad'],
            'nickname' => $data['nickname'],
            'password' => Hash::make($data['password']),
        ]);

        return redirect('/usuarios')->with('flash','Se ha agregado el usuario correctamente');
    }

    public function showForm()
    {
        return view('usuarios');
    }
}
