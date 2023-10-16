<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Berita;
use illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;

class beritaController extends Controller
{
    public function index()
    {
        $berita= Berita::all();
        return view('admin.berita.index', compact('berita'));
    }

    public function add()
    {
        return view('admin.berita.add');
    }
    public function store(Request $request)
    {
        $rules = [
            'judul' => 'required',
            'gambar' => 'required|max:1000|mimes:jpg,jpeg,png',
            'deskripsi' => 'required',
            'author' => 'required',

        ];

        $messages = [
            'gambar.required' => '*Gambar harus diisi',

        ];

        $this->validate($request, $rules, $messages);


        //gambar
        $fileName = time() . '.' . $request->gambar->extension();
        $request->file('gambar')->storeAs('public/berita/gambar', $fileName);

        $berita = new Berita();
        $berita->judul=$request->judul;
        $berita->gambar = $fileName;
        $berita->deskripsi=$request->deskripsi;
        $berita->author=$request->author;
        $berita->save();
        return redirect()->route('berita.view')->with('success', 'Tambah data berhasil');
    }
    public function edit(Request $request, $id)
    {
        $editData = Berita::findOrFail($id);
        return view('admin.berita.edit', compact('editData'));
    }
    public function update(Request $request, $id)
    {
        $editData = Berita::find($id);
        if ($request->hasFile('gambar')) {
            $fileCheck = 'nullable|max:1000|mimes:jpg,jpeg,png';
        } else {
            $fileCheck = 'max:1000|mimes:jpg,jpeg,png';
        }
        $this->validate($request, [
            'gambar' => 'max:1000|mimes:jpg,jpeg,png',
        ]);

        if ($request->hasFile('gambar')) {
            if (File::exists('storage/berita/gambar' . $editData->gambar)) {
                File::delete('storage/berita/gambar' . $editData->gambar);
            }
            $fileName = time() . '.' . $request->gambar->extension();
            $request->file('gambar')->storeAs('public/berita/gambar', $fileName);
        }

        if ($request->hasFile('gambar')) {
            $checkFileName = $fileName;
        } else {

            $checkFileName = $editData->gambar;
        }


        $editData->update([
            'gambar' => $checkFileName,


        ]);
        return redirect()->route('berita.view')->with('success', 'Data berita berhasil ditambahkan');
    }

    public function delete(Request $request, $id)
    {
        $berita = Berita::findOrFail($id);

        // Hapus gambar utama
        if ($berita->gambar) {
            Storage::disk('public')->delete('berita/gambar/' . $berita->gambar);
        }


        // Hapus data berita
        $berita->delete();

        return redirect()->route('berita.view')->with('success', 'Data berita berhasil dihapus');
    }
}