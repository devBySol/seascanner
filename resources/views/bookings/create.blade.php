@extends('layouts.app')

@section('content')
<div class="mt-10 max-w-4xl mx-auto py-10 px-6 bg-white shadow-md rounded-xl">
  <h2 class="text-2xl font-bold text-center text-teal-600 mb-8">Reserve Your Spot</h2>

  <form action="{{ route('bookings.store') }}" method="POST">
    @csrf
    <input type="hidden" name="activity_id" value="{{ $activity->id }}">
    <input type="hidden" name="booking_date" id="selectedDate" required>

    {{-- Responsive Grid --}}
    <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
      {{-- Left: Calendar --}}
      <div>
        <label class="block text-sm font-medium text-gray-700 mb-2 text-center">Select Date</label>
        <div class="flex justify-center">
          <div id="calendar" class="border-2 border-teal-400 rounded shadow-sm"></div>
        </div>

      </div>


      {{-- Right: Details --}}
      <div class="flex flex-col justify-between h-full space-y-6">
        <div class="bg-teal-50 border border-teal-200 rounded p-4 text-center">
          <h3 class="text-sm text-gray-600 mb-1">Activity</h3>
          <p class="text-xl font-bold text-gray-800">{{ $activity->title }}</p>
        </div>


        <div>
          <label class="block text-sm font-medium text-gray-700 mb-1">Number of People</label>
          <input type="number" name="people_count" min="1" value="1"
            class="w-full border rounded px-3 py-2 text-sm focus:outline-none focus:ring-2 focus:ring-teal-400"
            required>
        </div>
      </div>
    </div>

    {{-- Bottom Buttons --}}
    <div class="mt-8 flex justify-center gap-6">
      <a href="{{ url()->previous() }}" class="bg-gray-200 hover:bg-gray-300 text-gray-800 px-6 py-2 rounded text-sm">
        ← Back
      </a>
      <button type="submit" class="bg-teal-500 hover:bg-teal-600 text-white px-6 py-2 rounded text-sm shadow-sm">
        Book Now
      </button>
    </div>
  </form>
</div>
@endsection