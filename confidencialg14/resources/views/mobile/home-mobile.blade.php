<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>

    @vite('resources/js/app.js')
    @vite('resources/css/app.css')
    @vite('resources/views/choice-resolution.js')
    @vite('resources/js/mobile/home-mobile.js')
    @vite('resources/css/mobile/home-mobile.css')
    @vite('resources/css/mobile/components/footer.css')


</head>
<body>

    <img class="img-body" src="{{asset('imgs/main-hnpages.webp')}}" alt="">
    <div class="overflow-body"></div>
    <header id="header">

         <h1 class="navbar-brand d-flex">HNPages <img class="icon-logo" src="{{asset('imgs/icon-logo.png')}}" alt=""></h1>
         <button id="btn-menu" class="menu-btn ms-auto">
            <div class="line1 line"></div>
            <div class="line2 line"></div>
            <div class="line3 line"></div>
         </button>
    </header>

    <div id="menu-header">

        <span><svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6 svg-up-menu">
        <path stroke-linecap="round" stroke-linejoin="round" d="m4.5 15.75 7.5-7.5 7.5 7.5" />
        </svg></span>

        @guest
            <div class="box-new-user">
                <div class="d-flex">
                    <img class="icon-new-user" src="{{asset('imgs/user-account.png')}}" alt=""> 
                    <div class="box-txt-new-user">
                        <span style="font-size:18px;font-weight:bold;">Olá, visitante!</span>
                        <span>Se ainda não possui uma conta, crie a sua agora mesmo!</span>
                    </div>
                </div>
                <div class="d-flex container-fluid" style="min-width:100%;">
                    <button class="btn btn-sm btn-primary btn-new-user" style="margin-right:10px" onclick="window.location.href='/login-user'">Entrar</button>
                    <button class="btn btn-sm btn-light btn-new-user" style="border:1px solid blue;color:blue;" onclick="window.location.href='{{route('create-user')}}'">Cadastrar</button>
                </div>    
            </div>
        @endguest
        @auth
             <div class="auth-true">
                <div class="anuncio-planos-auth">
                     <p>Conheça nossos planos e comece a criar páginas dinamicamente..</p>
                     <button class="btn btn-sm btn-dark">Começar!</button>
                </div>
                <img class="icon-auth-user" src="{{asset('imgs/body-img.jpg')}}" alt="">
                <div class="overflow-icon"></div>          
             </div>
        @endauth
        <div class="sub-menu">
            @auth
             <a href="#" class="btn-auth d-flex"><img src="{{asset('imgs/user-account.png')}}" alt="" height="25px" width="25px" style="margin-right:5px"> Olá, {{auth()->user()->name}}! <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6 svg-auth">
                <path stroke-linecap="round" stroke-linejoin="round" d="m19.5 8.25-7.5 7.5-7.5-7.5" />
                </svg></a>
             <div class="user-options mx-auto">
                <a href="#" class="d-flex"><img src="{{asset('imgs/icon-page.png')}}" alt="" style="height:20px;margin-right:5px;"> Suas Páginas</a>
                <a href="#" class="d-flex"><img src="{{asset('imgs/user-data.png')}}" alt="" style="height:20px;margin-right:5px;"> Sua Conta</a>
                <a href="/logout-user" class="d-flex"><img src="{{asset('imgs/logout-user.png')}}" alt="" style="height:20px;margin-right:5px;"> Sair</a>
             </div>
            @endauth
            <a href="#" class="d-flex"><img src="{{asset('imgs/icon-page.png')}}" alt="" class="icon-sub-menu"> Criar Páginas</a>
            <a href="#" class="d-flex"><img src="{{asset('imgs/icon-planos.png')}}" alt="" class="icon-sub-menu"> Planos Usuario</a>
            <a href="#" class="d-flex"><img src="{{asset('imgs/icon-tutorial.png')}}" alt="" class="icon-sub-menu"> Tutorial</a>
            <a href="#" class="d-flex"><img src="{{asset('imgs/icon-help.png')}}" alt="" class="icon-sub-menu"> Central de Ajuda</a>
            <a href="#" class="d-flex"><img src="{{asset('imgs/icon-contato.png')}}" alt="" class="icon-sub-menu"> Contato</a>
        </div>
    </div>

    <div class="box-main">
        <div class="box-main-txt">
            <h5 class="">Crie um site com apenas alguns cliques..</h5>
            <button class="btn btn-sm btn-info btn-começar-main">Começar</button>
        </div>
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
