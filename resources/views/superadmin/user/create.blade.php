@extends('layouts.admin')
@section('isi')

  <div class="container" style="position: relative;">
    
    <form action="{{ route('akunuser.store') }}" method="post" enctype="multipart/form-data" >
        @csrf
        <div class="form-group">
            <label for="formGroupExampleInput">Name</label>
            <input type="text" class="form-control" id="formGroupExampleInput" name="name" value="{{ old('name') }}">
        </div>
        <div class="form-group">
            <label for="formGroupExampleInput2">email</label>
            <input type="email" class="form-control" id="formGroupExampleInput2" name="email" value="{{ old('email') }}">
        </div>
        <div class="form-group">
            <label for="formGroupExampleInput3">Password</label>
            <input type="password" class="form-control" id="formGroupExampleInput3  " name="password" value="{{ old('password') }}">
        </div>
      
            <input type="hidden" class="form-control" id="ProdID" name="level" value="1" required>
         <button style="background-color: #FF9106; border: unset" type="submit" class="btn btn-primary mt-4">Tambah</button>
         <button type="reset" class="btn btn-danger mt-4">Reset</button>
    </form>
  </div>

<!-- Optional JavaScript; choose one of the two! -->

<!-- Option 1: Bootstrap Bundle with Popper -->






<!-- Optional JavaScript; choose one of the two! -->

<!-- Option 1: Bootstrap Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

@endsection