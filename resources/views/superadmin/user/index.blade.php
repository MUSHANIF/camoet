@extends('layouts.admin')
@section('search')

<div class="navbar-nav align-items-center">
    <div class="nav-item d-flex align-items-center">
      <i class="bx bx-search fs-4 lh-0"></i>
      <form action="{{ url('dataUser') }}" method="GET">
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
        <a href="" class="btn btn-primary text-white"
                >Tambah</a>
    </div>
</div>
@endsection
@section('title')
<h1 class="mb-0 fw-bold">List Akun User</h1> 
@endsection
@section('isi')
<div class="card">
    <h5 class="card-header">Data User</h5>
    <div class="table-responsive text-nowrap">
      <table class="table table-borderless text-center">
        <thead>
          <tr>
            <th>Name</th>
            <th>Email</th>
            <th>Level</th>
             <th>Action</th>
          
          </tr>
        </thead>
        @foreach ($datas as $key )
        <tbody>
          <tr>
           
            <td> <strong>{{ $key->name }}</strong></td>
            <td >{{ $key->email }}</td>
            <td >User</td>
            <td>
              
              <div class="dropdown">
                <button type="button" class="btn p-0 dropdown-toggle hide-arrow" data-bs-toggle="dropdown">
                  <i class="bx bx-dots-vertical-rounded"></i>
                </button>
                <div class="dropdown-menu">
                    
                    <a  id="detail" class="dropdown-item "   data-bs-toggle="offcanvas" href="#" data-bs-target="#offcanvasExample" role="button" aria-controls="offcanvasExample"
                    
                    data-name="{{ $key->name }}"
                    data-email="{{ $key->email  }}"
                    data-nik="{{ $key->nik  }}"
                    data-no_hp="{{ $key->no_hp  }}"
                    data-alamat="{{ $key->alamat  }}"
                 
                 
                    >
                    <i class="bx bx-edit-alt me-1"></i>  Detail User
                  </a>
                      <form action="{{ url('dataUser/'.$key->id) }}" method="POST" >
                        @csrf
                        <input type="hidden" name="_method" value="DELETE">
                        <button type="submit" class="dropdown-item"><i class="bx bx-trash me-1"></i>Delete</button>
                        
                    </form>
                  
                </div>
              </div>
            </td>
          

          </tr>
        </tbody>
    
    
        <div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasExample" aria-labelledby="offcanvasExampleLabel">
            <div class="offcanvas-header">
              <h5 class="offcanvas-title" id="offcanvasExampleLabel">Detail User </h5>
              <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
            </div>
            <div class="offcanvas-body">
              {{-- <div class="text-center mb-4">
                <a href="" data-bs-toggle="modal" id="motorDetails"  data-bs-target="#exampleModal1"><img src="" id="img" style="height: 100px; width: 150px" /></a>
              </div> --}}
              <div class="modal fade" id="exampleModal1" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-xl">
                   <div class="modal-content">
                      <div class="modal-header">
                         <h5 class="modal-title text-center justify-content-center" id="exampleModalLabel">Detail Foto</h5>
                         <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                      </div>
                      <div class="modal-body">
                         <img src="" id="img2" style="height: 100%; width: 100%" />
                      </div>
                   </div>
                </div>
             </div>
             <div id="motorDetails" class="modal-body" style="margin-bottom: 12px">
              <div>
                <b>Nama User: </b>
                <p><span id="name"></span></p>
               </div>
               <div>
                 <b>Email user: </b>
                 <p><span id="email"></span></p>
                </div>
                @if($data) 
                <div>
                  <b>Nik: </b>
                  <p><span id="nik"></span></p>
                 </div>
                <div>
                 <b>No hp: </b>
                 <p><span id="no_hp"></span></p>
                </div>
                <div>
                  <div>
                    <b>alamat: </b>
                    <p><span id="alamat"></span></p>
                   </div>
                   @endif
            </div>
          </div>
         
       
       <div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasExample" aria-labelledby="offcanvasExampleLabel">
        <div class="offcanvas-header">
          <h5 class="offcanvas-title" id="offcanvasExampleLabel">Detail User </h5>
          <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
        </div>
        <div class="offcanvas-body">
          {{-- <div class="text-center mb-4">
            <a href="" data-bs-toggle="modal" id="motorDetails"  data-bs-target="#exampleModal1"><img src="" id="img" style="height: 100px; width: 150px" /></a>
          </div> --}}
          <div class="modal fade" id="exampleModal1" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-xl">
               <div class="modal-content">
                  <div class="modal-header">
                     <h5 class="modal-title text-center justify-content-center" id="exampleModalLabel">Detail Foto</h5>
                     <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                  </div>
                  <div class="modal-body">
                     <img src="" id="img2" style="height: 100%; width: 100%" />
                  </div>
               </div>
            </div>
         </div>
         <div id="motorDetails" class="modal-body" style="margin-bottom: 12px">
            <div class="alert alert-danger" role="alert">User belum validasi!</div>
        </div>
      </div>
        
        @endforeach
      </table>
    </div>
  </div>

  <script>
    $(document).ready(function(){
         $(document).on('click', '#detail', function () {
        
       var name = $(this).data('name');
       var email = $(this).data('email');
       var nik = $(this).data('nik');
       var no_hp = $(this).data('no_hp');
       var alamat = $(this).data('alamat');
      
      
       
       
       $('#name').text(name);
       $('#email').text(email);
       $('#nik').text(nik);
       $('#no_hp').text(no_hp);
       $('#alamat').text(alamat);
       
       
      
       
    });
  });
</script>
@endsection