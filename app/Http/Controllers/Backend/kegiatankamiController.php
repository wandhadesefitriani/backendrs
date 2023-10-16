<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\kegiatankami;
use illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;


class kegiatankamiController extends Controller
{
    public function index()
    {
        $kegiatankami = kegiatankami::all();
        return view('admin.kegiatankami.index', compact('kegiatankami'));
    }

    public function add()
    {
        return view('admin.kegiatankami.add');
    }
    public function store(Request $request)
    {
        $rules = [
            'gambar' => 'required|max:1000|mimes:jpg,jpeg,png',

        ];

        $messages = [
            'gambar.required' => '*Gambar harus diisi',

        ];

        $this->validate($request, $rules, $messages);


        //gambar
        $fileName = time() . '.' . $request->gambar->extension();
        $request->file('gambar')->storeAs('public/kegiatankami/gambar', $fileName);


        $kegiatankami= new kegiatankami();
        $kegiatankami->judul=$request->judul;
        $kegiatankami->gambar = $fileName;
        $kegiatankami->deskripsi=$request->deskripsi;
        $kegiatankami->author=$request->author;
        $kegiatankami->save();
        return redirect()->route('kegiatankami.view')->with('success', 'Tambah data berhasil');
    }
    public function edit(Request $request, $id)
    {
        $editData = kegiatankami::findOrFail($id);
        return view('admin.kegiatankami.edit', compact('editData'));
    }
    public function update(Request $request, $id)
    {
        $editData = kegiatankami::find($id);
        if ($request->hasFile('gambar')) {
            $fileCheck = 'nullable|max:1000|mimes:jpg,jpeg,png';
        } else {
            $fileCheck = 'max:1000|mimes:jpg,jpeg,png';
        }
        $this->validate($request, [
            'gambar' => 'max:1000|mimes:jpg,jpeg,png',
        ]);

        if ($request->hasFile('gambar')) {
            if (File::exists('storage/kegiatankami/gambar' . $editData->gambar)) {
                File::delete('storage/kegiatankami/gambar' . $editData->gambar);
            }
            $fileName = time() . '.' . $request->gambar->extension();
            $request->file('gambar')->storeAs('public/kegiatankami/gambar', $fileName);
        }

        if ($request->hasFile('gambar')) {
            $checkFileName = $fileName;
        } else {

            $checkFileName = $editData->gambar;
        }


        $editData->update([
            'gambar' => $checkFileName,


        ]);
        return redirect()->route('kegiatankami.view')->with('success', 'Data kegiatankami berhasil ditambahkan');
    }

    public function delete(Request $request, $id)
    {
        $kegiatankami = $kegiatankami::findOrFail($id);

        // Hapus gambar utama
        if ($kegiatankami->gambar) {
            Storage::disk('public')->delete('kegiatankami/gambar/' . $kegiatankami->gambar);
        }


        // Hapus data berita
        $kegiatankami->delete();

        return redirect()->route('kegiatankami.view')->with('success', 'Data berita berhasil dihapus');
    }
}