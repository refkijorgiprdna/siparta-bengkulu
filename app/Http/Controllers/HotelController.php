<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HotelController extends Controller
{
    public function index(Request $request)
    {
        return view('pages.hotel');
    }

    public function sub_hotel(Request $request)
    {
        return view('pages.sub-hotel');
    }
}
