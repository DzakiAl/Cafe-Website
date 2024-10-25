<?php

namespace App\Http\Controllers;

use App\Models\Reservation;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\CustomerReservationEmail;
use App\Mail\AdminReservationEmail;

class ReservationController extends Controller
{
    /**
     * Send proof of order to hotel admin and customer
     */
    public function send(Request $request)
    {
        $data = $request->validate([
            'name' => ['required', 'string'],
            'email' => ['required', 'string'],
            'phone' => ['required', 'string'],
            'people' => ['required', 'integer'],
            'time' => ['required', 'string'],
        ]);

        $details = [
            'name' => $request->name,
            'email' => $request->email,
            'phone' => $request->phone,
            'people' => $request->people,
            'time' => $request->time,
        ];

        // Send email to hotel admin
        Mail::to('starcafedmin@example.com')->send(new AdminReservationEmail($details));

        // Send confirmation email to customer
        Mail::to($request->email)->send(new CustomerReservationEmail($details));

        $reservation = Reservation::create($data);

        return redirect()->route('thanks');
    }
}
