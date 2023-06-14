<x-layout title="Register Page">
  <main class="flex justify-center items-center h-full flex-col">


    <h1 class="text-[27px] font-semibold text-center">Buat Akun</h1>

    @error('error')
    <span class="text-red-500 font-bold text-lg">{{ $message }}</span>
    @else
    <p>Masukkan informasi biodata Anda berikut</p>
    @enderror

    <form action="{{route('register.store')}}" method="POST" class="flex flex-col items-center justify-center">
      @csrf
      <input type="text" name="name" id="name" placeholder="Masukkan nama Anda"
      class="w-[300px] text-sm h-[45px] rounded-md border-[1px] bg-[#E0E0E0] mt-[33px] px-[20px] @error('nama') border-red-500 @enderror"
      required value="{{ old('name') }}">

      <input type="email" name="email" id="email" placeholder="Masukkan No. HP/E-mail"
      class="w-[300px] text-sm h-[45px] rounded-md border-[1px] bg-[#E0E0E0] mt-[14px] px-[20px] @error('email') border-red-500 @enderror"
      required value="{{ old('email') }}">
      <input type="text" name="username" id="username" placeholder="Buat Username"
      class="w-[300px] text-sm h-[45px] rounded-md border-[1px] bg-[#E0E0E0] mt-[14px] px-[20px]  @error('username') border-red-500 @enderror"
      required value="{{ old('username') }}">
      <input type="password" name="password" id="password" placeholder="Buat Kata Kunci"
      class="w-[300px] text-sm h-[45px] rounded-md border-[1px] bg-[#E0E0E0] mt-[14px] px-[20px] @error('password') border-red-500 @enderror"
      required>
      <div class="w-[300px]">
        <p class="text-xs opacity-[38%] text-start">Kata kunci minimal 8 karakter</p>
      </div>
      <div class="flex items-center justify-center gap-x-2 my-auto mt-5">
        <input type="checkbox" name="agrement" id="agrement" class="my-auto" required value={{true}}>
        <label for="checkbox" class="text-xs my-auto  font-medium">Saya setuju dengan syarat dan ketentuan yang
          berlaku</label>
        </div>

        <button type="submit" class="bg-[#063F5C] text-white py-[12px] px-[128px] rounded-[10px] mt-10">
          Selanjutnya
        </button>
      </form>

    </main>
  </x-layout>