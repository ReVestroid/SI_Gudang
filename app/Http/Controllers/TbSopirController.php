<?php

namespace App\Http\Controllers;

use App\Models\tb_sopir;
use Illuminate\Http\Request;

class TbSopirController extends Controller
{
    public function supir(){
        $data=tb_sopir::all();
        return view('side/shipping',compact('data'));
    }

    public function tambah_sopir(){
        return view('tambahdata');
    }

    public function insert_sopir(Request $request){
        tb_barang::create($request->all());
        //dd($request->all());
        return redirect()->route('barang')->with('success','Data Masuk');
    }

    public function tampil_sopir($id_barang){
        $data=tb_sopir::find($id_barang);
        //dd($data);
        return view('tampil_barang',compact('data'));
    }

    public function update_sopir(Request $request,$id_barang){
        $data=tb_sopir::find($id_barang);
        // dd($data);
        $data->update($request->all());
        return redirect()->route('barang')->with('success','Data Updated');
    }

    public function delete_sopir($id_barang){
        $data=tb_sopir::find($id_barang);
        $data->delete();
        return redirect()->route('barang')->with('success','Data Deleted');
    }

    // public function sopir(){
    //     $data=tb_sopir::all();
    //     return view('data_supir',compact('data'));
    // }
}