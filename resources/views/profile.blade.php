<x-layout title="Profile">
  <div class="flex h-20 shadow-lg gap-x-4 items-center px-8">
    <a href="/home">
      <img src="/images/left-arrow.png" alt="" class="">
    </a>
    <p class="text-[#063F5C] font-bold text-xl">Profil</p>
  </div>
  <div class="bg-[#88A7C8] bg-opacity-30 flex flex-col justify-center gap-y-1 items-center py-4">
    <img src="/images/profile/profile.png" alt="">
    <div class="py-2 text-center">
      <h1 class="text-lg font-semibold text-[#063F5C]">{{$user->name}}</h1>
      <p class="font-medium text-[9px] text-[#419EBD]">Ubah Profil</p>
    </div>
  </div>
  {{-- Menu profile --}}
  <div class="px-6 pt-5">
    {{-- Account --}}
    <div class="text-[#063F5C]">
      <h1 class="font-bold text-base text-[#063F5C]">Akun</h1>
      {{-- Items starts here --}}
      <div class="flex items-center py-2 px-1 gap-x-3">
        <img src="/images/profile/email.png" class="w-4" alt="">
        <p>Email</p>
      </div>
      <hr class="border-[1px] border-[#C4C4C4]">
      {{-- Ends here --}}
      <div class="flex items-center py-2 px-1 gap-x-3">
        <img src="/images/profile/notification.png" class="w-4" alt="">
        <p>Notifikasi</p>
      </div>
      <hr class="border-[1px] border-[#C4C4C4]">
      <div class="flex items-center py-2 px-1 gap-x-3">
        <img src="/images/profile/favorite.png" class="w-4" alt="">
        <p>Favorit</p>
      </div>
      <hr class="border-[1px] border-[#C4C4C4]">
      <div class="flex items-center py-2 px-1 gap-x-3">
        <img src="/images/profile/keamanan-akun.png" class="w-4" alt="">
        <p>Keamanan Akun</p>
      </div>
      <hr class="border-[1px] border-[#C4C4C4]">

      {{-- Pengaturan --}}
      <h1 class="font-bold text-base text-[#063F5C] pt-5 pb-2">Pengaturan</h1>
      {{-- Items starts here --}}
      <div class="flex items-center py-2 px-1 gap-x-3">
        <img src="/images/profile/bahasa.png" class="w-4" alt="">
        <p>Bahasa</p>
      </div>
      <hr class="border-[1px] border-[#C4C4C4]">
      <div class="flex items-center py-2 px-1 gap-x-3">
        <img src="/images/profile/bantuan.png" class="w-4" alt="">
        <p>Bantuan</p>
      </div>
      <hr class="border-[1px] border-[#C4C4C4]">
      <div class="flex items-center py-2 px-1 gap-x-3">
        <a href="/logout">
          <img src="/images/profile/logout.png" class="w-4" alt="">
        </a>
        <a href="/logout">Logout</a>
      </div>
      <hr class="border-[1px] border-[#C4C4C4]">
      {{-- Ends here --}}
    </div>
  </div>
</x-layout>