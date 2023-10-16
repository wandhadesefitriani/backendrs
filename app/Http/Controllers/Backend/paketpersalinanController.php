<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\paketpersalinan;
use illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;

class PaketPersalinanController extends Controller
{
    public function index (){
        $Paketpersalinan = Paketpersalinan::all();
        return view('admin.paketpersalinan.index', compact('Paketpersalinan'));

    }

    public function add (){
        return view ('admin.paketpersalinan.add');
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
            $request->file('gambar')->storeAs('public/paketpersalinan/gambar', $fileName);
           
           
            $paketpersalinan = new paketpersalinan();
            $paketpersalinan->judul=$request->judul;
            $paketpersalinan->gambar = $fileName;
            $paketpersalinan->deskripsi=$request->deskripsi;
            $paketpersalinan->save();
            return redirect()->route('paketpersalinan.view')->with('success','Tambah data berhasil');
    }
    public function edit(Request $request, $id) {
        $editData = paketpersalinan::findOrFail($id);
        return view('admin.paketpersalinan.edit', compact('editData'));
    }
    public function update(Request $request, $id)
    {
        $editData = paketpersalinan::find($id);
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
            if (\File::exists('storage/paketpersalinan/gambar'.$editData->gambar)) {
                \File::delete('storage/paketpersalinan/gambar'.$editData->gambar);
            }
            $fileName = time().'.'.$request->gambar->extension();
            $request->file('gambar')->storeAs('public/paketpersalinan/gambar', $fileName);
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
        return redirect()->route('paketpersalinan.view')->with('success', 'Data paketpersalinan berhasil ditambahkan');
    }

    public function delete(Request $request, $id)
{
    $paketpersalinan = paketpersalinan::findOrFail($id);
    
    // Hapus gambar utama
    if ($paketpersalinan->gambar) {
        Storage::disk('public')->delete('paketpersalinan/gambar/' . $paketpersalinan->gambar);
    }


    // Hapus data berita
    $paketpersalinan->delete();

    return redirect()->route('paketpersalinan.view')->with('success', 'Data berita berhasil dihapus');
}
}
