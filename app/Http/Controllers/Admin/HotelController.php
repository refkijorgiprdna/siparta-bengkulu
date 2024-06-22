<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\HotelRequest;
use App\Models\Hotel;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class HotelController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $items = Hotel::all();

        return view('pages.admin.hotel.index', [
            'items' => $items
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('pages.admin.hotel.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(HotelRequest $request)
    {
        $data = $request->all();
        $data['slug'] = Str::slug($request->nama);

        Hotel::create($data);
        return redirect()->route('hotel.index');
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
        $item = Hotel::findOrFail($id);

        return view('pages.admin.hotel.edit', [
            'item' => $item
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(HotelRequest $request, string $id)
    {
        $data = $request->all();
        $data['slug'] = Str::slug($request->nama);

        $item = Hotel::findOrFail($id);

        $item->update($data);

        return redirect()->route('hotel.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $item = Hotel::findOrFail($id);
        $item->delete();

        return redirect()->route('hotel.index');
    }
}
