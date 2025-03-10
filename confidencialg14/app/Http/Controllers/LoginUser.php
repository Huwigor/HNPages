<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class LoginUser extends Controller
{
  public function LoginAuth(Request $request){
    try{

        $request->validate([
            'email' => 'string|required',
            'password' => 'string|required'
        ]);

        $user = User::where('email', $request->email)->first();

        if(!$user || !Hash::check($request->password, $user->password)){
            
            return response()->json([
                'success' => false,
                'message' => 'Credenciais Inválidas!'
            ]);   
        }

        Auth::login($user);
        return response()->json([
            'success' => true,
            'message' => 'Login realizado com sucesso!'
        ]);

    } catch(\Exception $e) {
        return response()->json(['error' => 'Erro ao tentar o login', $e->getMessage()], 500);
    }
  }
}
