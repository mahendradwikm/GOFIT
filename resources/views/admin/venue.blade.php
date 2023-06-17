<x-layout title="Venue Admin">
  <div class="p-4">
    <nav class="flex justify-between items-center gap-2">
      <div class="bg-[#063F5C] w-[80%] rounded-full flex items-center pr-3">
        <input type="search" name="search" id="search" placeholder="Cari Venue"
          class="bg-transparent border-none rounded-l-full p-2 pl-4 w-full text-white">
        <img src="/images/search.png" alt="" class="w-4">
      </div>
      <a class="relative w-10 h-10 rounded-full bg-[#063F5C] flex items-center justify-center text-white"
        href="/admin/venue/add">
        <img src="/images/plus.png" alt="" class="w-6">
      </a>
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
    <main class="mt-4 space-y-4">
      @foreach ($data['venues'] as $venue)
      <div class="bg-[#FDE6BA] shadow-[0_3px_10px_rgb(0,0,0,0.2)] rounded-lg w-full mx-auto cursor-pointer px-1 py-3">
        <a class="mx-5 block" href="{{'/admin/venue/'. $venue->id}}">
          <div class="grid grid-cols-4 h-28 space-x-3 content-center">
            <img src="/images/picture.png" alt="" class="col-span-1 rounded-lg">
            <div class="col-span-3">
              <h1 class="font-semibold text-base text-[#063F5C]">{{$venue->name}}</h1>
              <div class="flex gap-x-2 mt-1">
                <img src="/images/location.png" alt="" class="w-4 h-5 my-auto">
                <p class="text-sm font-medium my-auto text-[#419EBD]">{{$venue->address}}</p>
              </div>
              <div class="flex justify-between mt-1">
                <div class="flex gap-x-2">
                  <img src="/images/star.png" alt="" class="w-4 h-4 my-auto">
                  <p class="text-sm my-auto font-medium text-[#419EBD]">{{round($venue->rating)}}</p>
                </div>
                <div class="flex gap-1">

                  <a href="{{'/admin/venue/'. $venue->id. '/edit'}}"
                    class="bg-[#F27F0C] rounded-full px-4 py-1 text-xs translate-y-1">
                    <p class="text-[#FDE6BA] font-semibold">Edit</p>
                  </a>
                  <div class="bg-[#419EBD] rounded-full px-4 py-1 text-xs translate-y-1">
                    <p class="text-[#FDE6BA] font-semibold">{{round($venue->price)}}/ sesi</p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </a>
      </div>
      @endforeach
    </main>
  </div>
  </main>
  </div>


</x-layout>