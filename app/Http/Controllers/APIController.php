<?php

namespace App\Http\Controllers;

use App\Models\SubWisata;
use App\Models\Wisata;
use Illuminate\Http\Request;

class APIController extends Controller
{
    public function peta_wisata($id)
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
}
