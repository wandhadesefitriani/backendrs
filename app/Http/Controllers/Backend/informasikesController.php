<?php

namespace App\Http\Controllers\Backend;

use App\Models\Informasikes;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class informasikesController extends Controller
{
    public function index()
    {
        $informasikes = Informasikes::all();
        return view('admin.informasikes.index', compact('informasikes'));
    }

    public function add()
    {
        return view('admin.informasikes.add');
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
        $request->file('gambar')->storeAs('public/informasikes/gambar', $fileName);


        $informasikes= new informasikes();
        $informasikes->gambar = $fileName;
        $informasikes->save();
        return redirect()->route('informasikes.view')->with('success', 'Tambah data berhasil');
    }
    public function edit(Request $request, $id)
    {
        $editData = informasikes::findOrFail($id);
        return view('admin.informasikes.edit', compact('editData'));
    }
    public function update(Request $request, $id)
    {
        $editData = Informasikes::find($id);
        if ($request->hasFile('gambar')) {
            $fileCheck = 'nullable|max:1000|mimes:jpg,jpeg,png';
        } else {
            $fileCheck = 'max:1000|mimes:jpg,jpeg,png';
        }
        $this->validate($request, [
            'gambar' => 'max:1000|mimes:jpg,jpeg,png',
        ]);

        if ($request->hasFile('gambar')) {
            if (File::exists('storage/informasikes/gambar' . $editData->gambar)) {
                File::delete('storage/informasikes/gambar' . $editData->gambar);
            }
            $fileName = time() . '.' . $request->gambar->extension();
            $request->file('gambar')->storeAs('public/informasikes/gambar', $fileName);
        }

        if ($request->hasFile('gambar')) {
            $checkFileName = $fileName;
        } else {

            $checkFileName = $editData->gambar;
        }


        $editData->update([
            'gambar' => $checkFileName,


        ]);
        return redirect()->route('informasikes.view')->with('success', 'Data informasikes berhasil ditambahkan');
    }

    public function delete(Request $request, $id)
    {
        $informasikes = informasikes::findOrFail($id);

        // Hapus gambar utama
        if ($informasikes->gambar) {
            Storage::disk('public')->delete('informasikes/gambar/' . $informasikes->gambar);
        }


        // Hapus data berita
        $informasikes->delete();

        return redirect()->route('informasikes.view')->with('success', 'Data berita berhasil dihapus');
    }
}
