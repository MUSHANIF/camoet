@extends('layouts.admin')
@section('isi')
<div class="card mb-4">
    <h5 class="card-header">Change Password</h5>
    <!-- Account -->
    {{-- <div class="card-body">
      <div class="d-flex align-items-start align-items-sm-center gap-4">
        @if (Auth::user()->image  == NULL)
        <img
        src="/assets/img/avatars/1.png"
        alt="user-avatar"
        class="d-block rounded"
        height="100"
        width="100"
        id="preview-image-before-upload"
      />
        @else
        <img
        src="/assets/img/avatars/{{ $datas->image }}"
        alt="user-avatar"
        class="d-block rounded"
        height="100"
        width="100"
        id="preview-image-before-upload"
      />
        @endif
        
        <form action="{{ route('profile.update',$datas->id) }}" method="POST"   id="formAccountSettings" enctype="multipart/form-data"  >
          @csrf
        <div class="button-wrapper">
          <label for="upload" class="btn btn-primary me-2 mb-4" tabindex="0">
            <span class="d-none d-sm-block">Upload new photo</span>
            <i class="bx bx-upload d-block d-sm-none"></i>
            <input
              type="file"
              id="upload"
              class="account-file-input"
              hidden
              accept="image/png, image/jpeg"
              name="image"
            />
          </label>
        

          
        </div>
      </div>
    </div> --}}
    <hr class="my-0" />
    <div class="card-body">
        <form action="{{ route('updatepw',$datas->id) }}" method="POST"   id="formAccountSettings"   >
            @csrf
        <div class="row">
          <div class="mb-3 col-md-12">
            <label for="lastName" class="form-label">Old Password</label>
            <input class="form-control" type="password" name="old" id="lastName"  placeholder="Old password" />
          </div>
          
          <div class="mb-3 col-md-12">
            <label for="email" class="form-label">New Password</label>
            <input
              class="form-control"
              type="password"
              id="email"
              name="new"
              {{-- value="{{ $datas->email }}" --}}
              placeholder="New password"
              required
            />
          </div>
          <div class="mb-3 col-md-12">
            <label for="lastName" class="form-label">Confirm Password</label>
            <input class="form-control" type="password" name="confirm" id="lastName"  placeholder="Confirm password" />
          </div>
     
         
        </div>
        <div class="mt-2">
          <button type="submit" class="btn btn-primary me-2">Save changes</button>
          <button type="reset" class="btn btn-outline-secondary">Cancel</button>
        </div>
      </form>
    </div>
    <!-- /Account -->
  </div>
@endsection