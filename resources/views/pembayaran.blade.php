@extends('layouts.admin')
@section('isi')
<div class="col-xxl">
    <div class="card mb-4">
      <div class="card-header d-flex align-items-center justify-content-between">
        <h5 class="mb-0">List pembayaran</h5>
        {{-- <small class="text-muted float-end">Default label</small>    --}}
      </div>
      <div class="card-body">
       
            
     
        <div class="row mb-3">
            <label class="col-sm-2 col-form-label" for="basic-default-name">Nama motor: </label>
            
            <div class="col-sm-10">
                @foreach ($motor as $m )
            {{ $m->mtr->name }} ({{ $m->durasi }} minggu)
             @endforeach
        </div>
      
        <div class="row mb-3">
            <label class="col-sm-2 col-form-label" for="basic-default-name">motor yang di pesan: </label>
            
            <div class="col-sm-10">
              {{ $jmlh }}
        </div>
        <div class="row mb-3">
            <label class="col-sm-2 col-form-label" for="basic-default-name">Total harga: </label>
            
            <div class="col-sm-10">
                
              {{number_format($total, 0, '', '.') }}
        </div>
        <form action="{{ route('bayar',Auth::id()) }}" method="POST"  enctype="multipart/form-data" >
            @csrf
        
           @foreach ($motor2 as $m )
               
           <input type="hidden" name="userid" value="{{ $m->userid }}">
           <input type="hidden"  name="mtrid" value="{{ $m->mtrid }}"/>
           <input type="hidden"  name="durasi" value="{{ $m->durasi }}"/>
           @endforeach
          <div class="row mb-3">
            <label class="col-sm-2 col-form-label" for="basic-default-name">Masukan jumlah uang</label>
            <div class="col-sm-10">
              <input type="number" class="form-control" id="basic-default-name" name="total" placeholder="100.000"/>
            </div>
          </div>
          <div class="row mb-3">
            <label class="col-sm-2 col-form-label" for="basic-default-name">Metode pembayaran yang tersedia:</label>
            <div class="col-sm-10">
                <select class="form-select" id="exampleFormControlSelect1" name="metode_pembayaran" aria-label="Default select example">
                    
                       <option value="cash">Cash</option>
                    

                      
                     </select>
            </div>
          </div>
          

        
          <div class="row justify-content-end">
            <div class="col-sm-10">
              <button type="submit" class="btn btn-primary">Send</button>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
@endsection