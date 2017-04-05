<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\mahasiswa;
use App\Pengguna


class MahasiswaController extends Controller
{
    public function awal(){
    	// return "Hello Mahasiswa!! Selamat Mengerjakan Postest! XOXO";
        $semuaMahasiswa = Mahasiswa::all();
         //return view ('mahasiswa.awal',['data'=>Mahasiswa::all()]);
         return view ('mahasiswa.awal', compact ('semuaMahasiswa'));
    }
    public function tambah(){
        return view ('mahasiswa.awal');
    	//return $this->simpan();}

    public function simpan(Request $input){
        $pengguna = new Pengguna ($input -> only ('username','password'));
        if ($pengguna -> save()){
    	$mahasiswa = new Mahasiswa();
    	$mahasiswa->nama = $input -> nama;
    	$mahasiswa->nim = $input -> nim;
    	$mahasiswa->alamat = $input -> alamat;
        if ($pengguna -> mahasiswa()-> save ($mahasiswa)) $this -> informasi = 'Berhasil Simpan Data';
    	//$mahasiswa->pengguna_id = '2';
    	//$mahasiswa->save();
    	//return "Data Mahasiswa dengan nama {$mahasiswa->nama} telah disimpan";
    }
    returm redirect ('mahasiswa')-> with (['informasi'= $this -> informasi])
}
    public function edit($id){
        $mahasiswa = Mahasiswa::find($id);
        return view ('mahasiswa.lihat')->with (array('mahasiswa'=>$mahasiswa));
    }