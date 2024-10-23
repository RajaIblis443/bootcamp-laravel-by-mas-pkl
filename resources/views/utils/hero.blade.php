@extends('layouts.app')

@section('hero')
<div id="hero-icon" class="relative"><div id="hero-img" class="w-96 mr-36">
        <img src="{{ asset('images/hero.png') }}" alt="Bagas" class="rounded-full">
    </div>

    <svg class="absolute w-[500px] -z-10 top-8 -left-14" id="sw-js-blob-svg" viewBox="0 0 100 100" xmlns="http://www.w3.org/2000/svg">                    
        <defs>
            <linearGradient id="sw-gradient" x1="0" x2="1" y1="1" y2="0">
                <stop id="stop1" stop-color="rgba(55, 198.967, 248, 1)" offset="0%"></stop>
                <stop id="stop2" stop-color="rgba(17.453, 82.787, 192.46, 1)" offset="100%"></stop>
            </linearGradient>
        </defs>
        <path fill="url(#sw-gradient)" d="M22,-31.8C27.1,-26.5,29,-18.3,30.5,-10.6C32,-3,33,4,30.1,8.8C27.2,13.5,20.3,16,14.6,20.2C9,24.4,4.5,30.4,-0.8,31.5C-6.1,32.7,-12.3,29,-18.6,25C-25,21,-31.5,16.7,-32.9,11C-34.2,5.4,-30.3,-1.6,-27,-7.8C-23.7,-14.1,-21,-19.6,-16.6,-25.2C-12.2,-30.8,-6.1,-36.3,1.1,-37.9C8.4,-39.5,16.8,-37.1,22,-31.8Z" width="100%" height="100%" transform="translate(50 50)" stroke-width="0" style="transition: 0.3s;" stroke="url(#sw-gradient)"></path>              
    </svg>
</div>
    
        
    
    <div id="hero-text" class="p-4 mt-4 bg-white rounded-lg right-96">
        <div class="bg-gradient-to-tr from-teal-500 to-sky-700 bg-clip-text" >
        <h1 class="mb-10 text-5xl font-bold text-transparent"> Halo Semuanya,   Selamat datang</h1>
        </div>
        <h3 class="mb-2 text-2xl font-bold text-blue-600">Tentang Saya</h3>
        <p class="flex items-center text-gray-800">
            <span class="text-lg font-semibold">Nama:</span>
            <span class="ml-2 text-lg">M Marendra Anggit BagasKara</span>
        </p>
        <p class="flex items-center mt-2 text-gray-800">
            <span class="text-lg font-semibold">Alamat:</span>
            <span class="ml-2 text-lg">Tobratan Wirokerten Banguntapan Bantul</span>
        </p>
        <p class="flex items-center mt-2 text-gray-800">
            <span class="text-lg font-semibold">Hobi:</span>
            <span class="ml-2 text-lg">Belajar</span>
        </p>
        <p class="flex items-center mt-2 text-gray-800">
            <span class="text-lg font-semibold">Bahasa Pemograman:</span>
            <span class="ml-2 text-lg">JavaScript, Php</span>
        </p>

        <h3 class="mt-6 mb-2 text-2xl font-bold text-blue-600">Riwayat Pendidikan</h3>
        <ul class="pl-5 text-gray-800 list-disc">
            <li class="mt-2">
                <span class="font-semibold">S1 Teknik Informatika</span> - Universitas XYZ (2018 - 2022)
            </li>
            <li class="mt-2">   
                <span class="font-semibold">SMK Negeri 1</span> - Bantul (2022 - 2025)
            </li>
            <li class="mt-2">
                <span class="font-semibold">MTs Negeri 6</span> - Banguntapan (2000 - 2022)
            </li>
        </ul>
    </div>
@endsection
