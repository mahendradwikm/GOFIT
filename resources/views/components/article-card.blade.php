@props(['title', 'gambar', 'deskripsi'])

<div class="w-full bg-[#F8F5F5] shadow-[0_3px_10px_rgb(0,0,0,0.2)] p-3 rounded-lg">
      <img class="w-full" src="{{asset('images/homepage/venue.png')}}" alt="venue">
      <h1 class="font-semibold text-lg mt-1">{{$title}}</h1>
      <p>{{$deskripsi}}</p>
</div>