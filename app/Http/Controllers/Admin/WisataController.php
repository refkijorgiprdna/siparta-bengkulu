<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\WisataRequest;
use App\Models\Wisata;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class WisataController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $items = Wisata::all();

        return view('pages.admin.wisata.index', [
            'items' => $items
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('pages.admin.wisata.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(WisataRequest $request)
    {
        $data = $request->all();
        $data['slug'] = Str::slug($request->title);

        Wisata::create($data);
        return redirect()->route('wisata.index');
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
        $item = Wisata::findOrFail($id);

        return view('pages.admin.wisata.edit', [
            'item' => $item
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(WisataRequest $request, string $id)
    {
        $data = $request->all();
        $data['slug'] = Str::slug($request->title);

        $item = Wisata::findOrFail($id);

        $item->update($data);

        return redirect()->route('wisata.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $item = Wisata::findOrFail($id);
        $item->delete();

        return redirect()->route('wisata.index');
    }
}
