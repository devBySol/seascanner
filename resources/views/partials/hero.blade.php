{{-- Hero Section --}}
<div class="relative h-[400px]">
  <img src="https://images.unsplash.com/photo-1507525428034-b723cf961d3e" alt="Hero"
    class="absolute inset-0 w-full h-full object-cover rounded-b-3xl">
  <div class="absolute inset-0 bg-black/40 rounded-b-3xl"></div>

  {{-- Search Box --}}
  <div
    class="absolute left-1/2 top-1/2 -translate-x-1/2 -translate-y-1/2 bg-white shadow-lg rounded-xl p-6 w-[90%] max-w-xl">
    <h2 class="text-xl font-bold text-center mb-4">Find Your Next Ocean Adventure</h2>

    <form class="space-y-2">
      <div class="flex gap-2">
        <input type="text" name="location" placeholder="Where do you want to dive?"
          class="w-full border-none shadow rounded px-3 py-2 text-sm">
      </div>
      <div class="flex gap-2">
        <input type="date" name="start_date" class="w-1/2 border-none shadow rounded px-3 py-2 text-sm">
        <input type="date" name="end_date" class="w-1/2 border-none shadow rounded px-3 py-2 text-sm">
      </div>
      <div class="flex justify-end items-center text-sm gap-4">
        <div class="flex items-center gap-2">
          <label for="participants" class="whitespace-nowrap">Participants:</label>
          <input type="number" id="participants" name="participants" value="2" min="1"
            class="w-16 border-none shadow rounded px-2 py-1 text-sm text-center focus:outline-none">
        </div>
        <div class="flex items-center gap-2">
          <label for="type" class="whitespace-nowrap">Experience:</label>
          <select id="type" name="experience" class="border-none shadow rounded px-2 py-1 text-sm focus:outline-none">
            <option value="diving">Diving</option>
            <option value="snorkeling">Snorkeling</option>
            <option value="boat">Boat</option>
            <option value="jet-ski">Jet Ski</option>
            <option value="surfing">Surfing</option>
          </select>
        </div>
      </div>

      <button type="submit" class="w-full bg-teal-500 text-white py-2 rounded mt-2 hover:bg-teal-600 transition">Search
        Adventures</button>
    </form>
  </div>
</div>