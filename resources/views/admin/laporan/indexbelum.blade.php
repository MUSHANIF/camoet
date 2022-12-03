@extends('layouts.admin')
{{-- @section("button")

    

    <div class="text-end upgrade-btn">
        <a href="/laporanexcel" class="btn btn-success text-white"
              
                >Download EXCEL</a>
    
    
        <a href="/laporanpdf" class="btn btn-danger text-white"
                >Download PDF</a>
  
            </div>
         
            
               
            
@endsection
@section('button2')
<div class=" text-right float-end">
    <a id="detail" href="/laporan" class="btn btn-primary text-white"
       
            >Laporan sudah di kembalikan</a>
</div> --}}
@endsection
@section('isi')
<div class="card">
    <h5 class="card-header h">laporan yang Belum di kembalikan</h5>
    <div class="table-responsive text-nowrap">
      <table class="table table-borderless">
        <thead>
            <tr>
              <th>Image</th>
              <th>Nama motor</th>
              <th>Nama user</th>
              <th>Nik</th>
              <th>Batas waktu</th>
              <th>Status</th>
              
              
            
            </tr>
          </thead>
         @foreach ($datas as $key )
             
      
          <tbody>
            <tr>

              <td ><img id="img" src="/assets/images/motor/{{ $key->mtr->image }}" style="height: 100px; width: 150px" /></td>
              <td> <strong><span id="motor">{{ $key->mtr->name }}</span></strong></td>
              <td ><span id="user">{{ $key->user->name }}</span></td>
              <td ><span id="durasi">{{ $key->orang->nik  }}</span></td>
              <td ><span id="waktu">{{ $key->waktu }}</span></td>
              
           
              <td><span id="kata" class="badge bg-label-danger me-1">Belum di kembalikan</span></td>
            
         
              
            </tr>
          </tbody>
          @endforeach
      </table>
    </div>
  </div>
  {{-- <script>
    $(document).ready(function(){
        
         $(document).on('click', '#detail', function () {
        var image = $(this).data('image'); 
       var user = $(this).data('user');
       var motor = $(this).data('motor');
       var email = $(this).data('email');
       var nik = $(this).data('nik');
       var durasi = $(this).data('durasi');
       var waktu = $(this).data('waktu');
       var status = $(this).data('status');
      
      
       
       $('#img').attr('src',image);
       $('#motor').text(motor);
       $('#user').text(user);
       $('#email').text(email);
       $('#nik').text(nik);
       $('#waktu').text(waktu);
       $('#durasi').text(nik);
       $('#kata').text('belum di kembalikan');
       $('#kata').attr('class','badge bg-label-danger me-1');
       $('#detail').hide(slow);
       $('.h').html('laporan yang belum di kembalikan');
       
       
      

       
      
       
    });
  });
</script> --}}
@endsection