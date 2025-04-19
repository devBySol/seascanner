@extends('layouts.app')

@section('content')
<div class="max-w-md mx-auto py-8">
  <h2 class="text-xl font-bold mb-4">Edit Booking</h2>

  <form action="{{ route('bookings.update', $booking) }}" method="POST" class="space-y-4">
    @csrf
    @method('PUT')

    <div>
      <label class="block text-sm">Activity</label>
      <select name="activity_id" class="w-full border rounded px-3 py-2">
        @foreach($activities as $activity)
        <option value="{{ $activity->id }}" {{ $booking->activity_id == $activity->id ? 'selected' : '' }}>
          {{ $activity->title }}
        </option>
        @endforeach
      </select>
    </div>

    <div>
      <label class="block text-sm">Date</label>
      <input type="date" name="booking_date" value="{{ $booking->booking_date }}"
        class="w-full border rounded px-3 py-2" required>
    </div>

    <div>
      <label class="block text-sm">Number of People</label>
      <input type="number" name="people_count" min="1" value="{{ $booking->people_count }}"
        class="w-full border rounded px-3 py-2" required>
    </div>

    <button type="submit" class="bg-teal-500 text-white px-4 py-2 rounded hover:bg-teal-600">Update</button>
  </form>
</div>
@endsection