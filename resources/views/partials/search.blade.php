<div class="mt-8 mx-5 flex justify-center items-center">
  <form action="{{ route('home') }}" method="GET" class="mb-4 w-full sm:w-1/2 flex items-center gap-2">
    <input type="text" name="search" placeholder="Search for activities..." value="{{ request()->query('search') }}"
      class="w-full border-none px-4 py-2 rounded-lg shadow focus:outline-none h-12">
    <button type="submit" class="bg-teal-500 text-white px-4 py-2 rounded-md sm:w-auto hover:bg-teal-600 h-12">
      Search
    </button>
  </form>
</div>