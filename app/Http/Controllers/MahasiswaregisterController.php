<?php

namespace App\Http\Controllers;

use App\Mahasiswaregister;
use Session;
use Illuminate\Http\Request;


class MahasiswaregisterController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $mhs = Mahasiswaregister::all();
        return view('register.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('register.index');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $mhs = new Mahasiswaregister();
        $mhs->npm =  $request->npm;
        $mhs->nama = $request->nama;
        //    $mhs->jenis_kelamin = $request->jenis_kelamin;
        $mhs->alamat = $request->alamat;
        // $mhs->tgl_lahir = $request->tgl_lahir;
        $mhs->email = $request->email;
        $mhs->save();
        // $mhs->hobi()->attach($request->hobi);//
        Session::flash(
            "flash_notification",
            [
                "level" => "success",
                "message" => "Berhasil menyimpan <b>$mhs->nama</b>"
            ]
        );
        return redirect()->route('register.index');
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
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
