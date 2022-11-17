@extends("layouts.admin")
@section('isi')
@if (empty($datas))
<div class="col-xxl">
    <div class="card mb-4">
      <div class="card-header d-flex align-items-center justify-content-between">
        <h5 class="mb-0">Mohon isi data lengkap anda terlebih dahulu</h5>
        {{-- <small class="text-muted float-end">Default label</small>    --}}
      </div>
      <div class="card-body">
        <form action="{{ route('validation') }}" method="POST"  enctype="multipart/form-data" >
            @csrf
           <input type="hidden" name="userid" value="{{ Auth::user()->id }}">
          <div class="row mb-3">
            <label class="col-sm-2 col-form-label" for="basic-default-name">Name</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" id="basic-default-name" name="name" value="{{ Auth::user()->name  }}" />
            </div>
          </div>
          <div class="row mb-3">
            <label class="col-sm-2 col-form-label" for="basic-default-name">Email</label>
            <div class="col-sm-10">
              <input type="email" class="form-control" id="basic-default-name" name="email"  value="{{ Auth::user()->email  }}" />
            </div>
          </div>
          <div class="row mb-3">
            <label class="col-sm-2 col-form-label" for="basic-default-name">Nik</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" id="basic-default-name" name="nik" placeholder="5175070103530" value="{{ old('nik') }}" />
            </div>
          </div>
          <div class="row mb-3">
            <label class="col-sm-2 col-form-label" for="basic-default-name">No hp</label>
            <div class="col-sm-10">
              <input type="number" class="form-control" id="basic-default-name" name="no_hp" placeholder="0895617036426" value="{{ old('no_hp') }}" />
            </div>
          </div>
          <div class="row mb-3">
            <label class="col-sm-2 col-form-label" for="basic-default-name">Alamat</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" id="basic-default-name" name="alamat" placeholder="Jl pondok cipta raya,tebet" value="{{ old('alamat') }}" />
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

    @else
    <h1>udah ada datanya</h1>
    @endif
@endsection