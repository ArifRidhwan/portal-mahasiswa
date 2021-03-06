<?php

namespace App\Http\Controllers;

use App\Mahasiswa;
use Session;
use Illuminate\Http\Request;

class MahasiswaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $mhs = Mahasiswa::all();
        return view('mahasiswa.index', compact('mhs'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('mahasiswa.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $mhs = new Mahasiswa();
        $mhs->nama = $request->nama;
        $mhs->npm =  $request->npm;
        $mhs->jenis_kelamin = $request->jenis_kelamin;
        // $mhs->id_dosen = $request->id_dosen;
        $mhs->alamat = $request->alamat;
        $mhs->save();
        // $mhs->hobi()->attach($request->hobi);//
        Session::flash(
            "flash_notification",
            [
                "level" => "success",
                "message" => "Berhasil menyimpan <b>$mhs->nama</b>"
            ]
        );
        return redirect()->route('mahasiswa.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Mahasiswa  $mahasiswa
     * @return \Illuminate\Http\Response
     */
    public function show(Mahasiswa $mahasiswa)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Mahasiswa  $mahasiswa
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $mhs = Mahasiswa::findOrFail($id);
        return view('mahasiswa.edit', compact('mhs',));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Mahasiswa  $mahasiswa
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $mhs = Mahasiswa::findOrFail($id);
        $mhs->nama = $request->nama;
        $mhs->npm = $request->npm;
        $mhs->jenis_kelamin = $request->jenis_kelamin;
        $mhs->alamat = $request->alamat;
        $mhs->save();
        Session::flash(
            "flash_notification",
            [
                "level" => "success",
                "message" => "Berhasil mengedit <b>$mhs->nama</b>"
            ]
        );
        return redirect()->route('mahasiswa.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Mahasiswa  $mahasiswa
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $mhs = Mahasiswa::findOrFail($id)->delete();
        Session::flash(
            "flash_notification",
            [
                "level" => "danger",
                "message" => "Berhasil dihapus"
            ]
        );
        return redirect()->route('mahasiswa.index');
    }
}
