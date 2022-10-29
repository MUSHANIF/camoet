@extends('layouts.admin')
@section('search')

<div class="navbar-nav align-items-center">
    <div class="nav-item d-flex align-items-center">
      <i class="bx bx-search fs-4 lh-0"></i>
      <form action="{{ url('jnsmotor') }}" method="GET">
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
    <a href="{{ route('jnsmotor.create') }}" class="btn btn-primary text-end">Tambah</a>
@endsection
@section('title')
<h1 class="mb-0 fw-bold">List jenis villa</h1> 
@endsection
@section('isi')
<div class="card">
    <h5 class="card-header">Jenis motor</h5>
    <div class="table-responsive text-nowrap">
      <table class="table table-borderless">
        <thead>
          <tr>
            <th>Jenis</th>
            <th>Action</th>
          
          </tr>
        </thead>
        @foreach ($datas as $key )
        <tbody>
          <tr>
           
            <td><i class="fab fa-angular fa-lg text-danger me-3"></i> <strong>{{ $key->name }}</strong></td>
            <td>
              
              <div class="dropdown">
                <button type="button" class="btn p-0 dropdown-toggle hide-arrow" data-bs-toggle="dropdown">
                  <i class="bx bx-dots-vertical-rounded"></i>
                </button>
                <div class="dropdown-menu">
                  {{-- <a class="dropdown-item" href="{{ route('jnsmotor.edit',$key->id) }}"
                    ><i class="bx bx-edit-alt me-1"></i> Edit</a
                  > --}}
                  <form action="{{ url('jnsmotor/'.$key->id) }}" method="POST" >
                    @csrf
                    <input type="hidden" name="_method" value="DELETE">
                    <button type="submit" class="dropdown-item"><i class="bx bx-trash me-1"></i>Delete</button>
                    
                </form>
                  
                </div>
              </div>
            </td>
          

          </tr>
        </tbody>
        @endforeach
      </table>
    </div>
  </div>
    
@endsection