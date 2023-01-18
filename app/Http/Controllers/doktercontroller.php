<?php

namespace App\Http\Controllers;

use App\Models\AnggotaModel;
use App\Models\doktermodel;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class doktercontroller extends Controller
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function readdokter()
    {
        $xx = new doktermodel();
        $dokter = $xx->ReadDokter();
        return view('dokter.datadokter', ['dokter' => $dokter]);
    }

    public function tambahdokter()
    {
        return view('dokter.tambahdokter');
    }

    public function simpandokter(Request $x)
    {
        $this->validate($x, [
            'id_dokter' => 'required|min:1|max:20',
            'nama_dokter' => 'required|min:1|max:200',
            'alamat_dokter' => 'required|min:1|max:20',
            'spesialis_dokter' => 'required|numeric',
        ]);
        $xx = new doktermodel();
        $xx->Simpandokter($x);
        return redirect('/dokter');
    }

}
