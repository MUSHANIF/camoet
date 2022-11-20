<?php

namespace App\Http\Controllers;

use App\Models\transaksi;
use App\Models\validation;
use App\Models\cart;
use App\Models\motor;
use Redirect;
use Carbon\Carbon;
use App\Http\Requests\StoretransaksiRequest;
use App\Http\Requests\UpdatetransaksiRequest;
use Illuminate\Http\Request;    
use Auth;
class TransaksiController extends Controller
{
    public function keranjang(Request $request , $id)
    {
       

        $datas = validation::where('userid',  auth()->user()->id)->first();
        $motor =  cart::with(['user','mtr'])->where('userid', $id)->whereRelation('mtr', 'status' ,'Ada di gudang')->get();
        return view('keranjang',compact('datas','motor'));
       
    }
    public function tambah(Request $request , $id)
    {
        $data = cart::where('userid',$id)->where('mtrid',$request->mtrid )->first();
        if( $data){
            toastr()->error('sudah ada dikeranjang anda!', 'gagal');
            return Redirect::back();
        }else{
            $model = new cart;
            $model->userid = $request->userid;
            $model->jnsid = $request->jnsid;
            $model->mtrid = $request->mtrid;
            $model->durasi = $request->durasi;
            
            $model->save(); 
        }
        

        $datas = validation::where('userid',  auth()->user()->id)->first();
        $motor =  cart::with(['user','mtr'])->where('userid', $id)->get();
        toastr()->success('Berhasil di tambah ke keranjang anda!', 'Sukses');
        return redirect()->route('keranjang', Auth::id());
       
    }
    public function hapus($id)
    {
        $hapus = cart::find($id);
        $hapus->delete();
        toastr()->info('Berhasil di hapus!', 'Sukses');
        return redirect()->route('keranjang', Auth::id());
    }
    public function pembayaran($id)
    {
        $motor =  cart::with(['user','mtr'])->where('userid', $id)->get();
        $jmlh =  cart::with(['user','mtr'])->where('userid', $id)->count();
        $total =  motor::with([
            'mtr'])
        ->join('carts', 'carts.mtrid', '=', 'motors.id')
        ->where('carts.userid',Auth::id()) 
        ->sum('harga')   
        ;
       return view('pembayaran',compact('motor','jmlh','total'));
    }
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoretransaksiRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoretransaksiRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\transaksi  $transaksi
     * @return \Illuminate\Http\Response
     */
    public function show(transaksi $transaksi)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\transaksi  $transaksi
     * @return \Illuminate\Http\Response
     */
    public function edit(transaksi $transaksi)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdatetransaksiRequest  $request
     * @param  \App\Models\transaksi  $transaksi
     * @return \Illuminate\Http\Response
     */
    public function update(UpdatetransaksiRequest $request, transaksi $transaksi)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\transaksi  $transaksi
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $hapus = cart::find($id);
        $hapus->delete();
        toastr()->info('Berhasil di hapus!', 'Sukses');
        return redirect()->route('keranjang', Auth::id());
    }
}
