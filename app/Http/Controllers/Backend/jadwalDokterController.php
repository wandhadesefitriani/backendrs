<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\jadwalDokter;
use illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;

class JadwalDokterController extends Controller
{
    public function index (){
        $jadwaldokter = jadwalDokter::all();
        return view('admin.jadwalDokter.index', compact('mcu'));

    }

    public function add (){
        return view ('admin.jadwalDokter.add');
    }
    public function store(Request $request)
    {
        $rules=[
             'nama' => 'required',
             'jam' => 'required',
             'hari' => 'required',
             'gambar' => 'required|max:1000|mimes:jpg,jpeg,png',
            
            ];

              $messages =[
                'nama.required' => '*nama harus diisi',
                'jam.required' => '*jam harus diisi',
                'hari.required' => '*hari harus diisi',
                'gambar.required' => '*Gambar harus diisi',
               
            ];

            $this->validate($request,$rules, $messages);
           

            //gambar
            $fileName = time().'.'.$request->gambar->extension();
            $request->file('gambar')->storeAs('public/jadwalDokter/gambar', $fileName);
           
           
            $jadwalDokter = new jadwalDokter();
            $jadwalDokter->nama=$request->nama;
            $jadwalDokter->jam=$request->jam;
            $jadwalDokter->hari=$request->hari;
            $jadwalDokter->gambar = $fileName;
            
            $jadwalDokter->save();
            return redirect()->route('jadwalDokter.view')->with('success','Tambah data berhasil');
    }
    public function edit(Request $request, $id) {
        $editData = Mcu::findOrFail($id);
        return view('admin.jadwalDokter.edit', compact('editData'));
    }
    public function update(Request $request, $id)
    {
        $editData = jadwalDokter::find($id);
        if ($request->hasFile('gambar')) {
            $fileCheck = 'nullable|max:1000|mimes:jpg,jpeg,png';
        } else {
            $fileCheck = 'max:1000|mimes:jpg,jpeg,png';
        }
        $this->validate($request, [
            'nama' => 'required',
            'jam' => 'required',
            'hari' => 'required',
            'gambar' => 'required|max:1000|mimes:jpg,jpeg,png',
        ]);

        if ($request->hasFile('gambar')) {
            if (\File::exists('storage/jadwalDokter/gambar'.$editData->gambar)) {
                \File::delete('storage/jadwalDokter/gambar'.$editData->gambar);
            }
            $fileName = time().'.'.$request->gambar->extension();
            $request->file('gambar')->storeAs('public/jadwalDokter/gambar', $fileName);
       }

       if ($request->hasFile('gambar')) {
            $checkFileName = $fileName;
           
       } else {
       
        $checkFileName = $editData->gambar;
       }

       
        $editData->update([
        $editData->nama=$request->input('nama'),
        'gambar' => $checkFileName,
        $editData->deskripsi=$request->input('deskripsi'),
        
    ]);
        return redirect()->route('jadwalDokter.view')->with('success', 'Data jadwalDokter berhasil ditambahkan');
    }

    public function delete(Request $request, $id)
{
    $jadwalDokter= jadwalDokter::findOrFail($id);
    
    // Hapus gambar utama
    if ($jadwalDokter->gambar) {
        Storage::disk('public')->delete('jadwalDokter/gambar/' . $jadwalDokter->gambar);
    }


    // Hapus data berita
    $jadwalDokter->delete();

    return redirect()->route('jadwalDokter.view')->with('success', 'Data jadwalDokter berhasil dihapus');
}
}