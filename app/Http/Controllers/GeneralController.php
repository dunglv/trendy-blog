<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GeneralController extends Controller
{
    public function index()
    {
        return view('partials.home');
    }

    public function events()
    {
        return view('partials.events.index');
    }

    public function breaking()
    {
        return view('partials.breaking.index');
    }

    public function entertainment()
    {
        return view('partials.entertainment.index');
    }

    public function contact()
    {
        return view('partials.contact.index');
    }
}
