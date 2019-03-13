<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DonsController extends Controller
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

    public function getDons()
    {
        return view('dons.dons');
    }
}