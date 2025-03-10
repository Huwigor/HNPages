<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=instrument-sans:400,500,600" rel="stylesheet" />

    <script src="https://accounts.google.com/gsi/client" async defer></script>

    <title>Cadastro</title>
    <style>
        body{
            background-color:white !important;
            font-family: 'Abel', sans-serif !important;
        }
    </style>
</head>
    @vite('resources/css/mobile/header-mobile.css')
    @vite('resources/css/mobile/create-user-mobile.css')
    @vite('resources/css/mobile/components/footer.css')
    @vite('resources/js/app.js')
    @vite('resources/css/app.css')
    @vite('resources/js/mobile/validate-inputs.js')
    @vite('resources/js/mobile/eyes-input-create-user.js')
<body>

 
  <header id="header">
    @include('mobile.components.header-mobile')
  </header>
  
     
    <div class="box-requisitos mx-auto">
        <div>
            <h3 style="margin-bottom:20px;width:95%;">Crie sua conta para ter acesso a todo o conteúdo..</h3>
        </div>
        <div class="d-flex">
            <img src="{{asset('imgs/icon-verified.gif')}}" alt="" style="height:20px;margin-right:7px">
            <p class="d-flex" style=""> O nome deve ter no mínimo 8 caracteres..</p>
        </div>
        <div class="d-flex">
            <img src="{{asset('imgs/icon-verified.gif')}}" alt="" style="height:20px;margin-right:7px">
            <p>A senha deve ter no mínimo 8 caracteres e um símbolo#</p>
        </div>
   </div>

   <a href="/auth/google" class="google-login-btn mx-auto">
            <img src="{{asset('imgs/icon-google.png')}}" alt="Google Logo" class="google-icon">
            Cadastre-se com o Google
        </a>



<div class="g_id_signin" data-type="standard"></div>
    <div>
        <form class="mx-auto" action="" method="POST" id="form-create-user">
            @csrf
            <div class="box-inputs">
                <div class="d-flex">
                    <label class="d-flex labels" for="usuario">Nome</label>
                    <img class="error-icon" id="error-name" src="{{asset('imgs/icon-error.png')}}" alt=""> 
                    <p id="erro-user" class="erros-input"></p>
                </div>
                <input type="text" class="inputs" id="usuario" name="usuario" placeholder="Digite seu nome" autocomplete="username">
            </div>
            <div class="box-inputs">
                <div class="d-flex">
                    <label class="d-flex labels" for="email">Email</label>
                    <img class="error-icon" id="error-email" src="{{asset('imgs/icon-error.png')}}" alt="">
                </div>
                <input type="text" class="inputs" id="email" name="email" placeholder="Digite seu email">
                <p id="erro-email" class="erros-input"></p>
            </div>
            <div class="box-inputs"> 
                <div class="d-flex">
                    <label for="senha" class="labels">Senha</label>
                    <img class="error-icon" id="error-password" src="{{asset('imgs/icon-error.png')}}" alt="">
                </div>
                <div>
                    <input class="inputs-hidden-pass1" type="password" id="senha" name="senha" placeholder="Digite sua senha" autocomplete="new-password">
                    <div>
                        <img class="pass-hidden open-eye1" src="{{asset('imgs/input-show.png')}}" alt="">
                        <img class="pass-hidden close-eye1" src="{{asset('imgs/input-hidden.png')}}" alt="">
                    </div>
                </div>
                <p id="erro-senha" class="erros-input"></p>            
            </div>
            <div class="box-inputs">
                <div class="d-flex">
                    <label for="confirm-senha" class="labels">Confirmar Senha </label>
                    <img class="error-icon" id="error-confirm-pass" src="{{asset('imgs/icon-error.png')}}" alt="">
                </div>
                <div>
                    <input class="inputs-hidden-pass2" type="password" id="confirm-senha" name="confirm-senha" placeholder="Digite sua senha novamente" autocomplete="new-password">
                    <div>
                        <img class="pass-hidden open-eye2" src="{{asset('imgs/input-show.png')}}" alt="">
                        <img class="pass-hidden close-eye2" src="{{asset('imgs/input-hidden.png')}}" alt="">
                    </div>
                </div>
                <p id="erro-repeat" class="erros-input"></p>           
            </div>
            <p id="erro-create-user"></p>
            <button type="submit" class="btn-cad btn btn-sm btn-dark mx-auto">Cadastrar</button>
            <div class="box-link">
                <p class="span-link mx-auto">Bem vindo novamente! entre em sua conta clicando <a href="">Aqui</a></p>
            </div>
        </form>
    </div>


    <div>
        @include('mobile.components.footer')
    </div>


  <script
        src="https://code.jquery.com/jquery-3.7.1.min.js"
        integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo="
        crossorigin="anonymous"></script>
    
    
</body>
</html>