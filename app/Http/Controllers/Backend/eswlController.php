<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\eswl;
use illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;


class EswlController extends Controller
{
    public function index (){
        $eswl = Eswl::all();
        return view('admin.eswl.index', compact('eswl'));

    }

    public function add (){
        return view ('admin.eswl.add');
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
            $request->file('gambar')->storeAs('public/eswl/gambar', $fileName);
           
           
            $eswl = new Eswl();
            $eswl->judul=$request->judul;
            $eswl->gambar = $fileName;
            $eswl->deskripsi=$request->deskripsi;
            $eswl->save();
            return redirect()->route('eswl.view')->with('success','Tambah data berhasil');
    }

    public function edit(Request $request, $id)
     {
        $editData = Eswl::findOrFail($id);
        return view('admin.eswl.edit', compact('editData'));
    }
    public function update(Request $request, $id)
    {
        $editData = Eswl::find($id);
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
            if (\File::exists('storage/eswl/gambar'.$editData->gambar)) {
                \File::delete('storage/eswl/gambar'.$editData->gambar);
            }
            $fileName = time().'.'.$request->gambar->extension();
            $request->file('gambar')->storeAs('public/eswl/gambar', $fileName);
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
        return redirect()->route('eswl.view')->with('success', 'Data eswl berhasil ditambahkan');
    }

    public function delete(Request $request, $id)
{
    $eswl = Eswl::findOrFail($id);
    
    // Hapus gambar utama
    if ($eswl->gambar) {
        Storage::disk('public')->delete('eswl/gambar/' . $eswl->gambar);
    }


    // Hapus data berita
    $eswl->delete();

    return redirect()->route('eswl.view')->with('success', 'Data berita berhasil dihapus');
}
}
