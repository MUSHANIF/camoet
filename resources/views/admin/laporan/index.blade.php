@extends('layouts.admin')
@section("button")

    

    <div class="text-end upgrade-btn">
        <a href="/laporanexcel" class="btn btn-success text-white"
              
                >Download EXCEL</a>
    
    
        <a href="/laporanpdf" class="btn btn-danger text-white"
                >Download PDF data hari ini</a>
  
            </div>
         
            
               
            
@endsection
@section('button2')
<div class=" text-right float-end">
    <a id="detail" href="/laporanbelum" class="btn btn-primary text-white"
       
            >Laporan belum di kembalikan hari ini </a>
</div>
@endsection
@section('isi')
<div class="card mt-2">
    <h5 class="card-header h">laporan yang sudah di kembalikan</h5>
   
    
      <div class="row  card-header  float-end ">

      
        <div class="col-md-10 lg-10 sm-2   mb-2 text-right float-end">
          <form action="{{ route('laporan') }}" method="GET">
            @csrf
            <input class="form-control" type="date" name="tgl" value="{{ old('tgl') }}" id="html5-date-input" />
          </div>
          <div class="col-md-2 sm-2 text-right float-end">
            <button type="submit" class="btn btn-icon btn-primary">
              <span class="tf-icons bx bx-pie-chart-alt"></span>
            </button>
          </div>
        </div>
       
      
      

 
 
  
</form>

      <table class="table table-borderless">
        <thead>
            <tr>
              <th>Image</th>
              <th>Nama motor</th>
              <th>Nama user</th>
              <th>Nik</th>
              <th>Batas waktu</th>
              <th>Waktu Kembali</th>
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
              <td ><span id="waktu">{{ $key->waktu_kembali }}</span></td>
              
           
              <td><span id="kata" class="badge bg-label-success me-1">Sudah di kembalikan</span></td>
            
         
              
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