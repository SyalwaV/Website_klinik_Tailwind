<?php

namespace App\Http\Controllers;

use App\Models\AnggotaModel;
use App\Models\doktermodel;
use App\Models\pasienmodel;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class pasiencontroller extends Controller
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function readpasien()
    {
        $xx = new pasienmodel();
        $pasien = $xx->ReadPasien();
        return view('pasien.datapasien', ['pasien' => $pasien]);
    }
}
