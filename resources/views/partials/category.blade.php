{{-- Category Filter --}}
<div class="flex flex-wrap gap-3 justify-center mt-8 px-4">
  @foreach (["All", "Diving", "Snorkeling", "Boat", "Jet Ski", "Surfing"] as $category)
  <a href="{{ route('home', ['category' => $category]) }}">
    <button class="bg-white text-sm px-4 py-2 rounded-full shadow text-gray-700 hover:bg-teal-100">
      {{ $category }}
    </button>
  </a>
  @endforeach
</div>