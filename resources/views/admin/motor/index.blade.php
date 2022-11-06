@extends('layouts.admin')
@section('search')

<div class="navbar-nav align-items-center">
    <div class="nav-item d-flex align-items-center">
      <i class="bx bx-search fs-4 lh-0"></i>
      <form action="{{ url('motor') }}" method="GET">
      <input
        type="text"
        class="form-control border-0 shadow-none"
        placeholder="Search..."
        aria-label="Search..."
        name="cari"
      />
    </form>
    </div>
  </div>
@endsection
@section("button")
<a href="{{ route('motor.create') }}" class="btn btn-primary text-end">Tambah</a>
@endsection
@section('title')
<h1 class="mb-0 fw-bold">List villa</h1> 
@endsection
@section('isi')
<div class="card">
    <h5 class="card-header">Data motor</h5>
    <div class="table-responsive text-nowrap">
      <table class="table table-borderless text-center">
        <thead>
          <tr>
            <th>Images </th>
            <th>Name </th>
            <th>Jenis kendaraan</th>
            <th>Harga</th>
        
            <th>Plat nomor </th>
            <th>Status</th>
            
            <th>Action</th>
          </tr>
        </thead>
        @foreach ($datas as $key )
            
        
        <tbody>
          <tr>
            <td><img src="/assets/images/motor/{{ $key->image }}" style="height: 100px; width: 150px" /></td>
            <td><i class="fab fa-angular fa-lg text-danger me-3"></i> <strong>{{ $key->name }}</strong></td>
            <td>{{ $key->motor->name }}</td>
            <td>{{ $key->harga }}</td>
           
            <td>{{ $key->plat_nomor }}</td>
            <td>{{ $key->status }}</td>
            
            <td>
              <div class="dropdown">
                <button type="button" class="btn p-0 dropdown-toggle hide-arrow" data-bs-toggle="dropdown">
                  <i class="bx bx-dots-vertical-rounded"></i>
                </button>
                <div class="dropdown-menu">
                  <a class="dropdown-item" data-bs-toggle="offcanvas" href="#offcanvasExample" role="button" aria-controls="offcanvasExample">
                    <i class="bx bx-edit-alt me-1"></i>  Detail
                  </a>
                  <a class="dropdown-item" href="{{ route('motor.edit',$key->id) }}"
                    ><i class="bx bx-edit-alt me-1"></i> Edit</a>
                    
                  <form action="{{ url('motor/'.$key->id) }}" method="POST" >
                    @csrf
                    <input type="hidden" name="_method" value="DELETE">
                    <button type="submit" class="dropdown-item"><i class="bx bx-trash me-1"></i>Delete</button>
                    
                </form>
                
             
                
                
                  
                </div>
              </div>
            </td>
          </tr>
         
        </tbody>
        <div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasExample" aria-labelledby="offcanvasExampleLabel">
          <div class="offcanvas-header">
            <h5 class="offcanvas-title" id="offcanvasExampleLabel">Detail motor {{  $key->name }}</h5>
            <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
          </div>
          <div class="offcanvas-body">
            <div class="text-center mb-4">
              <a href="" data-bs-toggle="modal" data-bs-target="#exampleModal1"><img src="/assets/images/motor/{{ $key->image }}" style="height: 100px; width: 150px" /></a>
            </div>
            <div class="modal fade" id="exampleModal1" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
              <div class="modal-dialog modal-xl">
                 <div class="modal-content">
                    <div class="modal-header">
                       <h5 class="modal-title text-center justify-content-center" id="exampleModalLabel">Detail Foto</h5>
                       <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                       <img src="/assets/images/motor/{{ $key->image }}" style="height: 100%; width: 100%" />
                    </div>
                 </div>
              </div>
           </div>
            <div>
             <b>Nama motor: </b>
             <p>{{ $key->name }}</p>
            </div>
            <div>
              <b>Jenis motor: </b>
              <p>{{  $key->motor->name }}</p>
             </div>
             <div>
              <b>Plat motor: </b>
              <p>{{ $key->plat_nomor }}</p>
             </div>
             <div>
              <b>Deskripsi: </b>
              <p>{{ $key->deskripsi }}</p>
             </div>
          </div>
        </div>
        @endforeach
      </table>
    </div>
  </div>
    
@endsection