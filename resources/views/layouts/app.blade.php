
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
            *{
                border: 1px solid red
            }
            html{
                scroll-behavior: smooth;
            }
    </style>
    <body class="flex flex-col justify-center min-h-screen font-lato">
        <nav class="flex justify-between px-5 py-3 border border-b-2 shadow-md text-slate-900 ">
            <x-navbar/>
        </nav>
        <div class="container self-center" id="container">

        
            <div id="hero" class="flex items-center justify-center mt-6 se">
                @yield('hero')
            </div>
        
            <div id="about" class="mx-auto mt-10 container-md">
                @yield('about')
            </div>

            <div id="projets" class="mt-14" >
                
            </div>
        
        </div>
        
    
        
    </body>
    </html>
