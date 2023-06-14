<x-layout title="Pilih Jadwal">
  <div class="flex flex-col justify-between min-h-screen">
    <div>
      <div class="flex h-20 shadow-lg justify-between items-center px-8">
        <img src="/images/left-arrow.png" alt="" class="">
        <p class="text-[#063F5C] font-bold text-xl">Pilih Jadwal</p>
        <p></p>
      </div>
      <main class="flex flex-col justify-between pt-10">
        <div class="px-8">
          <div class="grid grid-cols-2 gap-5 p-6 bg-[#88A7C8] rounded-2xl">
            {{-- Time --}}
            <div class="text-[#063F5C] text-center bg-[#FDE6BA] px-3 py-1.5 rounded-full shadow-lg font-bold">
              <p>10.00 - 12.00</p>
            </div>
            <div class="text-[#063F5C] text-center bg-[#FDE6BA] px-3 py-1.5 rounded-full shadow-lg font-bold">
              <p>12.00 - 14.00</p>
            </div>
            <div class="text-[#063F5C] text-center bg-[#FDE6BA] px-3 py-1.5 rounded-full shadow-lg font-bold">
              <p>14.00 - 17.00</p>
            </div>
            <div class="text-[#063F5C] text-center bg-[#FDE6BA] px-3 py-1.5 rounded-full shadow-lg font-bold">
              <p>17.00 - 20.00</p>
            </div>
          </div>
        </div>
      </main>
    </div>
    <div class="font-bold ">
      <form action="{{route('pre_order.store')}}" method="POST">
        <div class="flex justify-between items-center bg-[#88A7C8] px-5 h-12 text-[#063F5C] shadow-lg bg-opacity-30">
          <p>{{$request->date}}</p>
          @csrf
          <input type="hidden" name="date" value="{{$request->date}}">
          <input type="hidden" name="venue_id" value="{{$request->id}}">
          <a href="{{'/venue/date/'. $request->id}}"
            class="px-4 bg-[#F27F0C] rounded-lg text-white py-1.5 text-base font-semibold">Ganti
            Tanggal</a>
          <select name="time" id="time" class="bg-[#FDE6BA] px-3 py-1.5 rounded-full shadow-lg font-bold">
            <option value="10.00 - 12.00">10.00 - 10.00</option>
            <option value="12.00 - 14.00">12.00 - 12.00</option>
            <option value="14.00 - 16.00">14.00 - 14.00</option>
            <option value="17.00 - 19.00">17.00 - 20.00</option>
          </select>
        </div>
        <hr class="">
        <div
          class="flex justify-between items-center bg-[#88A7C8] px-5 h-12 text-[#063F5C] border-t-slate-500 border-4 text-lg">
          <p>Rp.{{round($venue->price)}}</p>
          <button class="px-4 bg-[#F27F0C] rounded-lg text-white py-1.5 text-base font-semibold">Selanjutnya</button>
        </div>
      </form>
    </div>
  </div>
</x-layout>