<x-layout title="Detail Venue">
  <main class="w-full">
    <div class="w-full h-48">


      <div class="w-full h-52 overflow-hidden absolute top-0 left-0">
        <a href="/admin">
          <img src="/images/admin/right-arrow.png" class='rotate-180 absolute top-6 left-6 w-6 z-[10]' alt="">
        </a>

        <button onclick="editMode()" class="absolute top-6 right-6 w-6 z-[10]">

          <img id="like" src="/images/admin/like.png" class='w-6 z-[10]' alt="">
          <img id="unlike" src="/images/admin/unlike.png" class='w-6 z-[10]' alt="">
        </button>
        <img src="/images/admin/futsal.jpg" class='bg-cover w-full opacity-90 brightness-75' alt="">
        <div
          class="absolute bottom-4 right-6 bg-[#419EBD] text-white font-normal text-center p-1 w-16 px-2 py-1 rounded-md z-[10]">
          <p class="text-[8px]">Lihat foto lebih banyak</p>
        </div>
      </div>
    </div>

    <div class="w-full h-full p-3">
      <h1 class="mt-2 font-semibold text-xl text-[#063F5C]">{{$data['venues']->name}}</h1>
      <p class="text-sm font-medium my-auto text-[#419EBD]">{{$data['venues']->address}}</p>

      <div class="mt-4">
        <h1 class="text-base text-[#063F5C] font-semibold">Fasilitas</h1>

        <div class="mt-1 w-2/3 grid grid-cols-2 gap-2">
          @foreach ($data['facilities'] as $facility)
          <div class="w-full flex gap-1 items-center">
            <img src="{{$facility->icon}}" class="w-6" alt="">
            <p class="text-sm text-[#063F5C] font-semibold">{{$facility->name}}</p>
          </div>
          @endforeach
        </div>
        <hr class="mt-4 stroke-4 -translate-x-10 w-[125%]" />
        <div class="mt-4">
          <h1 class="text-base text-[#063F5C] font-semibold">Detail</h1>
          <div class="mt-1 flex gap-2 flex-wrap justify-center">
            @foreach (json_decode($data['venues']->detail) as $detail => $value)
            <div class="rounded-3xl bg-[#FDE6BA] px-3 py-2 shadow-[0_3px_10px_rgb(0,0,0,0.2)]">
              <p class="text-sm text-black font-semibold text-center">{{$detail}}</p>
              <p class="text-sm ">{{$value}}</p>
            </div>
            @endforeach

          </div>
          <div class="mt-4">
            <h1 class="text-base text-[#063F5C] font-semibold">Ulasan</h1>
            @if(count($data['reviews']) > 0)
            @foreach ($data['reviews'] as $review)
            <div class="mt-1">
              <div
                class="w-full bg-gradient-to-r from-blue-200 to-cyan-100 h-28 rounded-2xl grid grid-cols-4 gap-6 justify-center p-6">
                <img src="/images/navigation/user.png" class="w-16" alt="">
                <div class="flex flex-col col-span-3">
                  <h5 class="font-semibold text-base text-black">{{$review->name}}</h5>
                  <p class="text-black opacity-60 text-xs">
                    24 Mei 2023
                  </p>
                  <p class="text-black opacity-60 text-xs">
                    {{$review->review}}
                  </p>
                </div>
              </div>
            </div>
            @endforeach
            @else
            <p>
              Belum ada review
            </p>
            @endif
          </div>
        </div>
      </div>
    </div>

  </main>
</x-layout>

<!-- change like image to unlike when click -->

<script type="text/javascript">
  var like = document.getElementById("like");
    var unlike = document.getElementById("unlike");

  like.style.display = "none";
  function editMode() {
  
    if (like.style.display === "none") {
      like.style.display = "block";
      unlike.style.display = "none";
    } else {
      like.style.display = "none";
      unlike.style.display = "block";
    }
  }
</script>