<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\KulinerRequest;
use App\Models\Kuliner;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class KulinerController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $items = Kuliner::all();

        return view('pages.admin.kuliner.index', [
            'items' => $items
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('pages.admin.kuliner.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(KulinerRequest $request)
    {
        $data = $request->all();
        $data['slug'] = Str::slug($request->nama);

        Kuliner::create($data);
        return redirect()->route('kuliner.index');
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
        $item = Kuliner::findOrFail($id);

        return view('pages.admin.kuliner.edit', [
            'item' => $item
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(KulinerRequest $request, string $id)
    {
        $data = $request->all();
        $data['slug'] = Str::slug($request->nama);

        $item = Kuliner::findOrFail($id);

        $item->update($data);

        return redirect()->route('kuliner.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $item = Kuliner::findOrFail($id);
        $item->delete();

        return redirect()->route('kuliner.index');
    }
}
