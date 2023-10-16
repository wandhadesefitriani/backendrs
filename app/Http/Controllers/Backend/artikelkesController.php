<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\artikelkes;
use illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;

class artikelkesController extends Controller
{
    public function index()
    {
        $artikelkes= artikelkes::all();
        return view('admin.artikelkes.index', compact('artikelkes'));
    }

    public function add()
    {
        return view('admin.artikelkes.add');
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
        $request->file('gambar')->storeAs('public/artikelkes/gambar', $fileName);


        $artikelkes= new artikelkes();
        $artikelkes->judul=$request->judul;
        $artikelkes->gambar = $fileName;
        $artikelkes->deskripsi=$request->deskripsi;
        $artikelkes->author=$request->author;
        $artikelkes->save();
        return redirect()->route('artikelkes.view')->with('success', 'Tambah data berhasil');
    }
    public function edit(Request $request, $id)
    {
        $editData = artikelkes::findOrFail($id);
        return view('admin.artikelkes.edit', compact('editData'));
    }
    public function update(Request $request, $id)
    {
        $editData = artikelkes::find($id);
        if ($request->hasFile('gambar')) {
            $fileCheck = 'nullable|max:1000|mimes:jpg,jpeg,png';
        } else {
            $fileCheck = 'max:1000|mimes:jpg,jpeg,png';
        }
        $this->validate($request, [
            'gambar' => 'max:1000|mimes:jpg,jpeg,png',
        ]);

        if ($request->hasFile('gambar')) {
            if (File::exists('storage/artikelkes/gambar' . $editData->gambar)) {
                File::delete('storage/artikelkes/gambar' . $editData->gambar);
            }
            $fileName = time() . '.' . $request->gambar->extension();
            $request->file('gambar')->storeAs('public/artikelkes/gambar', $fileName);
        }

        if ($request->hasFile('gambar')) {
            $checkFileName = $fileName;
        } else {

            $checkFileName = $editData->gambar;
        }


        $editData->update([
            'gambar' => $checkFileName,


        ]);
        return redirect()->route('artikelkes.view')->with('success', 'Data informasikes berhasil ditambahkan');
    }

    public function delete(Request $request, $id)
    {
        $artikelkes = artikelkes::findOrFail($id);

        // Hapus gambar utama
        if ($artikelkes->gambar) {
            Storage::disk('public')->delete('artikelkes/gambar/' . $artikelkes->gambar);
        }


        // Hapus data artikelkes
        $artikelkes->delete();

        return redirect()->route('artikelkes.view')->with('success', 'Data artikelkes berhasil dihapus');
    }
}
