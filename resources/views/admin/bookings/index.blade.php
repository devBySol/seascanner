@extends('layouts.app')

@section('content')
<div class="max-w-6xl mx-auto py-10 px-4">
  <h2 class="text-3xl font-bold text-teal-700 mb-8 text-center">Admin Booking Dashboard</h2>

  @if(session('success'))
  <div class="bg-green-100 text-green-800 px-4 py-2 mb-6 rounded text-center">
    {{ session('success') }}
  </div>
  @endif

  <div class="overflow-x-auto">
    <table class="min-w-full bg-white shadow rounded-lg overflow-hidden text-sm">
      <thead class="bg-gray-100 text-gray-700 text-left uppercase text-xs">
        <tr>
          <th class="px-4 py-3">User</th>
          <th class="px-4 py-3">Activity</th>
          <th class="px-4 py-3">Date</th>
          <th class="px-4 py-3">People</th>
          <th class="px-4 py-3">Status</th>
          <th class="px-4 py-3 text-center">Actions</th>
        </tr>
      </thead>
      <tbody>
        @forelse ($bookings as $booking)
        <tr class="border-t">
          <td class="px-4 py-3">{{ $booking->user->name }}</td>
          <td class="px-4 py-3">{{ $booking->activity->title }}</td>
          <td class="px-4 py-3">{{ $booking->booking_date }}</td>
          <td class="px-4 py-3">{{ $booking->people_count }}</td>
          <td class="px-4 py-3">
            <div x-data="{ open: false, currentStatus: '{{ $booking->status }}' }" @click.outside="open = false">
              <template x-if="!open">
                <span @click="open = true"
                  class="px-2 py-1 rounded-full text-xs font-semibold cursor-pointer
                        {{ $booking->status === 'confirmed' ? 'bg-green-100 text-green-700' :
                           ($booking->status === 'cancelled' ? 'bg-red-100 text-red-700' : 'bg-yellow-100 text-yellow-700') }}">
                  {{ ucfirst($booking->status) }}
                </span>
              </template>

              <template x-if="open">
                <select x-model="currentStatus" @change="open = false; fetch('{{ route('admin.bookings.updateStatus', $booking) }}', {
                          method: 'PATCH',
                          headers: {
                            'Content-Type': 'application/json',
                            'X-CSRF-TOKEN': '{{ csrf_token() }}',
                          },
                          body: JSON.stringify({ status: currentStatus })
                        }).then(r => r.ok ? location.reload() : alert('Failed to update'))"
                  class="text-sm border px-2 py-1 rounded">
                  <option value="pending">Pending</option>
                  <option value="confirmed">Confirmed</option>
                  <option value="cancelled">Cancelled</option>
                </select>
              </template>
            </div>
          </td>
          <td class="px-4 py-3 text-center">
            <form action="{{ route('admin.bookings.destroy', $booking) }}" method="POST"
              onsubmit="return confirm('Are you sure you want to delete this booking?')">
              @csrf
              @method('DELETE')
              <button class="text-red-500 hover:text-red-700 text-xs font-medium">Delete</button>
            </form>
          </td>
        </tr>
        @empty
        <tr>
          <td colspan="6" class="text-center py-6 text-gray-500">No bookings found.</td>
        </tr>
        @endforelse
      </tbody>
    </table>
  </div>
</div>
@endsection