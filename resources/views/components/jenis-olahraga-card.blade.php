<!-- passing 2 props -->
@props(['name', 'gambar'])
<a class="w-full h-12 gap-4 rounded-xl bg-[#FDE6BA] shadow-lg flex items-center justify-center"
  href="/venue?search={{$name}}">
  {{ $name }}
  <img src="{{ asset( $gambar) }}" alt="gambar jenis olahraga" class="w-6">
</a>