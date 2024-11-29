<?php

namespace App\Http\Controllers;

use App\Models\Calendar;
use Illuminate\Http\Request;

class CalendarController extends Controller
{
    public function index()
    {
        // Mengambil semua data dari tabel calendars
        $calendars = Calendar::all();

        // Mengembalikan dalam format JSON
        return response()->json($calendars);
    }
}