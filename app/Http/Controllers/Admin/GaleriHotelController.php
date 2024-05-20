<?php

namespace App\Http\Controllers\Admin;

use App\Models\Hotel;
use App\Models\GaleriHotel;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Intervention\Image\ImageManager;
use Illuminate\Support\Facades\Storage;
use App\Http\Requests\Admin\GaleriHotelRequest;

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
        // $data = $request->all();
        // $data['image'] = $request->file('image')->store(
        //     'assets/galeri-hotel', 'public'
        // );

        // GaleriHotel::create($data);
        // return redirect()->route('galeri-hotel.index');

        $extension = $request->file('image')->extension();
        $imageNames = uniqid('img_', microtime()) . '.' . $extension;
        Storage::putFileAs('public/assets/galeri-hotel/', $request->file('image'), $imageNames);

        $thumbnailpath = public_path('storage/assets/galeri-hotel/' . $imageNames);
        $image = ImageManager::imagick()->read($thumbnailpath);
        $image->resize(600, 500)->save($thumbnailpath);

        GaleriHotel::create([
            'hotel_id' => $request->hotel_id,
            'image' => 'assets/galeri-hotel/' . $imageNames
        ]);
        return redirect()->route('galeri-hotel.show', $request->hotel_id);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $items = GaleriHotel::with(['hotel'])->where('hotel_id', $id)->get();

        return view('pages.admin.galeri-hotel.index', [
            'items' => $items
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $item = GaleriHotel::findOrFail($id);
        $hotel = Hotel::all();

        return view('pages.admin.galeri-hotel.edit', [
            'item' => $item,
            'hotel' => $hotel
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(GaleriHotelRequest $request, string $id)
    {
        // $data = $request->all();
        // $data['image'] = $request->file('image')->store(
        //     'assets/galeri-hotel', 'public'
        // );

        // $item = GaleriHotel::findOrFail($id);

        // $item->update($data);

        // return redirect()->route('galeri-hotel.index');

        $extension = $request->file('image')->extension();
        $imageNames = uniqid('img_', microtime()) . '.' . $extension;
        Storage::putFileAs('public/assets/galeri-hotel/', $request->file('image'), $imageNames);

        $thumbnailpath = public_path('storage/assets/galeri-hotel/' . $imageNames);
        $image = ImageManager::imagick()->read($thumbnailpath);
        $image->resize(600, 500)->save($thumbnailpath);

        $item = GaleriHotel::findOrFail($id);

        $item->update([
            'image' => 'assets/galeri-hotel/' . $imageNames
        ]);

        return redirect()->route('galeri-hotel.show', $item->hotel_id);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $item = GaleriHotel::findOrFail($id);
        $item->delete();

        return redirect()->route('galeri-hotel.show', $item->hotel_id);
    }
}
