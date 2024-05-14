<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\GaleriHotelRequest;
use App\Models\GaleriHotel;
use App\Models\Hotel;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class GaleriHotelController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $items = GaleriHotel::with(['hotel'])->get();

        return view('pages.admin.galeri-hotel.index', [
            'items' => $items
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $hotel = Hotel::all();
        return view('pages.admin.galeri-hotel.create', [
            'hotel' => $hotel
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(GaleriHotelRequest $request)
    {
        $data = $request->all();
        $data['image'] = $request->file('image')->store(
            'assets/galeri-hotel', 'public'
        );

        GaleriHotel::create($data);
        return redirect()->route('galeri-hotel.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $item = Galerihotel::findOrFail($id);
        $hotel = Hotel::all();

        return view('pages.admin.galeri-wisata.edit', [
            'item' => $item,
            'hotel' => $hotel
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(GaleriHotelRequest $request, string $id)
    {
        $data = $request->all();
        $data['image'] = $request->file('image')->store(
            'assets/galeri-hotel', 'public'
        );

        $item = GaleriHotel::findOrFail($id);

        $item->update($data);

        return redirect()->route('galeri-hotel.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $item = GaleriHotel::findOrFail($id);
        $item->delete();

        return redirect()->route('galeri-hotel.index');
    }
}
