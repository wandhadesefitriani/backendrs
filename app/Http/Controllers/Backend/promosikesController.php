<?php

namespace App\Http\Controllers\Backend;

use App\Models\Promosikes;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;

class PromosikesController extends Controller
{
    public function index()
    {
        $promosikes = Promosikes::all();
        return view('admin.promosikes.index', compact('promosikes'));
    }

    public function add()
    {
        return view('admin.promosikes.add');
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
        $request->file('gambar')->storeAs('public/promosikes/gambar', $fileName);


        $promosikes = new promosikes();
        $promosikes->gambar = $fileName;
        $promosikes->save();
        return redirect()->route('promosikes.view')->with('success', 'Tambah data berhasil');
    }
    public function edit(Request $request, $id)
    {
        $editData = promosikes::findOrFail($id);
        return view('admin.promosikes.edit', compact('editData'));
    }
    public function update(Request $request, $id)
    {
        $editData = promosikes::find($id);
        if ($request->hasFile('gambar')) {
            $fileCheck = 'nullable|max:1000|mimes:jpg,jpeg,png';
        } else {
            $fileCheck = 'max:1000|mimes:jpg,jpeg,png';
        }
        $this->validate($request, [
            'gambar' => 'max:1000|mimes:jpg,jpeg,png',
        ]);

        if ($request->hasFile('gambar')) {
            if (File::exists('storage/promosikes/gambar' . $editData->gambar)) {
                File::delete('storage/promosikes/gambar' . $editData->gambar);
            }
            $fileName = time() . '.' . $request->gambar->extension();
            $request->file('gambar')->storeAs('public/promosikes/gambar', $fileName);
        }

        if ($request->hasFile('gambar')) {
            $checkFileName = $fileName;
        } else {

            $checkFileName = $editData->gambar;
        }


        $editData->update([
            'gambar' => $checkFileName,


        ]);
        return redirect()->route('promosikes.view')->with('success', 'Data promosikes berhasil ditambahkan');
    }

    public function delete(Request $request, $id)
    {
        $promosikes = promosikes::findOrFail($id);

        // Hapus gambar utama
        if ($promosikes->gambar) {
            Storage::disk('public')->delete('promosikes/gambar/' . $promosikes->gambar);
        }


        // Hapus data berita
        $promosikes->delete();

        return redirect()->route('promosikes.view')->with('success', 'Data berita berhasil dihapus');
    }
}
