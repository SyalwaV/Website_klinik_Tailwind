<?php

namespace App\Models;


use Illuminate\Support\Facades\DB;

use Illuminate\Database\Eloquent\Model;

class pasienmodel extends Model
{

    public function Readpasien()
    {
       $pasien=DB::table('pasien')->get();
       return $pasien;
     }
   
     public function SimpanPasien($x)
     {
          $pasien=DB::table('pasien')->insert([
         'id_pasien'=>$x->kode,
         'nama_pasien'=>$x->nama,
         'alamat_pasien'=>$x->alamat,
         'tanggal_datang'=>$x->tanggal,
         'keluhan_pasien'=>$x->keluhan,
         'id_dokter'=>$x->kode,
   ]);
   }
}
