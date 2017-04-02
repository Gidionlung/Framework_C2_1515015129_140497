<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class matakuliah extends Model
{

    protected $table = 'matakuliah';
    protected $fillable = ['title','keterangan'];

	public function DosenMatakuliah(){
		return this->hasMany(DosenMatakuliah::class);
	}
}
