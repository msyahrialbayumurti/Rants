<?php

namespace App\Http\Controllers;

use App\Models\Calendar;
use Illuminate\Http\Request;

class CalendarController extends Controller
{
    public function schedule($tanggal)
    {
        $calendars = Calendar::all()->where("date", $tanggal);

        // Mengembalikan dalam format JSON
        return response()->json(
            $calendars, 200);
    }
}