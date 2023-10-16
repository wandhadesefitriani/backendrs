<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\layananunggulan;
use illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;

class layananunggulanController extends Controller
{
    public function index (){
        $layananunggulan = layananunggulan::all();
        return view('admin.layananunggulan.index', compact('layananunggulan'));

    }

    public function add (){
        return view ('admin.layananunggulan.add');
    }
    public function store(Request $request)
    {
        $rules=[
             'judul' => 'required',
             'gambar' => 'required|max:1000|mimes:jpg,jpeg,png',
             'deskripsi' => 'required',
            ];

              $messages =[
                'judul.required' => '*judul harus diisi',
                'gambar.required' => '*Gambar harus diisi',
                'deskripsi.required' => '*Deskripsi harus diisi',
            ];

            $this->validate($request,$rules, $messages);
           

            //gambar
            $fileName = time().'.'.$request->gambar->extension();
            $request->file('gambar')->storeAs('public/layananunggulan/gambar', $fileName);
           
           
            $layananunggulan = new layananunggulan();
            $layananunggulan->judul=$request->judul;
            $layananunggulan->gambar = $fileName;
            $layananunggulan->deskripsi=$request->deskripsi;
            $layananunggulan->save();
            return redirect()->route('layananunggulan.view')->with('success','Tambah data berhasil');
    }

    public function edit(Request $request, $id)
     {
        $editData = layananunggulan::findOrFail($id);
        return view('admin.layananunggulan.edit', compact('editData'));
    }
    public function update(Request $request, $id)
    {
        $editData = layananunggulan::find($id);
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
            if (\File::exists('storage/layananunggulan/gambar'.$editData->gambar)) {
                \File::delete('storage/layananunggulan/gambar'.$editData->gambar);
            }
            $fileName = time().'.'.$request->gambar->extension();
            $request->file('gambar')->storeAs('public/layananunggulan/gambar', $fileName);
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
        return redirect()->route('layananunggulan.view')->with('success', 'Data layananunggulan berhasil ditambahkan');
    }

    public function delete(Request $request, $id)
{
    $layananunggulan= layananunggulan::findOrFail($id);
    
    // Hapus gambar utama
    if ($layananunggulan->gambar) {
        Storage::disk('public')->delete('layananunggulan/gambar/' . $layananunggulan->gambar);
    }


    // Hapus data berita
    $layananunggulan->delete();

    return redirect()->route('layananunggulan.view')->with('success', 'Data layananunggulan berhasil dihapus');
}
}
