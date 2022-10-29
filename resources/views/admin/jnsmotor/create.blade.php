@extends('layouts.admin')
@section('isi')

<div class="col-xxl">
  <div class="card mb-4">
    <div class="card-header d-flex align-items-center justify-content-between">
      <h5 class="mb-0">Jenis motor</h5>
      {{-- <small class="text-muted float-end">Default label</small> --}}
    </div>
    <div class="card-body">
      <form action="{{ route('jnsmotor.store') }}" method="POST">
        @csrf
      
        <div class="row mb-3">
          <label class="col-sm-2 col-form-label" for="basic-default-company">Jenis Motor</label>
          <div class="col-sm-10">
            <input
              type="text"
              class="form-control"
              id="basic-default-company"
              placeholder="Matic"
              name="name"
            />
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

<!-- Optional JavaScript; choose one of the two! -->

<!-- Option 1: Bootstrap Bundle with Popper -->






<!-- Optional JavaScript; choose one of the two! -->

<!-- Option 1: Bootstrap Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

@endsection