<?php

namespace App\Http\Controllers;

use App\Models\Hotel;
use App\Models\Kuliner;
use App\Models\SubWisata;
use App\Models\Wisata;
use Illuminate\Http\Request;

class APIController extends Controller
{
    public function peta_wisata()
    {
        $wisata = Wisata::get(['nama', 'coordinate', 'slug']);

        $array1 = array();

        foreach ($wisata as $value) {
            $array1[] = $value;
        }

        return response()->json([
            'wisata' => $array1
        ]);
    }

    public function peta_wisata_item($id)
    {
        $wisata = Wisata::where('id', $id)->get(['nama', 'coordinate', 'slug']);
        $subWisata = SubWisata::where('wisata_id', $id)->get(['nama', 'coordinate', 'slug']);

        $array1 = array();
        $array2 = array();

        foreach ($wisata as $value) {
            $array1[] = $value;
        }

        foreach ($subWisata as $value) {
            $array2[] = $value;
        }

        return response()->json([
            'wisata' => $array1, 'subWisata' => $array2
        ]);
    }

    public function peta_hotel()
    {
        $hotel = Hotel::get(['nama', 'coordinate', 'slug']);

        $array1 = array();

        foreach ($hotel as $value) {
            $array1[] = $value;
        }

        return response()->json([
            'hotel' => $array1
        ]);
    }

    public function peta_kuliner()
    {
        $kuliner = Kuliner::get(['nama', 'coordinate', 'slug']);

        $array1 = array();

        foreach ($kuliner as $value) {
            $array1[] = $value;
        }

        return response()->json([
            'kuliner' => $array1
        ]);
    }

    public function peta_sub_wisata()
    {
        $wisata = SubWisata::get(['nama', 'coordinate', 'slug']);

        $array1 = array();

        foreach ($wisata as $value) {
            $array1[] = $value;
        }

        return response()->json([
            'subwisata' => $array1
        ]);
    }
}
