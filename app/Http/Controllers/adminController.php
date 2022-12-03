<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Exports\LaporanExport;
use App\Models\cart;
use Maatwebsite\Excel\Facades\Excel;
use Illuminate\Support\Facades\DB;
use PDF;
use Illuminate\Support\Facades\Validator;
use App\Http\Requests\StoreadminRequest;
use App\Http\Requests\UpdateadminRequest;
use Illuminate\Http\Request;
class adminController extends Controller
{
    public function index(Request $request)
    {
        $cari = $request->cari;
        $datas =  User::where('name','like',"%".$cari."%")->orWhere('level' , 2)->get();
        return view('superadmin.admin.index', compact('datas'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
        return view('superadmin.admin.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreadminRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $request->all();
        $model = new User;
        $password = $request->password;
        $encrypted_password = bcrypt($password);
        $model->name = $request->name;
        $model->email = $request->email;
        $model->password = $encrypted_password;
        $model->level =  $request->level;
        

        $validasi = Validator::make($data, [
            'name' => 'required|max:255',
           
            'email' => 'required|email|unique:users',
            
            'password'=>'required|min:8',

        ]);
        if ($validasi->fails()) {
            return redirect()->route('dataadmin.create')->withInput()->withErrors($validasi);
        }
       
        $model->save();

        toastr()->success('Berhasil di buat!', 'Sukses');
        return redirect('/dataadmin');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\admin  $admin
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $datas = admin::find($id);
        return view("admin.admin.show",compact("datas"));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\admin  $admin
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $datas = User::find($id);
        
        return view('superadmin.admin.ubah',compact('datas'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateadminRequest  $request
     * @param  \App\Models\admin  $admin
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,  $id )
    {
        $data = $request->all();
        $model = User::findOrFail($id);

     
        $model->name = $request->name;
        $model->email = $request->email;

        

        $validasi = Validator::make($data, [
            'name' => 'required|max:255',
           
            'email' => 'required|email',
            
         
        ]);
       

      
        if ($validasi->fails()) {
            return redirect()->route('dataadmin.edit', $id)->withInput()->withErrors($validasi);
        }
      
        $model->save();

        toastr()->success('Berhasil di ubah!', 'Sukses');
        return redirect('/dataadmin');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\admin  $admin
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $hapus = admin::find($id);
        $hapus->delete();
        toastr()->info('Berhasil di hapus!', 'Sukses');
        return redirect('admin');
    }
    public function laporan(Request $request){
        $tgl = $request->tgl;
        

        if ($request->tgl) {
            $datas =  cart::with([
                'orang','mtr','user'])        
            ->where('status', 2)
            ->where('waktu_kembali', $tgl)
            ->get();
        } else {
            $datas =  cart::with([
                'orang','mtr','user'])        
            ->where('status', 2)
            ->where('waktu_kembali', date('Y-m-d'))
            ->get();
        }
        // $datas = cart::with([
        //     'orang','mtr','user'])        
        // ->where('status', 2)
        // ->get();
      
        return view('admin.laporan.index' , compact('datas','tgl'));
    }
    public function laporanbelum(){
        $datas = cart::with([
            'orang','mtr','user'])        
        ->where('status', 1)
        ->get();
      
        return view('admin.laporan.indexbelum' , compact('datas'));
    }
    public function pdf(){
        $tanggal = date("Y-m-d");
        $datas = cart::with([
            'orang','mtr','user'])        
        ->where('status', 2)
        ->where('waktu_kembali', date('Y-m-d'))
        ->get();
        // return view('admin.laporan.pdf', compact('datas','tanggal'));
            $pdf = PDF::loadview('admin.laporan.pdf', compact('datas','tanggal'));
            return $pdf->download('laporanpdf.pdf');
    }
      public function excel(){
      
        return Excel::download(new LaporanExport, 'laporantransaksi.xlsx');
      
    }
}
