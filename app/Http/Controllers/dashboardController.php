<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\motor;
use App\Models\jnsmotor;

class dashboardController extends Controller
{
    public function index(Request $request) {
        return view('dashboard',[
            
            'user' => User::where('level','=', 1)->count(),
            'admin' => User::where('level', '=', 2)->count(),
            'motor' => motor::where('status', '=', 'Ada di gudang')->count(),
            'motorpake' => motor::where('status', '=', 'Sedang di pakai')->count(),
            'jenis' => jnsmotor::where('name', '=', 'matic')->count(),
           
        ]);
    }
    public function list(Request $request) {
        $cari = $request->cari;
        $datas =  motor::with(['motor'])->where('name','like',"%".$cari."%")->get();
        return view('motor',compact('datas'));
    }
}
