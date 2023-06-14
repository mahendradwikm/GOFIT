<!-- passing 2 props -->
@props(['name', 'gambar'])
<div class="w-full h-12 gap-4 rounded-xl bg-[#FDE6BA] shadow-lg flex items-center justify-center">
  {{ $name }}
  <img src="{{ asset( $gambar) }}" alt="gambar jenis olahraga" class="w-6">
</div>