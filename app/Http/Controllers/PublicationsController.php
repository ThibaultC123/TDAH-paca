<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PublicationsController extends Controller
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

    public function getPresse()
    {
        return view('tdah.parents');
    }

    public function getScientifiques()
    {
        return view('tdah.profs');
    }

    public function getPosters()
    {
        return view('tdah.parents');
    }
}