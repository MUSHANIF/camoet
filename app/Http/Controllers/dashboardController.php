<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\motor;
use App\Models\jnsmotor;
class dashboardController extends Controller
{
    public function index() {
        return view('dashboard',[
            
            'user' => User::where('level','=', 1)->count(),
            'admin' => User::where('level', '=', 2)->count(),
            'motor' => motor::where('status', '=', 'Ada di gudang')->count(),
            'motorpake' => motor::where('status', '=', 'Sedang di pakai')->count(),
            'jenis' => jnsmotor::where('name', '=', 'matic')->count(),
           
        ]);
    }
}
