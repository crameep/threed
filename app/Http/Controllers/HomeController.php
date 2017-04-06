<?php

namespace App\Http\Controllers;

use App\Models\Event;

class HomeController extends Controller
{
    public function index()
    {
        //$events = Event::where('date', '<=', Carbon::now())->get();
        $events = Event::all();
        return view('layout')->with('events', $events);
    }
}
