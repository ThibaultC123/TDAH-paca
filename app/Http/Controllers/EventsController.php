<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EventsController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function getCalendrier()
    {
        return view('events.calendar');
    }

    public function getJM()
    {
        return view('events.journeesMediterraneennes');
    }

    public function getConferences()
    {
        return view('events.conferences');
    }

    public function getCongres()
    {
        return view('events.congres');
    }

    public function getAteliers()
    {
        return view('events.ateliers');
    }
}