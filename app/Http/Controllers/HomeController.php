<?php

namespace App\Http\Controllers;
use App\Models\motor;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
        $datas = motor::all();
        return view('welcome',compact('datas'));
    }
}
