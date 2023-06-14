<x-layout title="Beranda">
  <div class="p-4">
    <nav class="flex justify-between items-center gap-0">
      <form action="{{url('/venue?search=')}}" method="GET" class="w-full">
        <input type="search" name="search" id="search" placeholder="Cari Venue"
          class="bg-[#063F5C] w-[80%] rounded-full p-2 pl-4 text-white">
      </form>
      <div class="relative w-10 h-10 rounded-full bg-[#063F5C] flex items-center justify-center text-white">
        <div class="absolute w-2 h-2 bg-amber-600 rounded-full top-2 right-2">

        </div>
        <svg xmlns="http://www.w3.org/2000/svg" width="26" height="26" fill="currentColor" class="bi bi-bell-fill"
          viewBox="0 0 16 16">
          <path
            d="M8 16a2 2 0 0 0 2-2H6a2 2 0 0 0 2 2zm.995-14.901a1 1 0 1 0-1.99 0A5.002 5.002 0 0 0 3 6c0 1.098-.5 6-2 7h14c-1.5-1-2-5.902-2-7 0-2.42-1.72-4.44-4.005-4.901z" />
        </svg>
      </div>
    </nav>

    <main class="h-full w-full mt-4">
      <h1 class="font-semibold text-2xl text-[#063F5C]">Hai, {{$user->name}} !</h1>
      <p class="font-medium text-xs text-[#063F5C]">Temukan jenis dan venue olahraga yang kamu suka disini</p>
      <div class="grid grid-cols-2 w-full gap-2 mt-4 text-[#063F5C] text-sm font-semibold">
        @foreach ($sports as $sport)
        <x-jenis-olahraga-card name="{{$sport->name}}" gambar="{{$sport->image}}" />
        @endforeach

      </div>
      <h1 class="mt-6 font-semibold text-xl text-[#063F5C]">Promo Menarik </h1>
      <div
        class="mt-1 w-full h-20 text-white font-bold text-2xl rounded-xl bg-[#063F5C] shadow-lg flex items-center justify-center">
        <img src="{{asset('images/homepage/diskon.png')}}" alt="diskon" class="h-full translate-y-2">
      </div>

      <h1 class="mt-6 font-semibold text-xl text-[#063F5C]">Article</h1>

      <div class="mt-1 w-full grid grid-cols-2 gap-3">
        @foreach ($articles as $article)
        <x-article-card title="{{$article->title}}" gambar="venue.png" deskripsi="{{$article->description}}" />
        @endforeach

      </div>
    </main>



  </div>
</x-layout>