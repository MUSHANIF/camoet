@extends('layouts.admin')
@section('isi')

  <div class="container" style="position: relative;">
    
    <form method="POST" action="{{ route('produk.update',$datas->id) }}" enctype="multipart/form-data" >
        @csrf
        <input type="hidden" name="_method" value="PATCH">
           
      
        <div class="form-group">
            <label for="formGroupExampleInput">jenis</label>
            <input type="text" class="form-control" id="formGroupExampleInput" name="jenis" value="{{ $datas->jenis }}">
        </div>
     
        <button style="background-color: #FF9106; border: unset" type="submit" class="btn btn-primary mt-4">Ubah</button>
    </form>
  </div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
 
<script type="text/javascript">
    
$(document).ready(function (e) {


$('#images').change(function(){
            
    let reader = new FileReader();

    reader.onload = (e) => { 

    $('#preview-image-before-upload').attr('src', e.target.result); 
    }

    reader.readAsDataURL(this.files[0]); 

});

});

</script>
@endsection