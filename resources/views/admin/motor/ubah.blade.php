@extends('layouts.admin')
@section('isi')
    <div class="col-xxl">
    <div class="card mb-4">
      <div class="card-header d-flex align-items-center justify-content-between">
        <h5 class="mb-0">ubah motor baru</h5>
        {{-- <small class="text-muted float-end">Default label</small>    --}}
      </div>
      <div class="card-body">
        <form action="{{ route('motor.update',$datas->id) }}" method="POST"  enctype="multipart/form-data" >
          @csrf
          <input type="hidden" name="_method" value="PATCH">
            <div class="row mb-3">
                <label class="col-sm-2 col-form-label" for="basic-default-name">Jenis Motor</label>
                <div class="col-sm-10">
                    <select class="form-select" id="exampleFormControlSelect1" name="jnsid" aria-label="Default select example">
                     @foreach ($datas1 as $key )
                        <option value="{{ $key->id }}">{{ $key->name }}</option>
                     @endforeach

                       
                      </select>
                </div>
              </div>
          <div class="row mb-3">
            <label class="col-sm-2 col-form-label" for="basic-default-name">Name</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" id="basic-default-name" name="name" placeholder="Supra x 125" value="{{ $datas->name }}" />
            </div>
          </div>
          <div class="row mb-3">
            <label class="col-sm-2 col-form-label" for="basic-default-name">Warna</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" id="basic-default-name" name="warna" placeholder="Merah" value="{{ $datas->warna }}" />
            </div>
          </div>
          <div class="row mb-3">
            <label class="col-sm-2 col-form-label" for="basic-default-company">Harga</label>
            <div class="col-sm-10">
              <input
                type="number"
                class="form-control"
                id="basic-default-company"
                placeholder="100.000"
                name="harga"
                value="{{ $datas->harga }}"
              />
            </div>
          </div>
          <div class="row mb-3">
            <label class="col-sm-2 col-form-label" for="basic-default-email">Stok</label>
            <div class="col-sm-10">
              <div class="input-group input-group-merge">
              <select class="form-select" id="exampleFormControlSelect1" name="status" aria-label="Default select example">
                        <option value="Ada di gudang">Ada di gudang</option>
                        <option value="Sedang di pakai">Sedang di pakai</option>
                        
                      
                     

                       
                      </select>
                
              </div>
            
            </div>
          </div>
          <div class="row mb-3">
            <label class="col-sm-2 col-form-label" for="basic-default-phone">Plat Nomor</label>
            <div class="col-sm-10">
              <input
                type="text"
                id="basic-default-phone"
                class="form-control phone-mask"
                placeholder="B 3383 KMV"
                aria-label="658 799 8941"
                name="plat_nomor"
                value="{{ $datas->plat_nomor }}"
                aria-describedby="basic-default-phone"
              />
            </div>
          </div>
          <div class="row mb-3">
            <label class="col-sm-2 col-form-label" for="basic-default-phone">Image</label>
            <div class="col-sm-10">
                <input class="form-control" type="file" id="images" name="image" value="{{ $datas->image }}" />
                <img id="preview-image-before-upload" src="/assets/images/motor/{{ $datas->image }}" alt="" style="width: 250px" class="mt-3"  />
            </div>
          </div>
          <div class="row mb-3">
            <label class="col-sm-2 col-form-label" for="basic-default-message">Deskripsi</label>
            <div class="col-sm-10">
              <textarea
                id="basic-default-message"
                class="form-control"
                placeholder="Motor ini sangat nyaman dan bagus untuk di pakai oleh kalangan anak muda"
                aria-label="Hi, Do you have a moment to talk Joe?"
                aria-describedby="basic-icon-default-message2"
                name="deskripsi"
              >{{ $datas->name }}</textarea>
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