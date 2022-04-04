<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UsersController extends Controller
{
    public function index(){
        return view('welcome');
    }
    public function store(Request $request){

        $data = $request->all();
        $data['password'] = bcrypt($request->password);

        User::create($data);

        dd($data);

    }
    public function logar(){
        return view('logar');
    }
    public function login(Request $request){
        if(Auth::attempt(['email' => $request->email, 'password' => $request->password])){

            return view('index');

        }else{
            return view('logar');
        }
    }
}
