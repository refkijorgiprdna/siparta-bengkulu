<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DataController extends Controller
{

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('pages.frontend.data');
    }
}
