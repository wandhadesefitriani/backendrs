<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\rawatinap;
use illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;

class rawatinapController extends Controller
{
    public function index (){
        $rawatinap = rawatinap::all();
        return view('admin.rawatinap.index', compact('rawatinap'));

    }

    public function add (){
        return view ('admin.rawatinap.add');
    }
    public function store(Request $request)
    {
        $rules=[
             'judul' => 'required',
             'gambar' => 'required|max:1000|mimes:jpg,jpeg,png',
             'deskripsi' => 'required|min:20',
            ];

              $messages =[
                'judul.required' => '*judul harus diisi',
                'gambar.required' => '*Gambar harus diisi',
                'deskripsi.required' => '*Deskripsi harus diisi',
            ];

            $this->validate($request,$rules, $messages);
           

            //gambar
            $fileName = time().'.'.$request->gambar->extension();
            $request->file('gambar')->storeAs('public/rawatinap/gambar', $fileName);
           
           
            $rawatinap= new rawatinap();
            $rawatinap->judul=$request->judul;
            $rawatinap->gambar = $fileName;
            $rawatinap->deskripsi=$request->deskripsi;
            $rawatinap->save();
            return redirect()->route('rawatinap.view')->with('success','Tambah data berhasil');
    }
    public function edit(Request $request, $id) {
        $editData = rawatinap::findOrFail($id);
        return view('admin.rawatinap.edit', compact('editData'));
    }
    public function update(Request $request, $id)
    {
        $editData = rawatinap::find($id);
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
            if (\File::exists('storage/rawatinap/gambar'.$editData->gambar)) {
                \File::delete('storage/rawatinap/gambar'.$editData->gambar);
            }
            $fileName = time().'.'.$request->gambar->extension();
            $request->file('gambar')->storeAs('public/rawatinap/gambar', $fileName);
       }

       if ($request->hasFile('gambar')) {
            $checkFileName = $fileName;
           
       } else {
       
        $checkFileName = $editData->gambar;
       }

       
        $editData->update([
        $editData->judul=$request->input('judul'),
        'gambar' => $checkFileName,
        $editData->deskripsi=$request->input('deskripsi'),
        
    ]);
        return redirect()->route('rawatinap.view')->with('success', 'Data rawatinap berhasil ditambahkan');
    }

    public function delete(Request $request, $id)
{
    $rawatinap = rawatinap::findOrFail($id);
    
    // Hapus gambar utama
    if ($rawatinap->gambar) {
        Storage::disk('public')->delete('rawatinap/gambar/' . $rawatinap->gambar);
    }


    // Hapus data berita
    $rawatinap->delete();

    return redirect()->route('rawatinap.view')->with('success', 'Data rawatinap berhasil dihapus');
}
}