{{-- Hero Section --}}
<div class="relative h-[400px]">
  <img src="https://picsum.photos/1280/600?random=88" alt="Hero"
    class="absolute inset-0 w-full h-full object-cover rounded-b-3xl">
  <div class="absolute inset-0 bg-black/30 rounded-b-3xl"></div>

  {{-- Search Box --}}
  <div
    class="absolute left-1/2 top-1/2 -translate-x-1/2 -translate-y-1/2 bg-white shadow-lg rounded-xl p-6 w-[90%] max-w-xl">
    <h2 class="text-xl font-bold text-center mb-4">What Is Your Destination?</h2>

    <form class="space-y-2">
      <div class="flex gap-2">
        <input type="text" placeholder="From" class="w-1/2 border rounded px-3 py-2 text-sm">
        <input type="text" placeholder="To" class="w-1/2 border rounded px-3 py-2 text-sm">
      </div>
      <div class="flex gap-2">
        <input type="date" class="w-1/2 border rounded px-3 py-2 text-sm">
        <input type="date" class="w-1/2 border rounded px-3 py-2 text-sm">
      </div>
      <div class="flex justify-end items-center text-sm gap-4">
        <div class="flex items-center gap-2">
          <label for="guests" class="whitespace-nowrap">Guests:</label>
          <input type="number" id="guests" name="guests" value="2" min="1"
            class="w-16 border rounded px-2 py-1 text-sm text-center focus:outline-none">
        </div>
        <div class="flex items-center gap-2">
          <label for="rooms" class="whitespace-nowrap">Rooms:</label>
          <input type="number" id="rooms" name="rooms" value="1" min="1"
            class="w-16 border rounded px-2 py-1 text-sm text-center focus:outline-none">
        </div>
      </div>

      <button type="submit" class="w-full bg-teal-500 text-white py-2 rounded mt-2 hover:bg-teal-600 transition">Get
        your deal now</button>
    </form>
  </div>
</div>