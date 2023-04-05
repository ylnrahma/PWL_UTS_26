<?php

namespace App\Http\Controllers;

use App\Models\Posyandu;
use Illuminate\Http\Request;

class PosyanduController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //fungsi eloquent menampilkan data menggunakan pagination
        $posyandus = Posyandu::All(); // Mengambil semua isi tabel
        $posts = Posyandu::orderBy('No_Urut', 'desc')->paginate(6);
        return view('posyandus.index', compact('posyandus'))
        ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('posyandus.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //melakukan validasi data
        $request->validate([
            'No_Urut' => 'required',
            'Nama' => 'required',
            'Alamat' => 'required',
            'Tanggal_lahit' => 'required',
            'Bb_lahir' => 'required',
            'Tb_Lahir' => 'required',
        ]);

        //fungsi eloquent untuk menambah data
        Posyandu::create($request->all());

        //jika data berhasil ditambahkan, akan kembali ke halaman utama
        return redirect()->route('posyandus.index')->with('success', 'Peserta Posyandu Berhasil Ditambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $No_Urut
     * @return \Illuminate\Http\Response
     */
    public function show($No_Urut)
    {
        //menampilkan detail data dengan menemukan/berdasarkan Nim Mahasiswa
        $Posyandu = Posyandu::find($No_Urut);
        return view('posyandus.detail', compact('Posyandu'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $No_Urut
     * @return \Illuminate\Http\Response
     */
    public function edit($No_Urut)
    {
        //menampilkan detail data dengan menemukan berdasarkan Nim Mahasiswa untuk diedit
        $Posyandu = Posyandu::find($No_Urut);
        return view('posyandus.edit', compact('Posyandu'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $No_Urut
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $No_Urut)
    {
        //melakukan validasi data
        $request->validate([
            'No_Urut' => 'required',
            'Nama' => 'required',
            'Alamat' => 'required',
            'Tanggal_lahir' => 'required',
            'Bb_lahir' => 'required',
            'Tb_lahir' => 'required',
        ]);

       //fungsi eloquent untuk mengupdate data inputan kita
            Posyandu::find($No_Urut)->update($request->all());

       //jika data berhasil diupdate, akan kembali ke halaman utama
            return redirect()->route('posyandus.index')->with('success', 'Peserta Posyandu Berhasil Diupdate');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $No_Urut
     * @return \Illuminate\Http\Response
     */
    public function destroy($No_Urut)
    {
        //fungsi eloquent untuk menghapus data
        Posyandu::find($No_Urut)->delete();
        return redirect()->route('posyandus.index')
             -> with('success', 'Peserta Posyandu Berhasil Dihapus');
    }
    
    public function search(Request $request)
    {
        $keyword = $request->search;
        $posyandus = Posyandu::where('Nama', 'Like', "%" . $keyword . "%")->paginate(5);
        return view('posyandus.index', compact('posyandus'))->with('i', (request()->input('page', 1) - 1) * 5);
    }
};
