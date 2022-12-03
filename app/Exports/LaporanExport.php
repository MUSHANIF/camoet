<?php

namespace App\Exports;

use App\Models\cart;

use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\FromView;
class LaporanExport implements FromView
{
    /**
    
    */
    public function view(): View
    {
        return view('admin.laporan.excel', [
            'datas' =>  cart::with([
                'orang','mtr','user'])        
            ->where('status', 2)
            ->where('waktu_kembali', date('Y-m-d'))
            ->get()
        ]);
    }
}
