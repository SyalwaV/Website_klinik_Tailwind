<?php

namespace App\Models;

use Illuminate\Support\Facades\DB;

use Illuminate\Database\Eloquent\Model;

class doktermodel extends Model
{
    public function Readdokter()
 {
    $dokter=DB::table('dokter')->get();
    return $dokter;
  }

  public function SimpanDokter($x)
  {
       $dokter=DB::table('dokter')->insert([
      'id_dokter'=>$x->kode,
      'nama_dokter'=>$x->nama,
      'alamat_dokter'=>$x->alamat,
      'spesialis_dokter'=>$x->spesialis,
]);
}

}

