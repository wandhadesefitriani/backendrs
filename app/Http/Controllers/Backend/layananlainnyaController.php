<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\layananlainnya;
use illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;

class layananlainnyaController extends Controller
{
    public function index (){
        $layananlainnya = layananlainnya::all();
        return view('admin.layananlainnya.index', compact('eswl'));

    }

    public function add (){
        return view ('admin.layananlainnya.add');
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
            $request->file('gambar')->storeAs('public/layananlainnya/gambar', $fileName);
           
           
            $layananlainnya = new layananlainnya();
            $layananlainnya->judul=$request->judul;
            $layananlainnya->gambar = $fileName;
            $layananlainnya->deskripsi=$request->deskripsi;
            $layananlainnya->save();
            return redirect()->route('layananlainnya.view')->with('success','Tambah data berhasil');
    }

    public function edit(Request $request, $id)
     {
        $editData = Eswl::findOrFail($id);
        return view('admin.layananlainnya.edit', compact('editData'));
    }
    public function update(Request $request, $id)
    {
        $editData = layananlainnya::find($id);
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
            if (\File::exists('storage/layananlainnya/gambar'.$editData->gambar)) {
                \File::delete('storage/layananlainnya/gambar'.$editData->gambar);
            }
            $fileName = time().'.'.$request->gambar->extension();
            $request->file('gambar')->storeAs('public/layananlainnya/gambar', $fileName);
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
        return redirect()->route('layananlainnya.view')->with('success', 'Data layananlainnya berhasil ditambahkan');
    }

    public function delete(Request $request, $id)
{
    $layananlainnya= layananlainnya::findOrFail($id);
    
    // Hapus gambar utama
    if ($layananlainnya->gambar) {
        Storage::disk('public')->delete('layananlainnya/gambar/' . $layananlainnya->gambar);
    }


    // Hapus data berita
    $layananlainnya->delete();

    return redirect()->route('layananlainnya.view')->with('success', 'Data layananlainnya berhasil dihapus');
}
}
