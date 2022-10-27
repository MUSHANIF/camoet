<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
class dashboardController extends Controller
{
    public function index() {
        return view('dashboard',[
            
            'user' => User::where('level','=', 1)->count(),
            'admin' => User::where('level', '=', 2)->count(),
           
        ]);
    }
}
