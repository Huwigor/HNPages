<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Home</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=instrument-sans:400,500,600" rel="stylesheet" />

        @vite('resources/js/app.js')
        @vite('resources/css/app.css')
        @vite('resources/views/choice-resolution.js')

        <style>
            #main{
                height:100%;
                width: 100%;
                position: relative;
                top:250px;
                left:40%;
            }
            .loading-spinner {
                width: 50px;
                height: 50px;
                border: 5px solid #ccc;
                border-top-color: #3498db;
                border-radius: 50%;
                animation: spin 1s linear infinite;
            }

            @keyframes spin {
                from {
                    transform: rotate(0deg);
                }
                to {
                    transform: rotate(360deg);
                }
            }
        </style>

    </head>
    <body>

    <div id="main">
        <div class="loading-spinner"></div>
    </div>

      
       
    </body>
</html>
