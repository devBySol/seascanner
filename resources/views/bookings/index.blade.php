@extends('layouts.app')

@section('content')
<div class="max-w-4xl mx-auto py-8 px-4">
  <h2 class="text-3xl font-bold text-center text-teal-700 mb-8">My Bookings</h2>

  @if(session('success'))
  <div class="bg-green-100 text-green-800 px-4 py-2 mb-6 rounded text-center">
    {{ session('success') }}
  </div>
  @endif

  @forelse ($bookings as $booking)
  <div class="bg-white shadow-md border rounded-lg border-2 border-teal-600 p-6 mb-6">
    <h3 class="text-xl font-semibold text-teal-600 mb-2">{{ $booking->activity->title ?? 'Unknown Activity' }}</h3>

    <div class="flex items-center text-sm text-gray-600 mb-1">
      <svg class="w-4 h-4 mr-1 text-gray-400" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
        <path stroke-linecap="round" stroke-linejoin="round"
          d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z" />
      </svg>
      {{ $booking->booking_date }}
    </div>

    <div class="flex items-center text-sm text-gray-600 mb-1">
      <svg class="w-4 h-4 mr-1 text-gray-400" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
        <path stroke-linecap="round" stroke-linejoin="round"
          d="M17 20h5V8H2v12h5m10 0v-2a2 2 0 00-2-2h-4a2 2 0 00-2 2v2" />
      </svg>
      {{ $booking->people_count }} people
    </div>

    <div class="mt-2 mb-4">
      <span class="inline-block px-3 py-1 rounded-full text-xs font-semibold
            {{ $booking->status === 'confirmed' ? 'bg-green-100 text-green-700' :
               ($booking->status === 'cancelled' ? 'bg-red-100 text-red-700' : 'bg-yellow-100 text-yellow-700') }}">
        {{ ucfirst($booking->status) }}
      </span>
    </div>

    <div class="flex gap-3 text-sm">
      <a href="{{ route('bookings.edit', $booking) }}"
        class="text-blue-600 hover:text-blue-800 transition underline">Edit</a>

      <form action="{{ route('bookings.destroy', $booking) }}" method="POST"
        onsubmit="return confirm('Are you sure you want to cancel this booking?')">
        @csrf
        @method('DELETE')
        <button type="submit" class="text-red-600 hover:text-red-800 transition underline">Cancel</button>
      </form>
    </div>
  </div>
  @empty
  <p class="text-center text-gray-500">You don't have any bookings yet.</p>
  @endforelse
</div>
@endsection