<?php

namespace App\Http\Controllers\Reservation;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class WaitlistController extends Controller
{
    public function joinWaitlist(Request $request)
    {
        $message = 'Thanks for joining waitlist! We will contact with you when a table free.';

        return response()->json(['message' => $message]);
    }
}
