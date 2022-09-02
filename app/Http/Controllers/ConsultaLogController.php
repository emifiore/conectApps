<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Models\Post;
use Illuminate\Support\Facades\Route;

class ConsultaLogController extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function list(Request $request)
    {
        $nombreRuta = storage_path()."\logs\query.log";
        if(file_exists($nombreRuta)){
            $file = file_get_contents($nombreRuta);
        }else{
            $file = "No existe archivo de log.";
        }
        return view('ConsultaLog', ['file' => $file]);
         
    }
}
