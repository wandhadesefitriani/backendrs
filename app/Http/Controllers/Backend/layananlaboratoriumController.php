<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\layananlaboratorium;
use illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;

class LayananLaboratoriumController extends Controller
{
    public function index()
    {
        $layananlaboratorium = layananlaboratorium::all();
        return view('admin.layananlaboratorium.index', compact('layananlaboratorium'));
    }

    public function add()
    {
        return view('admin.layananlaboratorium.add');
    }
    public function store(Request $request)
    {
        $rules = [
            'judul' => 'required',
            'gambar' => 'required|max:1000|mimes:jpg,jpeg,png',
            'deskripsi' => 'required',
        ];

        $messages = [
            'judul.required' => '*judul harus diisi',
            'gambar.required' => '*Gambar harus diisi',
            'deskripsi.required' => '*Deskripsi harus diisi',
        ];

        $this->validate($request, $rules, $messages);


        //gambar
        $fileName = time() . '.' . $request->gambar->extension();
        $request->file('gambar')->storeAs('public/layananlaboratorium/gambar', $fileName);


        $layananlaboratorium = new Layananlaboratorium();
        $layananlaboratorium->judul = $request->judul;
        $layananlaboratorium->gambar = $fileName;
        $layananlaboratorium->deskripsi = $request->deskripsi;
        $layananlaboratorium->save();
        return redirect()->route('layananlaboratorium.view')->with('success', 'Tambah data berhasil');
    }
    public function edit(Request $request, $id)
    {
        $editData = Layananlaboratorium::findOrFail($id);
        return view('admin.Layananlaboratorium.edit', compact('editData'));
    }
    public function update(Request $request, $id)
    {
        $editData = layananlaboratorium::find($id);
        if ($request->hasFile('gambar')) {
            $fileCheck = 'nullable|max:1000|mimes:jpg,jpeg,png';
        } else {
            $fileCheck = 'max:1000|mimes:jpg,jpeg,png';
        }
        $this->validate($request, [
            'judul'  => 'required',
            'gambar' => 'max:1000|mimes:jpg,jpeg,png',
            'deskripsi' => 'required|min:10'
        ]);

        if ($request->hasFile('gambar')) {
            if (\File::exists('storage/layananlaboratorium/gambar' . $editData->gambar)) {
                \File::delete('storage/layananlaboratorium/gambar' . $editData->gambar);
            }
            $fileName = time() . '.' . $request->gambar->extension();
            $request->file('gambar')->storeAs('public/layananlaboratorium/gambar', $fileName);
        }

        if ($request->hasFile('gambar')) {
            $checkFileName = $fileName;
        } else {

            $checkFileName = $editData->gambar;
        }


        $editData->update([
            $editData->judul = $request->input('judul'),
            'gambar' => $checkFileName,
            $editData->deskripsi = $request->input('deskripsi'),

        ]);
        return redirect()->route('layananlaboratorium.view')->with('success', 'Data layananlaboratorium berhasil ditambahkan');
    }

    public function delete(Request $request, $id)
    {
        $layananlaboratorium = layananlaboratorium::findOrFail($id);

        // Hapus gambar utama
        if ($layananlaboratorium->gambar) {
            Storage::disk('public')->delete('layananlaboratorium/gambar/' . $layananlaboratorium->gambar);
        }


        // Hapus data berita
        $layananlaboratorium->delete();

        return redirect()->route('layananlaboratorium.view')->with('success', 'Data berita berhasil dihapus');
    }
}
