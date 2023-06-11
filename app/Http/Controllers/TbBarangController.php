<?php

namespace App\Http\Controllers;

use App\Models\tb_barang;
use Illuminate\Http\Request;

class TbBarangController extends Controller
{
    public function barang(){
        $data=tb_barang::all();
        return view('side/index',compact('data'));
    }

    public function tambah_barang(){
        return view('tambahdata');
    }

    public function insert_barang(Request $request){
        tb_barang::create($request->all());
        //dd($request->all());
        return redirect()->route('dashboard')->with('success','Data Masuk');
    }

    public function tampil_barang($id_barang){
        $data=tb_barang::find($id_barang);
        //dd($data);
        return view('tampil_barang',compact('data'));
    }

    public function update_barang(Request $request,$id_barang){
        $data=tb_barang::find($id_barang);
        // dd($data);
        $data->update($request->all());
        return redirect()->route('dashboard')->with('success','Data Updated');
    }

    public function delete_barang($id_barang){
        $data=tb_barang::find($id_barang);
        $data->delete();
        return redirect()->route('dashboard')->with('success','Data Deleted');
    }


}