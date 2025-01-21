<?php

namespace App\Http\Controllers;

use App\Models\Calendar;
use App\Models\Event;
use Hamcrest\Core\HasToString;
use Illuminate\Support\Facades\Log;
use Illuminate\Http\Request;

class CalendarController extends Controller
{
    public function schedule($tanggal)
    {
        $calendars = Calendar::all()->where("date", $tanggal);
        // Mengembalikan dalam format JSON
        return response()->json(
            $calendars,
            200
        );
    }



    public function getEventDetails(Request $request)
    {
        $date = $request->input('date');
        $calendars = Calendar::whereDate('event_date', $date)->first();

        if ($calendars) {
            return response()->json([
                'calendars$calendars' => $calendars,
                'message' => 'Ada acara pada tanggal ini.'
            ]);
        } else {
            return response()->json([
                'message' => 'Tanggal ini kosong.'
            ]);
        }
    }

    public function getAllCalenders()
    {
        // Log untuk memeriksa apakah fungsi dipanggil
        Log::info('getAllCalenders function called');

        // Ambil semua data kalender
        $calendars = Calendar::all();

        // Log untuk memeriksa jumlah data yang diambil
        Log::info('Number of calendars retrieved: ' . $calendars->count());

        // Log untuk memeriksa isi data kalender
        Log::info('Calendars data: ' . $calendars->toJson());

        // Kembalikan respons JSON dengan data kalender
        return response()->json($calendars, 200);
    }

    public function index(Request $request)
    {
        // Ambil semua acara dari database
        $events = Calendar::all();

        // Ambil tanggal yang dipilih dari request
        $selectedDate = $request->input('tanggal');

        // Cek apakah ada acara pada tanggal yang dipilih
        $eventOnSelectedDate = $events->where('tanggal', $selectedDate)->first();

        return view('pages.user.layanan', compact('events', 'selectedDate', 'eventOnSelectedDate'));
    }
}
