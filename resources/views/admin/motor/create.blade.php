@extends('layouts.admin')
@section('isi')
<div class="col-xxl">
    <div class="card mb-4">
      <div class="card-header d-flex align-items-center justify-content-between">
        <h5 class="mb-0">Data motor baru</h5>
        {{-- <small class="text-muted float-end">Default label</small>    --}}
      </div>
      <div class="card-body">
        <form action="{{ route('motor.store') }}" method="POST"  enctype="multipart/form-data" >
            @csrf
            <div class="row mb-3">
                <label class="col-sm-2 col-form-label" for="basic-default-name">Jenis Motor</label>
                <div class="col-sm-10">
                    <select class="form-select" id="exampleFormControlSelect1" name="jnsid" aria-label="Default select example">
                     @foreach ($datas as $key )
                        <option value="{{ $key->id }}">{{ $key->name }}</option>
                     @endforeach

                       
                      </select>
                </div>
              </div>
          <div class="row mb-3">
            <label class="col-sm-2 col-form-label" for="basic-default-name">Name</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" id="basic-default-name" name="name" placeholder="Supra x 125" value="{{ old('name') }}" />
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
                value="{{ old('harga') }}"
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
                value="{{ old('plat_nomor') }}"
                aria-describedby="basic-default-phone"
              />
            </div>
          </div>
          <div class="row mb-3">
            <label class="col-sm-2 col-form-label" for="basic-default-phone">Image</label>
            <div class="col-sm-10">
                <input class="form-control" type="file" id="image" name="image" value="{{ old('image') }}" />
                <img id="preview-image-before-upload" src="" alt="" style="width: 250px" class="mt-3" />
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
              >{{ old('deskripsi') }}</textarea>
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

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

@endsection