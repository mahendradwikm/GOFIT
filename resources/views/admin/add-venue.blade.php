<x-layout title="Edit Venue">
  <form action="/admin/venue" method="POST" enctype="multipart/form-data">
    @csrf
    <div class="w-full h-16 border-b-2 p-4 border-b-slate-300 flex items-center justify-between">
      <!-- left arrow  -->
      <a href="/admin" class="">
        <img src="/images/left-arrow.png" class="w-4" alt="">
      </a>
      <h1 class="text-xl font-semibold text-[#063F5C]">Add Venue</h1>
      <!-- check button to save edit -->
      <button>
        <img src="/images/check.png" class="w-10" alt="">
      </button>

    </div>
    <div class='p-6'>
      <!-- file input to upload image -->
      <div class=" bg-neutral-200 rounded-xl">
        @error('error')
        <div class="bg-red-500 text-white p-2 rounded-lg">
          {{$message}}
        </div>

        @enderror
        <label for="image" class="cursor-pointer flex flex-col items-center justify-center p-4">
          <input class='hidden' id="image" type="file" name="image" />
          <p class="text-white font-semibold">Add some photos</p>
          <span id="imageName"></span>
        </label>
      </div>

      <div class="mt-4">
        <h1 class="font-semibold text-base text text-[#063F5C]">Cabang Olahraga</h1>
        <!-- radio button 2 x 2 -->
        <div class="grid grid-cols-2">
          @foreach ($sports as $sport)
          <div class="flex items-center gap-x-2 mt-2">
            <input type="radio" name="sport_id" id="sport_id" class="w-4 h-4" value="{{$sport->id}}">
            <label for="sport" class="text-sm font-medium text-[#063F5C]">{{$sport->name}}</label>
          </div>
          @endforeach
        </div>
      </div>

      <div class="mt-4">
        <h1 class="font-semibold text-base text text-[#063F5C]">Nama & Alamat Venue</h1>
        <input type="text" name="name" class='w-full p-2 rounded-lg border-none bg-neutral-200 text-neutral-800 mt-2'
          placeholder="Masukkan Nama Venue">
        <input type="text" name="address" class='w-full p-2 rounded-lg border-none bg-neutral-200 text-neutral-800 mt-2'
          placeholder="Masukkan Alamat Venue">
        <p class="mt-3 font-bold">Deskripsi</p>
        <textarea type="text" name="description"
          class='w-full p-2 rounded-lg border-none bg-neutral-200 text-neutral-800 mt-2'
          placeholder="Masukkan Description">
        </textarea>

      </div>

      <div class="mt-4">
        <h1 class="font-semibold text-base text text-[#063F5C]">Fasilitas & Detail</h1>

        <div class="space-y-2 mt-2 translate-x-1">
          @foreach ($facilities as $facility)
          <div class="flex items-center gap-2">
            <input type="checkbox" class="scale-150" name="facilities[]" value={{$facility->id}}>
            <p class="text-sm font-medium -translate-y-[2px] text-[#063F5C]">{{$facility->name}}</p>
          </div>
          @endforeach
        </div>
      </div>
      <div class="mt-4">
        <h1 class="font-semibold text-base text text-[#063F5C]">Harga</h1>
        <input type="text" name="price" class='w-full p-2 rounded-lg border-none bg-neutral-200 text-neutral-800 mt-2'
          placeholder="Masukkan Harga Venue">
      </div>

      <div class="mt-4">
        <h1 class="font-semibold text-base text text-[#063F5C]">Detail</h1>
        <textarea name="detail" id="detail" cols="30" rows="10"
          class='w-full p-2 rounded-lg border-none bg-neutral-200 text-neutral-800 mt-2'
          placeholder="{'luas': '20 x 20'}"></textarea>
      </div>
    </div>
  </form>
</x-layout>

<script>
  let input = document.getElementById("inputTag");
  let imageName = document.getElementById("imageName")

  input.addEventListener("change", ()=>{
    let inputImage = document.querySelector("input[type=file]").files[0];
    imageName.innerText = inputImage.name;
  })
</script>