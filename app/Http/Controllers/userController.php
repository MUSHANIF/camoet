<?php

namespace App\Http\Controllers;
use App\Models\cart;
use App\Models\validation;
use App\Models\User;
use Illuminate\Http\Request;

class userController extends Controller
{
    public function data(Request $request)
    {
        $cari = $request->cari;
        
        $tanggal = date("Y-m-d");   
        // $data1 = User::where('level', 1)->get();
        // $data2 = User::get(['id']);
        // $data  = validation::where('userid',$data2)->first();
        // $data2 = $data5->userid;
        // $data3 = $data1->id;
        // $data6 = $data2 === $data3;
        $data =  User::with([
            'validationn'])
            ->Join('validations', 'validations.userid', '=', 'users.id')
            ->where('validations.userid','users.id')
            ->get();
        $datas =  User::with([
            'validationn'])
            ->leftJoin('validations', 'validations.userid', '=', 'users.id')
            ->where('name','like',"%".$cari."%")->Where('level' , 1)->get();
        return view('superadmin.user.index', compact('datas','data'));
    }

}
