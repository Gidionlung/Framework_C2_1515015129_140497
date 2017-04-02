<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class JadwalMataKuliah extends Model
{

   protected $table = 'jadwal_matakuliah';
   protected $fillable = ['mahasiswa_id','ruangan_id','dosen_matakuliah_id'];

	public function Ruangan(){
		return this->belongsTo(Ruangan::class);
	}

	public function Mahasiswa(){
		return this->belongsTo(Mahasiswa::class);
	}

	public function DosenMatakuliah(){
		return this->belongsTo(Dosenmatakuliah::class);
	}

}
