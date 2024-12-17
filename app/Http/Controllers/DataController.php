<?php

namespace App\Http\Controllers;

use App\Models\Data;
use Illuminate\Http\Request;

class DataController extends Controller
{

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function destinasi_wisata()
    {
        // Ambil data dengan nama bidang tertentu (misalnya 'destinasi wisata')
        $destinasi_wisata = Data::where('nama_bidang', 'Destinasi Wisata')->get();

        return view('pages.frontend.bidang-destinasi', compact('destinasi_wisata'));
    }

    public function ekonomi_kreatif()
    {
        $ekonomi_kreatif = Data::where('nama_bidang', 'Ekonomi Kreatif')->get();

        return view('pages.frontend.bidang-ekonomi', compact('ekonomi_kreatif'));
    }

    public function pemasaran_pariwisata()
    {
        $pemasaran_pariwisata = Data::where('nama_bidang', 'Pemasaran Pariwisata')->get();

        return view('pages.frontend.bidang-pemasaran', compact('pemasaran_pariwisata'));
    }
}
