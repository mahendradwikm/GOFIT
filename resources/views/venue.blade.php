<x-layout title="Venue">
  <div class="p-4">
    <div class="flex justify-between items-center">
      <div class="flex">
        <input type="search" name="search" id="search" placeholder="Cari Venue"
          class="bg-[#063F5C] w-full rounded-l-full p-2 pl-4 text-white" value="{{$data['search']}}">
        <button class="bg-[#063F5C] rounded-r-full  my-auto p-2 py-4 text-white w-10">
          <img src="/images/search.png" alt="">
        </button>
      </div>
      <div
        class="relative w-10 h-10 rounded-full bg-[#063F5C] flex items-center justify-center text-white cursor-pointer">
        <img src="/images/filter.png" alt="">
      </div>
    </div>

    <main class="h-full w-full mt-4 space-y-8">
      @if(count($data['venues']) != 0)
      @foreach ($data['venues'] as $venue)
      <a href="/venue/{{$venue->id}}"
        class="bg-[#FDE6BA] hover:bg-[#f8d89d] shadow-[0_3px_10px_rgb(0,0,0,0.2)] rounded-lg w-full mx-auto cursor-pointer p-2 block">
        <div class="mx-5">
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
                  <p class="text-sm my-auto font-medium text-[#419EBD]">{{round($venue->rating, 0)}}</p>
                </div>
                <div class="bg-[#419EBD] rounded-full px-4 py-1 text-xs translate-y-1">
                  <p class="text-[#FDE6BA] font-semibold">{{round($venue->price)}} / sesi</p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </a>
      @endforeach
      @else
      <p>Tidak ada venue</p>
      @endif

    </main>
  </div>
  <script>
    // add event listener to search input
    document.getElementById('search').addEventListener('keyup', (e) => {
      window.location.href = '/venue?search=' + e.target.value
    })

  </script>
</x-layout>