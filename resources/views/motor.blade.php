<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Remot | listmotor</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <link href="https://fonts.googleapis.com/css?family=Poppins:200,300,400,500,600,700,800&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="css/open-iconic-bootstrap.min.css">
    <link rel="stylesheet" href="css/animate.css">
    
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
    <link rel="stylesheet" href="css/magnific-popup.css">

    <link rel="stylesheet" href="css/aos.css">
    <link rel="stylesheet" href="//code.jquery.com/ui/1.13.2/themes/base/jquery-ui.css">
    
   
  
  

    <link rel="stylesheet" href="css/ionicons.min.css">

    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.min.js"></script>
    <link rel="stylesheet" href="css/bootstrap-datepicker.css">
    <link rel="stylesheet" href="css/jquery.timepicker.css">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link rel="stylesheet" href="css/flaticon.css">
    <link rel="stylesheet" href="css/icomoon.css">
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script> 
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
    <style>
      @import url("https://fonts.googleapis.com/css2?family=Poppins:weight@100;200;300;400;500;600;700;800&display=swap");


body{
 background-color:#eee;
 font-family: "Poppins", sans-serif;
 font-weight: 300;
}

.height{
 height: 100vh;
}


.search{
position: relative;
box-shadow: 0 0 40px rgba(51, 51, 51, .1);
  
}

.search input{

 height: 60px;
 text-indent: 25px;
 border: 2px solid #d6d4d4;


}


.search input:focus{

 box-shadow: none;
 border: 2px solid blue;


}

.search .fa-search{

 position: absolute;
 top: 15px;
 left: 16px;

}

.search button{

 position: absolute;
 top: 5px;
 right: 5px;
 height: 40px;
 width: 90px;
 background: blue;

}
    </style>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="css/style.css">
  </head>
  <body>
    
    @include('partials.navbar')
    <!-- END nav -->
    
    <section class="hero-wrap hero-wrap-2 js-fullheight" style="background-image: url('images/bg_3.jpg');" data-stellar-background-ratio="0.5">
      <div class="overlay"></div>
      
      <div class="container">
       

        <div class="row height d-flex justify-content-center align-items-center">

          <div class="col-md-12">
          <form action="{{ url('listmotor') }}" method="GET">
              @csrf
            <div class="search">
              <i class="fa fa-search"></i>
              <input type="search" name="search" list="datalistOptions" id="exampleDataList" value="{{ request('search') }}" id="search" class="form-control" placeholder="Cari kendaraan yang anda inginkan , sekarang!">
              <datalist id="datalistOptions">
                @foreach ($datas2 as $o )
                  <option value="{{ $o->name }}">
                @endforeach
                
               
              </datalist>
              <button class="btn btn-primary">Search</button>
            </div>
            
          </div>
        </form>
        </div>
      
        <div class="row no-gutters slider-text  ">
         
          <div class="col-md-9 ftco-animate ">
          	
            <h1 class="mb-3 bread">Pilih motor anda!</h1>
          </div>
        </div>
      </div>
    </section>
		

		<section class="ftco-section bg-light">
    	<div class="container">
        <div class="row mycard m-2 p-2" id="mycard" >
                              
          @foreach ($datas as $key )
          <div class="col-md-4" >
                        
                                
                            
            <div class="car-wrap rounded ftco-animate">
                <div class="img rounded d-flex align-items-end">
                    <img src="/assets/images/motor/{{ $key->image }}" style="height: 100%; width: 100%"   alt="">
                </div>
                <div class="text">
                    <h2 class="mb-0"><a href="#">{{ $key->name }}</a></h2>
                    <div class="d-flex mb-3">
                            
                        <p class="price ml-auto">{{ $key->harga }}<span>/day</span></p>
                    </div>
                    <div class="d-flex mb-3">
                        <span class="cat">{{ $key->deskripsi }}</span>
                    
                    </div>
                    <p class="d-flex mb-0 d-block">
                    <a id="pesan" class="btn btn-primary py-2 ml-1  " data-bs-toggle="modal" data-bs-target="#exampleModal"
                    data-userid="{{ Auth::id() }}"
                    data-jnsid="{{ $key->jnsid }}"
                    data-mtrid="{{ $key->id }}"
                    >
                        Pesan 
                    </a>
                
                    <a id="detail" class="btn btn-secondary py-2 ml-1" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasRight" aria-controls="offcanvasRight"
                            data-image="/assets/images/motor/{{ $key->image }}"
                            data-name="'{{ $key->name }}"
                            data-jenis="{{ $key->motor->name }}"
                            data-harga="{{ $key->harga }}"
                            data-plat="{{ $key->plat_nomor }}"
                            data-warna="{{ $key->warna }}"
                            data-status="{{ $key->status }}"
                            data-des="{{ $key->deskripsi }}"
                            >Details</a>
                        
                    
                    
                    </p>
    
        
                </div>
            </div>
        
        </div>
          @endforeach
      </div>
        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel">Pesan</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
              </div>
              <div class="modal-body">
                <form action="{{ route('tambah',Auth::id()) }}" method="POST" >
                  @csrf
                  <input type="hidden" id="userid" name="userid" value="">
                  <input type="hidden" id="jnsid" name="jnsid" value="">
                  <input type="hidden" id="mtrid" name="mtrid" value="">
                  <div class="row">
                    <div class="col-md-12 mt-2">
                      <label for="exampleFormControlInput1" class="form-label">Durasi</label>
                      <select class="form-select" id="exampleFormControlSelect1" name="durasi" aria-label="Default select example">
                        
                           <option id="1" value="1">1 Minggu</option>
                           <option id="2" value="2">2 Minggu</option>
                        
   
                          
                         </select>
                    </div>
                  </div>
                  
                  
                
              </div>
         
              <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary">Pesan</button>
              </form>
              </div>
            </div>
          </div>
        </div>
<div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasRight" aria-labelledby="offcanvasRightLabel">
  <div class="offcanvas-header">
    <h5 class="offcanvas-title" id="offcanvasExampleLabel">Detail motor <span id="name2"></span></h5>
    <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
  </div>
  <div class="offcanvas-body">
    <div class="text-center mb-4">
      <a href="" data-bs-toggle="modal" id="motorDetails"  data-bs-target="#exampleModal1"><img src="" id="img" style="height: 100px; width: 150px" /></a>
    </div>
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
        <b>Nama motor: </b>
        <p><span id="name"></span></p>
       </div>
       <div>
         <b>Jenis motor: </b>
         <p><span id="jenis"></span></p>
        </div>
        <div>
          <b>Harga: </b>
          <p><span id="harga"></span></p>
         </div>
        <div>
         <b>Plat motor: </b>
         <p><span id="plat"></span></p>
        </div>
        <div>
          <b>Warna: </b>
          <p><span id="warna"></span></p>
         </div>
         <b>Deskripsi: </b>
         <p><span id="des"></span></p>
    </div>
  </div>
</div>
    		{{-- <div class="row mt-5">
          <div class="col text-center">
            <div class="block-27">
              <ul>
                <li><a href="#">&lt;</a></li>
                <li class="active"><span>1</span></li>
                <li><a href="#">2</a></li>
                <li><a href="#">3</a></li>
                <li><a href="#">4</a></li>
                <li><a href="#">5</a></li>
                <li><a href="#">&gt;</a></li>
              </ul>
            </div>
          </div>
        </div> --}}
    	</div>
    </section>
    

    <footer class="ftco-footer ftco-bg-dark ftco-section">
      <div class="container">
        <div class="row mb-5">
          <div class="col-md">
            <div class="ftco-footer-widget mb-4">
              <h2 class="ftco-heading-2"><a href="#" class="logo">Re<span>mot</span></a></h2>
              <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
              <ul class="ftco-footer-social list-unstyled float-md-left float-lft mt-5">
                <li class="ftco-animate"><a href="#"><span class="icon-twitter"></span></a></li>
                <li class="ftco-animate"><a href="#"><span class="icon-facebook"></span></a></li>
                <li class="ftco-animate"><a href="#"><span class="icon-instagram"></span></a></li>
              </ul>
            </div>
          </div>
          <div class="col-md">
            <div class="ftco-footer-widget mb-4 ml-md-5">
              <h2 class="ftco-heading-2">Information</h2>
              <ul class="list-unstyled">
                <li><a href="#" class="py-2 d-block">About</a></li>
                <li><a href="#" class="py-2 d-block">Services</a></li>
                <li><a href="#" class="py-2 d-block">Term and Conditions</a></li>
                <li><a href="#" class="py-2 d-block">Best Price Guarantee</a></li>
                <li><a href="#" class="py-2 d-block">Privacy &amp; Cookies Policy</a></li>
              </ul>
            </div>
          </div>
          <div class="col-md">
             <div class="ftco-footer-widget mb-4">
              <h2 class="ftco-heading-2">Customer Support</h2>
              <ul class="list-unstyled">
                <li><a href="#" class="py-2 d-block">FAQ</a></li>
                <li><a href="#" class="py-2 d-block">Payment Option</a></li>
                <li><a href="#" class="py-2 d-block">Booking Tips</a></li>
                <li><a href="#" class="py-2 d-block">How it works</a></li>
                <li><a href="#" class="py-2 d-block">Contact Us</a></li>
              </ul>
            </div>
          </div>
          <div class="col-md">
            <div class="ftco-footer-widget mb-4">
            	<h2 class="ftco-heading-2">Have a Questions?</h2>
            	<div class="block-23 mb-3">
	              <ul>
	                <li><span class="icon icon-map-marker"></span><span class="text">203 Fake St. Mountain View, San Francisco, California, USA</span></li>
	                <li><a href="#"><span class="icon icon-phone"></span><span class="text">+2 392 3929 210</span></a></li>
	                <li><a href="#"><span class="icon icon-envelope"></span><span class="text">info@yourdomain.com</span></a></li>
	              </ul>
	            </div>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-12 text-center">

            <p><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
  Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="icon-heart color-danger" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
  <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
          </div>
        </div>
      </div>
    </footer>
    
    
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

<script src="https://code.jquery.com/jquery-3.6.0.js"></script>
<script src="https://code.jquery.com/ui/1.13.2/jquery-ui.js"></script>
    {{-- <script type="text/javascript">
      $.ajaxSetup({ headers: { 'csrftoken' : '{{ csrf_token() }}' } });
  </script> --}}
    <script>
      $(document).ready(function(){
           $(document).on('click', '#detail', function () {
            var img = $(this).data('image');
         var name = $(this).data('name');
         var jenis = $(this).data('jenis');
         var harga = $(this).data('harga');
         var plat = $(this).data('plat');
         var status = $(this).data('status');
         var des = $(this).data('des');
         var warna = $(this).data('warna');
         $('#img').attr('src',img);
         $('#img2').attr('src',img);
         $('#name').text(name);
         $('#name2').text(name);
         $('#jenis').text(jenis);
         $('#harga').text(harga);
         $('#plat').text(plat);
         $('#warna').text(warna);
         $('#status').text(status);
         $('#des').text(des);
        
         
      });
    });
    $(document).ready(function(){
         $(document).on('click', '#pesan', function () {
          var userid = $(this).data('userid');
       var jnsid = $(this).data('jnsid');
       var mtrid = $(this).data('mtrid');
       
 
       $('#userid').attr('value',userid);
       $('#jnsid').attr('value',jnsid);
       $('#mtrid').attr('value',mtrid);
     
      
       
    });
  });
  // $(document).ready(function () {
  //       $('#search').on('keyup', function(){
  //           var value = $(this).val();
  //           $.ajax({
  //               type: "get",
  //               url: "/listmotor",
  //               data: {'search':value},
                
  //               success: function (data) {
  //                   $('#mycard').html(data);
                    
  //               }
  //           });
  //       });
  //   });
  </script>
  
   
  
  <script>
    var tags = [];
    $.ajax({
                method: "GET",
                url: "/carimotor",
                data: 
                
                success: function (response) {
                  console.log(response)
                   cari2(response)
                    
                }
            });

    function cari2(tags)
    {
      $( "#search" ).autocomplete({
        
        source: tags
      });
    }
    </script>
  <!-- loader -->
  {{-- <div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00"/></svg></div> --}}
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>

  <script src="js/jquery.min.js"></script>
  <script src="js/jquery-migrate-3.0.1.min.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/jquery.easing.1.3.js"></script>
  <script src="js/jquery.waypoints.min.js"></script>
  <script src="js/jquery.stellar.min.js"></script>
  <script src="js/owl.carousel.min.js"></script>
  <script src="js/jquery.magnific-popup.min.js"></script>
  <script src="js/aos.js"></script>
  <script src="js/jquery.animateNumber.min.js"></script>
  
  <script src="js/bootstrap-datepicker.js"></script>
  <script src="js/jquery.timepicker.min.js"></script>
  <script src="js/scrollax.min.js"></script>
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
  <script src="js/google-map.js"></script>
  <script src="js/main.js"></script>
    
  </body>
</html>