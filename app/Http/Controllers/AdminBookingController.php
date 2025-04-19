<?php
namespace App\Http\Controllers;

use App\Models\Booking;
use Illuminate\Http\Request;

class AdminBookingController extends Controller
{
    public function index()
    {
        $bookings = Booking::with(['user', 'activity'])->latest()->get();

        return view('admin.bookings.index', compact('bookings'));
    }

    public function updateStatus(Request $request, Booking $booking)
{
    $request->validate([
        'status' => 'required|in:pending,confirmed,cancelled',
    ]);

    $booking->status = $request->status;
    $booking->save();

    return response()->json(['message' => 'Status updated successfully']);
}

public function destroy(Booking $booking)
{
    $booking->delete();

    return redirect()->route('admin.bookings.index')->with('success', 'Booking deleted successfully!');
}
}