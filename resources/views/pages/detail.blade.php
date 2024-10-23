<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{$blog->title}}</title>
    @vite('resources/css/app.css')
</head>
<style>
    *{
        border: 1px solid red
    }
</style>
<body class="flex justify-center min-h-screen">
    <div class="container flex justify-between">
        <div>
            <header class="text-3xl font-bold text-center">
                {{$blog->title}}
            </header>
            <main>
                <img src={{"images/hero.png"}} alt="">
                {{$blog->content}}
            </main>
        </div>
        <div class="max-w-[60%]">
            <img class="size-5/12" src="https://www.appsi.id/wp-content/uploads/2022/10/WhatsApp-Image-2022-10-18-at-1.40.47-PM-700x430.jpeg" alt="">
        </div>
        
    </div>
</body>
</html>