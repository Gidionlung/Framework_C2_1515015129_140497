<?php
use Illuminate\Http\Request;
// use Illuminate\Http\Middleware\AuthentifikasiUser;

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/
Route::get('/login','SesiController@form');
Route::post('/login','SesiController@validasi');
Route::get('/logout','SesiController@logout');
Route::get('/','SesiController@index');
Route::group(['middleware'=>'AuthentifikasiUser'],function ()
{
	Route::get('pengguna','PenggunaController@awal');
	Route::get('pengguna/tambah','PenggunaController@tambah');
	Route::post('pengguna/simpan','PenggunaController@simpan');
	Route::get('pengguna/edit/{pengguna}','PenggunaController@edit');
	Route::post('pengguna/edit/{pengguna}','PenggunaController@update');
	Route::get('pengguna/hapus/{pengguna}','PenggunaController@hapus');
	Route::get('pengguna/lihat/{pengguna}','PenggunaController@lihat');
	Route::get('matakuliah','MatakuliahController@awal');
Route::get('matakuliah/tambah','MatakuliahController@tambah');

Route::post('matakuliah/simpan','MatakuliahController@simpan');
Route::get('matakuliah/edit/{matakuliah}','MatakuliahController@edit');
Route::post('matakuliah/edit/{matakuliah}','MatakuliahController@update');
Route::get('matakuliah/hapus/{matakuliah}','MatakuliahController@hapus');
Route::get('matakuliah/lihat/{matakuliah}','MatakuliahController@lihat');


Route::get('ruangan','RuanganController@awal');
Route::get('ruangan/tambah','RuanganController@tambah');

Route::post('ruangan/simpan','RuanganController@simpan');
Route::get('ruangan/edit/{ruangan}','RuanganController@edit');
Route::post('ruangan/edit/{ruangan}','RuanganController@update');
Route::get('ruangan/hapus/{ruangan}','RuanganController@hapus');
Route::get('ruangan/lihat/{ruangan}','RuanganController@lihat');


Route::get('mahasiswa','MahasiswaController@awal');
Route::get('mahasiswa/tambah','MahasiswaController@tambah');

Route::post('mahasiswa/simpan','MahasiswaController@simpan');
Route::get('mahasiswa/edit/{mahasiswa}','MahasiswaController@edit');
Route::post('mahasiswa/edit/{mahasiswa}','MahasiswaController@update');
Route::get('mahasiswa/hapus/{mahasiswa}','MahasiswaController@hapus');
Route::get('mahasiswa/lihat/{mahasiswa}','MahasiswaController@lihat');


Route::get('dosen','DosenController@awal');
Route::get('dosen/tambah','DosenController@tambah');

Route::post('dosen/simpan','DosenController@simpan');
Route::get('dosen/edit/{dosen}','DosenController@edit');
Route::post('dosen/edit/{dosen}','DosenController@update');
Route::get('dosen/hapus/{dosen}','DosenController@hapus');
Route::get('dosen/lihat/{dosen}','DosenController@lihat');


Route::get('dosenmatakuliah','DosenMatakuliahController@awal');
Route::get('dosenmatakuliah/tambah','DosenMatakuliahController@tambah');

Route::post('dosenmatakuliah/simpan','DosenmatakuliahController@simpan');
Route::get('dosenmatakuliah/edit/{dosenmatakuliah}','DosenMatakuliahController@edit');
Route::post('dosenmatakuliah/edit/{dosenmatakuliah}','DosenMatakuliahController@update');
Route::get('dosenmatakuliah/hapus/{dosenmatakuliah}','DosenMatakuliahController@hapus');
Route::get('dosenmatakuliah/lihat/{dosenmatakuliah}','DosenMatakuliahController@lihat');


Route::get('jadwalmatakuliah','JadwalMatakuliahController@awal');
Route::get('jadwalmatakuliah/tambah','JadwalMatakuliahController@tambah');

Route::post('jadwalmatakuliah/simpan','JadwalMatakuliahController@simpan');
Route::get('jadwalmatakuliah/edit/{jadwalmatakuliah}','JadwalMatakuliahController@edit');
Route::post('jadwalmatakuliah/edit/{jadwalmatakuliah}','JadwalMatakuliahController@update');
Route::get('jadwalmatakuliah/hapus/{jadwalmatakuliah}','JadwalMatakuliahController@hapus');
Route::get('jadwalmatakuliah/lihat/{jadwalmatakuliah}','JadwalMatakuliahController@lihat');

Route::get('ujiHas','RelationshipRebornController@ujiHas');
Route::get('ujiDoesntHave','RelationshipRebornController@ujiDoesntHave');

});










// Route::get('/', function () {
//     return view('posttest1');
// });
// Route::get('/', function () 
// {
//     return view('master');
// }); 

// Route::get('/', function () 
// {
//     return \App\Dosen_Matakuliah::whereHas('dosen',function($query)
//     {
//     	$query->where('nama','like','%k%');
//     })->with('dosen')->groupBy('dosen_id')->get();
// }); 

// Route::get('/', function () 
// {
//     return \App\Dosen_Matakuliah::whereHas('dosen',function($query)
//     {
//     	$query->where('nama','like','%k%');
//     })
//     ->orWhereHas('matakuliah',function ($kueri)
//     {
//     	$kueri->where('title','like','%a%');
//     })
//     ->with('dosen')
//     ->groupBy('dosen_id')
//     ->get();
// }); 

// Route::get('/public', function () {
//     return ("Nama Saya : R.H. Kimebmen Simbolon");
// });
// Route::get('pengguna/{pengguna}', function ($pengguna) {
//     return ("Hallo World dari pengguna $pengguna");
// });
// Route::get('/',function (Illuminate\Http\Request $request)
// {
//     echo "ini adalah request method dari method get ". $request->nama;
// });


// Route::get('/',function ()
// {
//     echo Form::open(['url'=>'/']).
//          Form::label('nama').
//          Form::text('nama',null).
//          Form::submit('kirim').
//          Form::close();
// });
// Route::post('/',function (Request $request)
// {
//     echo "Hasil dari form input tadi nama : ".$request->nama;
// });


