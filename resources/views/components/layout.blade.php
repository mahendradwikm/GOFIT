@props(['title'])

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.js" defer></script>
  <title>GoFit | {{ $title }}</title>
  @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="flex flex-col min-h-screen justify-center items-center bg-gray-200">
  @if($title != 'Welcome Page')
  <div class="relative max-w-md min-w-[28rem] bg-white h-screen rounded-t-xl overflow-y-auto overflow-x-hidden">
    {{$slot}}
  </div>
  @else
  <div class="relative max-w-md min-w-[28rem] bg-white h-screen rounded-t-xl overflow-hidden">
    {{$slot}}
  </div>
  @endif
  @if ($title != 'Login Page' && $title != 'Register Page' && $title != 'Welcome Page')
  <nav
    class="max-w-md w-full pt-4 rounded-b-xl bottom-0 bg-[#063F5C] py-2 px-4 flex gap-16 justify-center items-center">
    <div class="flex flex-col items-center justify-center gap-1">
      <a href="/home">
        <img src="{{ asset('/images/navigation/home.png') }}" alt="home" class="w-8">
        <p href="/home" class="text-[#419EBD] text-xs">Home</p>
      </a>
    </div>
    @if ($title != 'Edit Venue' && $title != 'Detail Venue' && $title != 'Venue Admin')
      <div class="flex flex-col items-center justify-center gap-1">
        <a href="#">
          <img src="{{ asset('/images/navigation/favourite.png') }}" alt="favourite" class="w-8">
          <a class="text-[#419EBD] text-xs">Favorit</a>
        </a>
      </div>
    @endif
    <div class="flex flex-col items-center justify-center gap-1">

      <img src="{{ asset('/images/navigation/history.png') }}" alt="history" class="w-8">
      <p class="text-[#419EBD] text-xs">Riwayat</p>
    </div>
    <div class="flex flex-col items-center justify-center gap-1">
      <a href="/profile">
        <img src="{{ asset('/images/navigation/user.png') }}" alt="user" class="w-8">
        <p href="/profile" class="text-[#419EBD] text-xs">Profile</p>
      </a>
    </div>

  </nav>
  @endif
  <!-- show the div when title is not include login or register -->


</body>
</html>