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
        *{
            border: 1px solid red
        }
</style>
<body class="flex justify-center min-h-screen ">
    <div class="container" id="container">
        <nav class="flex justify-between px-5 py-3 border border-b-2 shadow-md text-slate-900">
            <x-navbar/>
        </nav>
    
        <header class="mt-10 bg-gradient-to-br from-sky-300 to-sky-800 bg-clip-text">
            <h1 class="text-5xl font-bold text-center text-transparent">Welcome To My Portfolio!!!</h1>
        </header>
    
        <div id="hero" class="flex justify-center mt-6 ">
            <x-hero/>
        </div>
    
        <div id="about" class="mx-56 mt-10">
            <h2> Siapa Saya? </h2>
            <p>Saya adalah seorang siswa di sekolah SMK N 1 Bantul, saya masuk ke sekolah ini di karenakan ada  <span class="font-bold">DEWA UI/UX</span>. saya minat dengan dunia programer sejak kecil, awal mulanya saya tertarik cyber security dan saya itu sejak kecil bermain termux untuk membuat virus dan saya hobi memodifikasi sistem handphone saya walapun saya masih mengunakan project orang lain.</p>
            
            <p>
                <span>Skil</span> saya di bidang it saya mendalami bahasa <span>javascript</span> sebagai bahasa utama saya 
            </p>
            
            <p>
                
            </p>
        </div>
    
    </div>
    
   
    
</body>
</html>
