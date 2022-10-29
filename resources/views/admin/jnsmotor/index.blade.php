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
<div class="col-6">
    <div class="text-end upgrade-btn">
        <a href="{{ route('jnsmotor.create') }}" class="btn btn-primary text-white"
                >Tambah</a>
    </div>
</div>
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
                  <a class="dropdown-item" href="javascript:void(0);"
                    ><i class="bx bx-edit-alt me-1"></i> Edit</a
                  >
                  <a class="dropdown-item" href="javascript:void(0);"
                    ><i class="bx bx-trash me-1"></i> Delete</a
                  >
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