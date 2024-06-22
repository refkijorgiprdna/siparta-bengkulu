<?php

namespace App\Http\Controllers\Admin;

use App\Models\Wisata;
use App\Models\SubWisata;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\SubWisataRequest;

class SubWisataController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $items = SubWisata::all();

        return view('pages.admin.sub-wisata.index', [
            'items' => $items
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $wisata = Wisata::all();
        return view('pages.admin.sub-wisata.create', [
            'wisata' => $wisata
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(SubWisataRequest $request)
    {
        $data = $request->all();
        $data['slug'] = Str::slug($request->nama);

        SubWisata::create($data);
        return redirect()->route('sub-wisata.index');
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
        $item = SubWisata::findOrFail($id);
        $wisata = Wisata::all();

        return view('pages.admin.sub-wisata.edit', [
            'item' => $item,
            'wisata' => $wisata
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(SubWisataRequest $request, string $id)
    {
        $data = $request->all();
        $data['slug'] = Str::slug($request->nama);

        $item = SubWisata::findOrFail($id);

        $item->update($data);

        return redirect()->route('sub-wisata.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $item = SubWisata::findOrFail($id);
        $item->delete();

        return redirect()->route('sub-wisata.index');
    }
}
