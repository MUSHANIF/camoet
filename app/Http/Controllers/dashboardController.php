<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\cart;
use App\Models\motor;
use App\Models\jnsmotor;
use Illuminate\Support\Facades\Http;
use Auth;

class dashboardController extends Controller
{
    public function index(Request $request) {
        return view('dashboard',[
            
            'user' => User::where('level','=', 1)->count(),
            'admin' => User::where('level', '=', 2)->count(),
            'motor' => motor::where('status', '=', 'Ada di gudang')->count(),
            'motorpake' => motor::where('status', '=', 'Sedang di pakai')->count(),
            'jenis' => jnsmotor::where('name', '=', 'matic')->count(),
            'keranjang' => cart::where('userid', '=', auth()->user()->id)->where('status',0)->count(),
           
        ]);
    }
    public function search(Request $request) {
        $cari = $request->search;
        $datas =  motor::with(['motor'])->where('name','like',"%".$cari."%")->where('status','Ada di gudang')->get();
        $datas2 = motor::with(['motor'])->where('status','Ada di gudang')->get();
        if($request->ajax()){
            $data = ' ';
        
       
        
       
     
       
          
                    
            if($datas != ''){
                foreach($datas as $key){
                    $data .='
                    <div class="col-md-4">
                        
                                
                            
                    <div class="car-wrap rounded ftco-animate">
                        
                        <div class="text">
                            <h2 class="mb-0"><a href="#">'.$key->name.'</a></h2>
                            <div class="d-flex mb-3">
                                    
                                <p class="price ml-auto">'.$key->harga.' <span>/day</span></p>
                            </div>
                            <div class="d-flex mb-3">
                                <span class="cat">'.$key->deskripsi.'</span>
                            
                            </div>
                            <p class="d-flex mb-0 d-block">
                            <a id="pesan" class="btn btn-primary py-2 ml-1  " data-bs-toggle="modal" data-bs-target="#exampleModal"
                            data-userid="'.Auth::id().'"
                            data-jnsid="'.$key->motor->id.'"
                            data-mtrid="'.$key->id.'"
                            >
                                Pesan 
                            </a>
                        
                            <a id="detail" class="btn btn-secondary py-2 ml-1" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasRight" aria-controls="offcanvasRight"
                                    data-image="/assets/images/motor/'.$key->image.'"
                                    data-name="'.$key->name.'"
                                    data-jenis="'.$key->motor->name .'"
                                    data-harga="'.$key->harga .'"
                                    data-plat="'.$key->plat_nomor .'"
                                    data-warna="'.$key->warna .'"
                                    data-status="'.$key->status .'"
                                    data-des="'.$key->deskripsi .'"
                                    >Details</a>
                                
                            
                            
                            </p>
            
                
                        </div>
                    </div>
                
                </div>
                    ';
                }
                return response($data);
            }else{
                $datas =  motor::with(['motor'])->where('name','like',"%".$cari."%")->where('status','Ada di gudang')->get();
            }
}
            $datas =  motor::with(['motor'])->where('name','like',"%".$cari."%")->where('status','Ada di gudang')->get();
           
            return view('motor',compact('datas','datas2'));
    }
    public function cari(){
        $datas2 = motor::with(['motor'])->where('status','Ada di gudang')->get();
        $data = [];
        foreach ($datas2 as $i) {
            $data[] = $i['name'];
        }
        return response($data);
    }

}
