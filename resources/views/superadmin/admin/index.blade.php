@extends('layouts.admin')
@section('search')

<li class="nav-item search-box"> <a class="nav-link waves-effect waves-dark"
    href="javascript:void(0)"><i class="mdi mdi-magnify me-1"></i> <span class="font-16">Search</span></a>
<form action="{{ url('akunpetugas') }}" method="GET" class="app-search position-absolute">
    <input type="text" class="form-control" name="cari" placeholder="Search &amp; enter"> <a
        class="srh-btn"><i class="mdi mdi-window-close"></i></a>
</form>
</li>
</form>
@endsection
@section("button")
<div class="col-6">
    <div class="text-end upgrade-btn">
        <a href="{{ route('akunpetugas.create') }}" class="btn btn-primary text-white"
                >Tambah</a>
    </div>
</div>
@endsection
@section('title')
<h1 class="mb-0 fw-bold">List Akun admin</h1> 
@endsection
@section('isi')
<div class="container">
    @if ($datas->isNotEmpty())
   
    <table class="table mt-3" cellpadding="10" cellspace="0">
        <thead class="align-self-center text-center">
            <th>Name</th>
            <th>Email</th>
            <th>Level</th>
             <th>Action</th>
           
            
        </thead>
       
        @foreach ($datas as $key) 
        <tbody>
            <tr class="align-self-center text-center"  style="border: 1px solid black;">
              
                <td data-label="Name">{{ $key->name }}</td>
                <td data-label="Email">{{ $key->email }}</td>

                <td data-label="Level">Petugas</td>
               
                 <td class="text-center justify-content-center align-self-center d-flex">
                    
                    <a class="btn btn-info" href="{{ route('akunpetugas.edit',$key->id)}}">Ubah</a>
                    <form action="{{ url('akunpetugas/'.$key->id) }}" method="POST" >
                        @csrf
                        <input type="hidden" name="_method" value="DELETE">
                        <button type="submit" class="btn btn-danger ms-2">Delete</button>
                    </form>
                </td>
            
            </tr>
        </tbody>
        @endforeach
       

    </table>
    @else
    <div id="error">
        <div class="container text-center">
        <div class="pt-8">
            <h1 class="errors-titles">404</h1>
            <p>Data Kosong,tidak ada villa!</p>
           
          </div>
        </div>
    </div>
          @endif
</div>
    
@endsection