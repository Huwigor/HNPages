<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Laravel\Socialite\Facades\Socialite;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;

class LoginGoogleController extends Controller
{
    public function redirectToGoogle()
    {
       return Socialite::driver('google')->redirect(); 
    }

    public function handleGoogleCallback()
    {
       try{
          $user = Socialite::driver('google')->user();
          
          $login = User::where('email', $user->email)->first();

          if ($login){
            Auth::login($login);
            return redirect()->intended('/');
          } else {
            $newUser = User::create([
                'name' => $user->name,
                'email' => $user->email,
                'google_id' => $user->id,
                'password' => encrypt('123456dummy')
            ]);

            Auth::login($newUser);
            return redirect()->intended('/');       
          }
       } catch(\Throwable $e) {
        Log::error('Erro ao processar o login do Google:', [
            'message' => $e->getMessage(),
            'file' => $e->getFile(),
            'line' => $e->getLine(),
            'trace' => $e->getTraceAsString()
        ]);
        return redirect('/login-user')->withErrors('Erro ao autenticar com o Google.');
       }
    }
}
