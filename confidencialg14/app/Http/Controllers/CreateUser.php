<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class CreateUser extends Controller
{
    public function store(Request $request) {
    
        try {
            $request->validate([
                'usuario' => 'string|required',
                'email' => 'string|required',
                'senha' => 'string|required|min:8'
            ]);
    
            $user = new User();
            $user->name = $request->input('usuario');
            $user->email = $request->input('email');
            $user->password = Hash::make($request->input('senha'));
    
            if (User::where('email', $user->email)->exists()) {
                return response()->json(['success' => false, 'message' => 'O usuario já está cadastrado!'], 500);
            }

            $user->save();
            Auth::login($user);
            return response()->json(['success' => true, 'message' => 'Usuário cadastrado com sucesso!']);
    
        } catch (\Exception $e) {
            \Log::error('Erro ao criar usuário', ['error' => $e->getMessage()]);
            return response()->json(['error' => $e->getMessage()], 500);
        }
    }
}
