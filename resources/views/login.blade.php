<x-layout title="Login Page">
  <main>
    <div class="p-4 flex flex-col gap-4 items-center justify-center text-center font-primary pt-32">
      <img src="{{ asset('/images/logo.png') }}" alt="" width="204">
      <h2 class="text-[27px] font-semibold pt-[15px]">Masuk Sekarang</h2>
      <div>
        <p>
          @error('username')
          <span class="text-red-500 font-bold text-lg">{{ $message }}</span>
          @else
          Masukkan data akun Anda untuk melanjutkan
          @enderror
        </p>
      </div>

      <form action="/login" method="POST" class="flex flex-col">
        @csrf
        <input type="text" name="username" id="username" placeholder="Username"
          class="w-[300px] text-sm h-[45px] rounded-md border-[1px] bg-[#E0E0E0] mt-[33px] px-[20px]" required>
        <input type="password" name="password" id="password" placeholder="Kata Kunci"
          class="w-[300px] text-sm h-[45px] rounded-md border-[1px] bg-[#E0E0E0] mt-[14px] px-[20px]" required>
        <button type="submit" class="bg-[#063F5C] text-white py-[12px] px-[128px] rounded-[10px] mt-5">
          Login
        </button>
        <!-- go to home wwhen click button -->
        {{-- <a href="/home" class="bg-[#063F5C] text-white py-[12px] px-[128px] rounded-[10px] mt-5">
          Login
        </a> --}}
      </form>
      <div class="flex flex-col gap-2">
        <p>
          Belum Punya Akun?
          <a href="/register" class="text-[#419EBD]">Sign Up</a>
        </p>
        <a href="/forgot-password" class="text-[#063F5C] text-sm">Lupa Kata Sandi?</a>
      </div>
    </div>
    </div>
  </main>
</x-layout>