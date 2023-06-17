<x-layout title="Detail Pesanan">
  <div class="w-full h-16 border-b-2 p-4 border-b-slate-300 flex items-center justify-between">
    <!-- left arrow  -->
    <a href="/admin/detail-venue" class="">
      <img src="/images/left-arrow.png" class="w-4" alt="">
    </a>
    <h1 class="text-xl font-semibold text-[#063F5C]">Detail Pemesanan</h1>
    <!-- check button to save edit -->
    <div class="w-10"></div>

  </div>
  <div class="text-[#063F5C] p-4 mt-8 rounded-t-3xl w-full h-[85vh] bg-[#C3D3E3]">
    <h1 class="font-bold text-2xl">Ringkasan Pembayaran</h1>
    <div class='w-[85%] mt-2 font-medium mx-auto text-xl space-y-4'>
      <div class="flex justify-between">
        <p>Tanggal Pesan</p>
        <p>{{$data->date}}</p>
      </div>
      <div class="flex justify-between">
        <p>Sesi</p>
        <p>{{$data->time}}</p>
      </div>
      <div class="flex justify-between">
        <p>Total Tagihan</p>
        <p>Rp {{number_format($data->venue->price, 0, ',', '.')}}</p>
      </div>
      <div class="flex justify-between">
        <p>Biaya Layanan</p>
        <p>Rp 6.000</p>
      </div>
      <div class="flex justify-between">
        <p>Potongan Voucher</p>
        <p>Rp 10.000</p>
      </div>
    </div>
    <h1 class="font-bold text-2xl mt-4">Opsi Pembayaran</h1>
    <a class="w-[85%] mt-2 text-center font-semibold mx-auto block text-white bg-[#063F5C] rounded-lg py-2 "
      href="{{'/order/'. $data->id}}">
      Bayar Ditempat
    </a>
  </div>
  <div class="absolute w-full bg-[#88A7C8] h-[60px] flex justify-between items-center bottom-0 left-0 px-5">
    <p class="text-[#063F5C] font-semibold text-lg">
      Total Tagihan : Rp {{number_format($data->venue->price + 6000 - 10000, 0, ',', '.') }}
    </p>
    <div class="bg-[#F27F0C] px-5 py-1.5 rounded-xl text-white font-semibold">
      <a href="{{'/order/'. $data->id}}">
        Pesan Sekarang</a>
    </div>
  </div>
</x-layout>