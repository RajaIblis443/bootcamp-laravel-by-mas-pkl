@php
    use Illuminate\Support\Str;
@endphp

    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Lato:ital,wght@0,100;0,300;0,400;0,700;0,900;1,100;1,300;1,400;1,700;1,900&display=swap" rel="stylesheet">
        <title>Profile | BagasKara</title>
        @vite('resources/css/app.css')
    </head>
    <style>
                /* *{
                    
                    border: 1px solid red
                } */
            html{
                
                scroll-behavior: smooth;
            }
    </style>
    <body class="flex flex-col justify-center max-w-full min-h-screen text-xl font-lato">
        
        <x-navbar/>
        
        <div class="container self-center" id="container">

        
            <div id="hero" class="flex items-center justify-center mt-32 ">
                @yield('hero')
            </div>
            
            <div id="about" class="mx-48 mt-52 container-md">
                @yield('about')
            </div>
            

            <div  id="projects" class="mt-96">
                @yield('projects')
            </div>

            

        
        </div>
        
    
        
    </body>
    </html>
