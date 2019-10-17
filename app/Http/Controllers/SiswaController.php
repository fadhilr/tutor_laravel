<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SiswaController extends Controller
{
    public function index()
    {
    	$data_siswa= \App\Siswa::all();

    	return view('siswa.index',['data_siswa'=> $data_siswa]);
    }
    public function create(Request $request)
    {
    	$data_siswa= \App\Siswa::all();
    	\App\Siswa::create($request->all());
    	return redirect('/siswa')->with('sukses','data berhasil diinput');
    }
    public function edit($id)
    {
    	$siswa = \App\Siswa::find($id);
    	return view('siswa/edit',['siswa'=>$siswa]);
    }
    public function update(Request $request, $id)
    {
    	$siswa = \App\Siswa::find($id);
    	$siswa->update($request->all());
    	return redirect('/siswa')->with('sukses','data berhasil diupdate');
    }
    public function delete($id)
    {
    	$siswa = \App\Siswa::find($id);
    	$siswa->delete();
    	return redirect('/siswa')->with('sukses','data berhasil didelete');
    }
}
