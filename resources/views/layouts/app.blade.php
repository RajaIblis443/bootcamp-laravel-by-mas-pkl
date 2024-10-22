<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Profile | BagasKara</title>
    @vite('resources/css/app.css')
</head>
<style>
    /* *{
        border: 1px solid red
    } */
</style>
<body class="min-h-screen">
    
    <nav class="flex justify-between px-5 py-3 border border-b-2 text-slate-900">
        <x-navbar/>
    </nav>

    <header class="mt-10 bg-gradient-to-br from-sky-300 to-sky-800 bg-clip-text">
        <h1 class="text-3xl font-bold text-center text-transparent">Welcome To My Portfolio!!!</h1>
    </header>

    <div id="hero" class="flex justify-center mt-6">
        <x-hero/>
    </div>

    
</body>
</html>
