

@section('projects')
<div class="mt-10 text-center">
    <h2 class="text-3xl font-bold text-gray-800">My Projects</h2> <!-- Judul untuk bagian proyek -->
    <p class="mt-2 text-gray-600">Berikut adalah beberapa proyek yang telah saya kerjakan.</p> <!-- Deskripsi tambahan -->
</div>

<div class="flex flex-wrap justify-center gap-6 mt-10">
    
    @foreach ($blogs as $blog)
    <a href="blog/{{$blog->id}}">
    <div id="card" class="w-full max-w-sm overflow-hidden transition-transform transform bg-white rounded-lg shadow-lg hover:scale-105 hover:shadow-xl">
        <img src={{ "images/hero.png" }} alt="BAGS GANTRNG" class="object-cover w-full h-48">         
        <div class="p-6">
            <h3 class="mb-2 text-xl font-bold text-gray-800">{{ Str::limit($blog->title, 20) }}</h3>
            <p class="mb-4 text-gray-600">{{ Str::limit($blog->content, 50) }}.</p>
        </div>
    </div>
</a>
@endforeach
</div>
@endsection