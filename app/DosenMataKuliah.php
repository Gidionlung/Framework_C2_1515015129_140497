<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DosenMataKuliah extends Model
{

    protected $table = 'dosen_matakuliah';
    protected $fillable = ['dosen_id','matakuliah_id'];


	public function Dosen(){
		return this->belongsTo(Dosen::class);
	}

	public function JadwalMatakuliah(){
		return this->hasMany(jadwalMatakuliah::class);
	}

	public function Matakuliah(){
		return this->belongsTo(Matakuliah::class);
	}
}
