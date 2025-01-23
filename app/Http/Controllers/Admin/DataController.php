<?php

namespace App\Http\Controllers\Admin;

use App\Models\Data;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class DataController extends Controller
{
    public function index()
    {
        $items = Data::all();
        return view('pages.admin.data-bidang.index', compact('items'));
    }

    public function create()
    {
        return view('pages.admin.data-bidang.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'nama_bidang' => 'required',
            'data' => 'nullable|mimes:pdf,xlsx,xls|max:5120',
            'link_video' => 'nullable|max:255'
        ]);

        // Cek apakah ada file yang diupload
        if ($request->hasFile('data')) {
        // Ambil file yang diupload
        $file = $request->file('data');

        // Gunakan nama file asli dan tambahkan timestamp agar unik
        $fileName = $file->getClientOriginalName();

        // Simpan file ke storage dengan nama asli
        $filePath = $file->storeAs('uploads', $fileName, 'public');

        // Simpan path file ke dalam array validasi
        $validated['data'] = $filePath;
    }

        Data::create($validated);
        return redirect()->route('data.index');
        //->with('success', 'Data berhasil ditambahkan.');
    }

    public function edit(string $id)
    {
        $item = Data::findOrFail($id);

        return view('pages.admin.data-bidang.edit', [
            'item' => $item
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        // Validasi input dari form
        $validated = $request->validate([
            'data' => 'nullable|mimes:pdf,xlsx,xls|max:5120', // Validasi file
            'link_video' => 'nullable|max:255' // Validasi URL
        ]);

        // Ambil data berdasarkan ID
        $item = Data::findOrFail($id);

        // Cek apakah ada file yang diupload
        if ($request->hasFile('data')) {
            // Hapus file lama jika ada
            if ($item->data && file_exists(storage_path('app/public/' . $item->data))) {
                unlink(storage_path('app/public/' . $item->data));
            }

            // Ambil file yang diupload
            $file = $request->file('data');

            // Gunakan nama file asli dan tambahkan timestamp agar unik
            $fileName = $file->getClientOriginalName();

            // Simpan file ke storage dengan nama asli
            $filePath = $file->storeAs('uploads', $fileName, 'public');

            // Simpan path file baru ke dalam array validasi
            $validated['data'] = $filePath;
        }

    // Perbarui data di database
    $item->update($validated);

    // Redirect kembali ke halaman index dengan pesan sukses
    return redirect()->route('data.index')->with('success', 'Data berhasil diperbarui.');
    }

    public function destroy(string $id)
    {
        $item = Data::findOrFail($id);
        $item->delete();

        return redirect()->route('data.index');
    }
}
