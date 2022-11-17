<?php

namespace App\Http\Controllers;
use App\Models\validation;
use Redirect;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;
class validationController extends Controller
{
    public function index(Request $request){
        $data = $request->all();
        $model = new validation;
      
        $model->userid = $request->userid;
        $model->nik = $request->nik;
        $model->no_hp = $request->no_hp;
        $model->alamat = $request->alamat;
     
     


        $validasi = Validator::make($data, [
            'nik' => 'required|max:16|unique:validations',
           
            'no_hp' => 'required|max:15',
            'alamat' => 'required|max:30',
          
     

        ]);
        if ($validasi->fails()) {
            return Redirect::back()->withInput()->withErrors($validasi);
        }
       
        $model->save();

        toastr()->success('Berhasil di buat!', 'Sukses');
        return Redirect::back();
    }
}
