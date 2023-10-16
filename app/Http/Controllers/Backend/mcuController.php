<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Mcu;
use illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;

class mcuController extends Controller
{
    public function index (){
        $mcu = Mcu::all();
        return view('admin.mcu.index', compact('mcu'));

    }

    public function add (){
        return view ('admin.mcu.add');
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
            $request->file('gambar')->storeAs('public/mcu/gambar', $fileName);
           
           
            $mcu = new Mcu();
            $mcu->judul=$request->judul;
            $mcu->gambar = $fileName;
            $mcu->deskripsi=$request->deskripsi;
            $mcu->save();
            return redirect()->route('mcu.view')->with('success','Tambah data berhasil');
    }
    public function edit(Request $request, $id) {
        $editData = Mcu::findOrFail($id);
        return view('admin.mcu.edit', compact('editData'));
    }
    public function update(Request $request, $id)
    {
        $editData = Mcu::find($id);
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
            if (\File::exists('storage/mcu/gambar'.$editData->gambar)) {
                \File::delete('storage/mcu/gambar'.$editData->gambar);
            }
            $fileName = time().'.'.$request->gambar->extension();
            $request->file('gambar')->storeAs('public/mcu/gambar', $fileName);
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
        return redirect()->route('mcu.view')->with('success', 'Data mcu berhasil ditambahkan');
    }

    public function delete(Request $request, $id)
{
    $mcu = Mcu::findOrFail($id);
    
    // Hapus gambar utama
    if ($mcu->gambar) {
        Storage::disk('public')->delete('mcu/gambar/' . $mcu->gambar);
    }


    // Hapus data berita
    $mcu->delete();

    return redirect()->route('mcu.view')->with('success', 'Data berita berhasil dihapus');
}
}
