<?php

namespace App\Http\Controllers;

use App\Models\motor;
use App\Models\jnsmotor;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;
use App\Http\Requests\StoremotorRequest;
use App\Http\Requests\UpdatemotorRequest;
use Illuminate\Http\Request;
class MotorController extends Controller
{
    public function index(Request $request)
    {
        $cari = $request->cari;
        $datas =  motor::with(['motor'])->where('name','like',"%".$cari."%")->get();
        return view('admin.motor.index', compact('datas'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $datas =  DB::table('jnsmotors')->get();
        return view('admin.motor.create', compact('datas'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StorejnsvillaRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $request->all();
        $model = new motor;
      
        $model->jnsid = $request->jnsid;
        $model->name = $request->name;
        $model->harga = $request->harga;
        $model->status = $request->status;
        $model->plat_nomor = $request->plat_nomor;
        $model->image = $request->image;
        $model->deskripsi = $request->deskripsi;
        if ($image = $request->file('image')) {
            $destinationPath = 'assets/images/motor';
            $profileImage = date('YmdHis') . "." . $image->getClientOriginalExtension();
            $image->move($destinationPath, $profileImage);
            $model['image'] = "$profileImage";
        }


        $validasi = Validator::make($data, [
            'name' => 'required|max:255|unique:motors',
           
            'harga' => 'required|max:15',
            'status' => 'required|max:15',
          
            'plat_nomor' => 'required',
            'deskripsi' => 'required|max:255',

        ]);
        if ($validasi->fails()) {
            return redirect()->route('motor.create')->withInput()->withErrors($validasi);
        }
       
        $model->save();

        toastr()->success('Berhasil di buat!', 'Sukses');
        return redirect('/motor');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\jnsvilla  $jnsvilla
     * @return \Illuminate\Http\Response
     */
    public function show(jnsvilla $jnsvilla)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\jnsvilla  $jnsvilla
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $datas = jnsvilla::find($id);
        return view('petugas.motor.ubah',compact('datas'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdatejnsvillaRequest  $request
     * @param  \App\Models\jnsvilla  $jnsvilla
     * @return \Illuminate\Http\Response
     */
    public function update(UpdatejnsvillaRequest $request, jnsvilla $jnsvilla)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\jnsvilla  $jnsvilla
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $hapus = motor::find($id);
        $hapus->delete();
        toastr()->info('Berhasil di hapus!', 'Sukses');
        return redirect('motor');
    }
}
