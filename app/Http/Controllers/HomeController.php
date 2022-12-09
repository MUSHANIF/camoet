<?php

namespace App\Http\Controllers;
use App\Models\motor;
use App\Models\transaksi;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Auth;
use Illuminate\Support\Facades\Http;

class HomeController extends Controller
{
    public function index(){
        $datas = motor::where('status','Ada di gudang')->get();
        $user = Auth::id();
        $motor =  motor::count();
        $transaksi =  transaksi::count();
        $tanggap = DB::table('tanggapans')->join('users','users.id','tanggapans.userid')->get();
         $json = Http::get('https://newsapi.org/v2/top-headlines?country=id&apiKey=c6f664254c6b4a2c8991e7ad94bf7d0b');
      $api = json_decode($json, TRUE);
        return view('welcome',compact('datas','api','user','motor','transaksi','tanggap'));
    }
}
