<?php

namespace App\Http\Controllers;

use App\Models\jnsmotor;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;
use App\Models\User;
use App\Http\Requests\StorejnsmotorRequest;
use App\Http\Requests\UpdatejnsmotorRequest;
use Illuminate\Http\Request;
class JnsmotorController extends Controller
{
        /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $cari = $request->cari;
        $datas =  jnsmotor::where('name','like',"%".$cari."%")->get();
        return view('admin.jnsmotor.index', compact('datas'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response 
     */
    public function create()
    {
        $datas =  DB::table('jnsmotors')->get();
        return view('admin.jnsmotor.create', compact('datas'));
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
        $model = new jnsmotor;
      
        $model->name = $request->name;
        $validasi = Validator::make($data, [
            'name' => 'required|max:191|unique:jnsmotors',
        ]);
        if ($validasi->fails()) {
            return redirect()->route('jnsmotor.create')->withInput()->withErrors($validasi);
        }
       
        $model->save();

        toastr()->success('Berhasil di buat!', 'Sukses');
        return redirect('/jnsmotor');
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
        return view('petugas.jnsvilla.ubah',compact('datas'));
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
        $hapus = jnsmotor::find($id);
        $hapus->delete();
        toastr()->info('Berhasil di hapus!', 'Sukses');
        return redirect('jnsmotor');
    }

}
