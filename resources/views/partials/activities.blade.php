{{-- Best Holiday Deals --}}
<h2 class="text-xl font-bold mt-12 px-10">Best holiday deals</h2>

@include('partials.category')

<div class="flex flex-wrap justify-center gap-10 px-10 py-6">
  @foreach ($activities as $activity)
  <div class="w-[280px] bg-white rounded-xl shadow hover:shadow-md transition overflow-hidden">
    <div class="relative">
      <img src="https://picsum.photos/400/250?random={{ $loop->iteration }}" alt="{{ $activity->title }}"
        class="w-full h-44 object-cover">
      <div class="absolute top-2 left-2 bg-teal-600 text-white text-xs px-2 py-1 rounded-full">
        {{ rand(10, 50) }}% off
      </div>
    </div>
    <div class="p-4">
      <div class="flex justify-between items-center text-sm text-gray-600 mb-1">
        <span class="font-medium text-teal-600">{{ $activity->category->name ?? 'No Category' }}</span>
        <span class="bg-yellow-100 text-yellow-700 text-xs px-2 py-1 rounded-full">★
          {{ number_format(rand(10, 50) / 10, 1) }}</span>
      </div>
      <h3 class="text-lg font-semibold">{{ Str::limit($activity->title, 10) }}</h3>
      <p class="text-sm text-gray-500">{{ Str::limit($activity->description, 50) }}</p>
      <div class="text-sm text-gray-800 mt-2 font-medium">From ${{ $activity->price }}</div>
      <button class="mt-3 w-full text-center bg-teal-500 text-white py-2 rounded hover:bg-teal-600 transition">
        Booking
      </button>
    </div>
  </div>
  @endforeach
</div>