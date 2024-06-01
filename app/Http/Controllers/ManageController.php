<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use Illuminate\Support\Str;
use App\Models\Sepatu;
use App\Model\Barangbekas;
use Illuminate\Support\Facades\Storage;


class ManageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('home.create', [
            'title' => 'Halaman Beranda',
            'navtitle' => 'Beranda',
            'categories' => Category::all()
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $validatedData = $request->validate([
            'nama' => 'required|max:255',
            'category_id' => 'required',
            'img' => 'image|file|max:1024',
            'harga' => 'required',
            'deskripsi' => 'required'
        ]);
    
        if($request->file('img')) { //jikalau inputan dari form img itu ada isi nya atau di upload
            $validatedData['img'] = $request->file('img')->store('post-images'); //maka isi $validatedData['img'] dengan apa yang di inputkan sebelumnya dan simpan ke dalam storage path post-images
        }

        

        $validatedData['excerpt'] = Str::limit(strip_tags($request->deskripsi), 200);
    
        Sepatu::create($validatedData);
    
        return redirect('/beranda')->with('success', 'Data berhasil disimpan');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {

        $sepatu = Sepatu::findOrFail($id);

        return view('home.edit', [
            'title' => 'Halaman Beranda',
            'navtitle' => 'Beranda',
            'sepatu' => $sepatu,
            'categories' => Category::all()
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $rules = [
            'nama' => 'required|max:255',  
            'category_id' => 'required',
            'img' => 'image|file|max:1024',
            'harga' => 'required',
            'deskripsi' => 'required'
        ];


        $validatedData = $request->validate($rules);

        if($request->file('img')) { //jikalau inputan dari form img itu ada isi nya atau di upload
            if($request->oldImage) { //jikalau ada oldImage nya 
                Storage::delete($request->oldImage); //maka hapus oldImage nya
            }
            $validatedData['img'] = $request->file('img')->store('post-images'); //maka isi $validatedData['img'] dengan apa yang di inputkan sebelumnya dan simpan ke dalam storage path post-images
        }

        $validatedData['excerpt'] = Str::limit(strip_tags($request->body), 200); 

        $sepatu = Sepatu::findOrFail($id);

        $sepatu->update($validatedData);

        return redirect('/beranda')->with('updateSuccess', 'Ubah Data Telah Berhasil');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $sepatu = Sepatu::findOrFail($id);

        if ($sepatu->img) { //jika di dalam sepatu terdapat sebuah gambar
            Storage::delete($sepatu->img); //maka akses library storage dan hapus gambar tersebut
        }

        $sepatu->delete();
        return redirect('/beranda')->with('deleteSuccess', 'Hapus Data Telah Berhasil');
    }
}
