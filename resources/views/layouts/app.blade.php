
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
    <body class="flex justify-center min-h-screen font-lato">
        <div class="container" id="container">
            <nav class="flex justify-between px-5 py-3 border border-b-2 shadow-md text-slate-900">
                <x-navbar/>
            </nav>

        
            <div id="hero" class="flex items-center justify-center mt-6 ">
                @yield('hero')
            </div>
        
            <div id="about" class="mt-10 w-[800px] mx-auto">
                <h2 class="mb-4 text-3xl font-semibold"> Siapa Saya? </h2>
                <p class="text-base">Nama saya Bagas    seorang pengembang web dengan spesialisasi di JavaScript dan pengembangan aplikasi berbasis PHP. Dengan pengalaman dalam berbagai proyek selama di SMK, saya telah membangun aplikasi yang solid dan ramah pengguna. Saya tidak hanya fokus pada kode yang bersih dan efisien, tetapi juga pada pengalaman pengguna yang luar biasa.</p>
                
                <p class="mt-10">
                    <span class="text-2xl font-semibold">Keahlian Utama Saya: </span>

                    <ul class="ml-20 text-lg font-semibold list-disc">
                        <li class="mt-4">javascript: 
                            <span
                            class="font-normal">Mengembangkan aplikasi yang powerfull dan kuat mengunkan express.js.</span>
                     </li>
                        <li class="mt-4">Laravel: 
                            <span class="font-normal">
                            Mengembangkan aplikasi kompleks menggunakan framework Laravel dengan fokus pada skalabilitas dan keamanan.
                            </span>
                        </li>
                        <li class ="mt-4">Database Management: 
                            <span class="font-normal">
                            Pengelolaan database menggunakan MySQL, dengan keterampilan dalam merancang skema database yang efisien.

  Selama di SMK, saya berhasil menyelesaikan proyek E-commerce Furniture. Proyek ini melibatkan   pembuatan platform online untuk penjualan furniture, Mengggunakan Framework Laravel.
                            </span>
                        </li>
                    </ul>
                    
                </p>
            </div>
        
        </div>
        
    
        
    </body>
    </html>
