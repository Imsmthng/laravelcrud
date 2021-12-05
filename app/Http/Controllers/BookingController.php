<?php

namespace App\Http\Controllers;

use App\Models\Booking;
use Illuminate\Http\Request;

class BookingController extends Controller
{
    public function index()
    {
        $booking = Booking::all();
        return view ('bookings.index')->with('bookings', $booking);
    }

    
    public function create()
    {
        return view('bookings.create');
    }

   
    public function store(Request $request)
    {
        $input = $request->all();
        Booking::create($input);
        return redirect('booking');
    }

    
    public function show($id)
    {
        $booking = Booking::find($id);
        return view('bookings.show')->with('bookings', $booking);
    }

    
    public function edit($id)
    {
        $booking = Booking::find($id);
        return view('bookings.edit')->with('bookings', $booking);
    }

  
    public function update(Request $request, $id)
    {
        $booking = Booking::find($id);
        $input = $request->all();
        $booking->update($input);
        return redirect('booking');
    }

   
    public function destroy($id)
    {
        Booking::destroy($id);
        return redirect('booking');
    }
}
