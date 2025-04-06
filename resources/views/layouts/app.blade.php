<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <title>SeaScanner</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="bg-[#f4faf7] text-gray-800">

  {{-- Navbar --}}
  <header class="bg-white shadow-sm">
    <div class="max-w-full mx-auto px-10 py-4 flex justify-between items-center">
      <div class="text-xl font-bold text-teal-600">
        <a href="/">SeaScanner<a>
      </div>
      <nav class="hidden md:flex space-x-10 text-sm font-medium text-gray-700">
        <a href="#" class="hover:text-teal-500">Holiday Package</a>
        <a href="#" class="hover:text-teal-500">Top Deals</a>
        <a href="#" class="hover:text-teal-500">Help</a>
        <a href="#" class="hover:text-teal-500">Wishlist</a>
      </nav>
      <div class="flex items-center gap-3 text-sm">
        <a href="#" class="text-gray-600 hover:text-teal-600">Register</a>
        <a href="#" class="bg-teal-500 text-white px-3 py-1 rounded hover:bg-teal-600">Login</a>
      </div>
    </div>
  </header>

  {{-- Main content --}}
  <main>
    @yield('content')
  </main>



</body>

</html>