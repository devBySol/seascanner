<?php

namespace App\Http\Controllers;

use App\Models\Booking;
use App\Models\Activity;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class BookingController extends Controller
{
    // 예약 목록 (내 것만)
    public function index()
    {
        $bookings = Booking::where('user_id', Auth::id())->with('activity')->latest()->get();
        return view('bookings.index', compact('bookings'));
    }

    // 예약 폼
    public function create(Activity $activity)
{
    return view('bookings.create', compact('activity'));
}

    // 예약 저장
    public function store(Request $request)
    {
        $request->validate([
            'activity_id' => 'required|exists:activities,id',
            'booking_date' => 'required|date',
            'people_count' => 'required|integer|min:1',
        ]);

        Booking::create([
            'user_id' => Auth::id(),
            'activity_id' => $request->activity_id,
            'booking_date' => $request->booking_date,
            'people_count' => $request->people_count,
            'status' => 'pending',
        ]);

        return redirect()->route('bookings.index')->with('success', 'Booking successfully created!');
    }

    // 상세보기 (선택)
    public function show(Booking $booking)
    {
        $this->authorizeBooking($booking);
        return view('bookings.show', compact('booking'));
    }

    // 수정 폼
    public function edit(Booking $booking)
    {
        $this->authorizeBooking($booking);
        $activities = Activity::all();
        return view('bookings.edit', compact('booking', 'activities'));
    }

    // 수정 저장
    public function update(Request $request, Booking $booking)
    {
        $this->authorizeBooking($booking);

        $request->validate([
            'activity_id' => 'required|exists:activities,id',
            'booking_date' => 'required|date',
            'people_count' => 'required|integer|min:1',
        ]);

        $booking->update([
            'activity_id' => $request->activity_id,
            'booking_date' => $request->booking_date,
            'people_count' => $request->people_count,
        ]);

        return redirect()->route('bookings.index')->with('success', 'Booking updated!');
    }

    // 삭제
    public function destroy(Booking $booking)
    {
        $this->authorizeBooking($booking);
        $booking->delete();
        return redirect()->route('bookings.index')->with('success', 'Booking deleted!');
    }

    // 사용자 권한 검사 (본인 것만 접근 가능)
    private function authorizeBooking(Booking $booking)
    {
        if ($booking->user_id !== Auth::id()) {
            abort(403);
        }
    }
}