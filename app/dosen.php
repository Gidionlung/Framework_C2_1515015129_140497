<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class dosen extends Model
{
    protected $table = 'dosen';
    protected $fillable = ['nama','nip','alamat','pengguna_id'];

	public function pengguna()
	{
		return this->belongsTo(Pengguna::class);
	}

	public function DosenMatakuliah()
	{
		return this->hasMany(DosenMatakuliah::class);
	} 
	
	public function getUsernameAttribute(){
		return $this ->pengguna->username;
	}

}