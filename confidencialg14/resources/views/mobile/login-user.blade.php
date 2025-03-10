<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Login Usuario</title>

    @vite('resources/css/mobile/header-mobile.css')
    @vite('resources/css/mobile/components/footer.css')
    @vite('resources/js/app.js')
    @vite('resources/css/app.css')
    @vite('resources/css/mobile/login-user-mobile.css')
    @vite('resources/js/mobile/login-user-mobile.js')
    @vite('resources/js/mobile/eyes-input-login-user.js')


    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=instrument-sans:400,500,600" rel="stylesheet" />

    <script src="https://accounts.google.com/gsi/client" async defer></script>

    <style>
        body{
            background-color:white !important;
            font-family: 'Abel', sans-serif !important;
        }
    </style>
</head>
<body>

  <div>
    @include('mobile.components.header-mobile')
  </div>

    <div>
        <form id="form-login" class="mx-auto" action="" method="POST">
          @csrf
           <div class="input-group">
               <label class="label-login" for="email">Email</label>
               <div>
                 <input class="input-login" type="text" id="email" name="email" placeholder="Digite seu email..">
               </div>
           </div>
           <div class="input-group">
               <label class="label-login" for="password">Senha</label>
               <div class="box-password">
                  <input class="input-login" type="password" id="password" name="password" style="margin-bottom:10px" placeholder="Digite sua senha..">
                  <img class="pass-hidden open-eye1" src="{{asset('imgs/input-show.png')}}" alt="">
                  <img class="pass-hidden close-eye1" src="{{asset('imgs/input-hidden.png')}}" alt="">
               </div>
           </div>
           <div class="d-flex">
               <img class="error-icon" id="error-email" src="{{asset('imgs/icon-error.png')}}" alt="">
               <p id="erro-login-user"></p>
           </div>
           <button type="submit" class="btn-entrar btn btn-sm btn-dark">Entrar</button>

           <a href="{{route('login-user-google')}}" class="google-login-btn mx-auto d-flex">
            <img src="{{asset('imgs/icon-google.png')}}" alt="Google Logo" class="google-icon">
            Entrar com o Google</a>

            <p></p>
        </form>
    </div>


  <div>
    @include('mobile.components/footer')
  </div>
    
</body>
</html>