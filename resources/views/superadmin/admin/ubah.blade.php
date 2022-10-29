@extends('layouts.admin')
@section('isi')

  <div class="container" style="position: relative;">
    
    <form method="POST" action="{{ route('akunpetugas.update',$datas->id) }}" enctype="multipart/form-data" >
        @csrf
        <input type="hidden" name="_method" value="PATCH">
           
       <div class="form-group">
            <label for="formGroupExampleInput">Name</label>
            <input type="text" class="form-control" id="formGroupExampleInput" name="name" value="{{ $datas->name }}">
        </div>
        <div class="form-group">
            <label for="formGroupExampleInput2">email</label>
            <input type="email" class="form-control" id="formGroupExampleInput2" name="email" value="{{  $datas->email }}">
        </div>
       

        <button style="background-color: #FF9106; border: unset" type="submit" class="btn btn-primary mt-4">Ubah</button>
          <button type="reset" class="btn btn-danger mt-4">Reset</button>
    </form>
  </div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

@endsection