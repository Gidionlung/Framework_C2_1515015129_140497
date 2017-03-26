<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\dosen;

class DosenController extends Controller
{
    public function awal()
    {
    	return "Selamat Datang Dosen!!! :)";
    }
    public function tambah()
    {
    	return $this->simpan();
    }
    public function simpan()
    {
    	$dosen = new Dosen();
    	$dosen->nama = 'Kakak Aslab';
    	$dosen->nip = '1415015000';
    	$dosen->alamat = 'EveryTime EveryWhere';
    	$dosen->pengguna_id = '1';
    	$dosen->save();
    	return "Data Dosen dengan nama {$dosen->nama} telah disimpan";
    }
}
