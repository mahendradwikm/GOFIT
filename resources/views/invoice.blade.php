<x-layout title="Invoice">
  <div class="w-screen h-[1px] absolute top-32 z-10 bg-[#FDE6BA]"></div>
  <div class="h-32 bg-[#F27F0C]">
  </div>
  <div class="w-[95%] h-fit mx-auto rounded-t-3xl overflow-hidden -translate-y-16">
    <div class="h-fit bg-[#063F5C] p-4">
      <h1 class="text-[#FDE6BA] font-medium text-2xl">Invoice</h1>
      <div class='w-[90%] mt-8 mx-auto text-lg space-y-2 text-white'>
        <div class="flex justify-between">
          <p>Order ID</p>
          <p>{{$data->order_id}}</p>
        </div>
        <div class="flex justify-between">
          <p>Pesanan Oleh</p>
          <p>{{$data->user->name}}</p>
        </div>
        <div class="flex justify-between">
          <p>Tanggal Pemesanan</p>
          <p>{{$data->payment_date}}</p>
        </div>
        <div class="flex justify-between">
          <p>Total Pembayara</p>
          <p>Rp.{{round($data->price)}}</p>
        </div>
      </div>
    </div>
    <div>
      <div class="rounded-lg w-full mx-auto cursor-pointer px-1 py-3">
        <div class="mx-5">
          <div class="grid grid-cols-4 h-28 space-x-3 content-center">
            <img src="/images/picture.png" alt="" class="col-span-1 rounded-lg">
            <div class="col-span-3">
              <h1 class="font-semibold text-base text-[#063F5C]">{{$data->venue->name}}</h1>
              <div class="flex gap-x-2 mt-1">
                <img src="/images/location.png" alt="" class="w-4 h-5 my-auto">
                <p class="text-sm font-medium my-auto text-[#419EBD]">{{$data->venue->address}}</p>
              </div>
              <div class="flex justify-between mt-1">
                <div class="flex gap-x-2">
                  <img src="/images/star.png" alt="" class="w-4 h-4 my-auto">
                  <p class="text-sm my-auto font-medium text-[#419EBD]">{{$data->venue->rating}}</p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <hr class="" />
    <div class="p-2">

      {{-- <p class="text-lg font-medium">LAPANGAN A</p> --}}
    </div>
    <div class='bg-[#F7AD1A] flex text-[#063F5C] font-medium justify-between items-center px-4 py-6'>
      <p>{{$data->date}}</p>
      <p>{{$data->time}}</p>
    </div>
    <div class="bg-[#063F5C] w-3/5 mx-auto mt-8 rounded-lg h-12 flex justify-center items-center text-white">
      <a class="text-xl font-bold" href="/home">Kembali Ke Beranda</a>
    </div>
  </div>
</x-layout>