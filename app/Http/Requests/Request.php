<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

abstract class Request extends FormRequest
{
    // 
    public function authorize()
{
	return true ;
    }
    public function rules()
    {
    	$validasi = [
    		'Nama' => 'required',
    		'Nim' => 'required|integer',
    		'Alamat' => 'required',
    		'Username' => 'required'
    	];
    	if ($this-> is ('Mahasiswa/tambah')){
    		$validasi['password']= 'requires';
    	}
    	return $validasi;
    }
}
