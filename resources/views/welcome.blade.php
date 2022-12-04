<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Remot | Welcome</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <link href="https://fonts.googleapis.com/css?family=Poppins:200,300,400,500,600,700,800&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="css/open-iconic-bootstrap.min.css">
    <link rel="stylesheet" href="css/animate.css">
    
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
    <link rel="stylesheet" href="css/magnific-popup.css">

    <link rel="stylesheet" href="css/aos.css">

    <link rel="stylesheet" href="css/ionicons.min.css">

    <link rel="stylesheet" href="css/bootstrap-datepicker.css">
    <link rel="stylesheet" href="css/jquery.timepicker.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    
    <link rel="stylesheet" href="css/flaticon.css">
    <link rel="stylesheet" href="css/icomoon.css">
    <link rel="stylesheet" href="css/style.css">
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script> 
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
  </head>
  <body>
    
	  @include('partials.navbar')
    <!-- END nav -->
    
    <div class="hero-wrap ftco-degree-bg" style="background-image: url('/assets/images/bg.jpg');" data-stellar-background-ratio="0.5">
      <div class="overlay"></div>
      <div class="container">
        <div class="row no-gutters slider-text justify-content-start align-items-center justify-content-center">
          <div class="col-lg-8 ftco-animate">
          	<div class="text w-100 text-center mb-md-5 pb-md-5">
	            <h1 class="mb-4">Cara Cepat &amp; Mudah Untuk menyewa Motor!</h1>
	            <p style="font-size: 18px;">Kami adalah Remot , yang selalu menyediakan motor - motor pilihan anda yang paling terbaik </p>
	            <a href="https://vimeo.com/45830194" class="icon-wrap popup-vimeo d-flex align-items-center mt-4 justify-content-center">
	            	<div class="icon d-flex align-items-center justify-content-center">
	            		<img src="/assets/img/icons/unicons/easy.png" width="40px" height="40px" alt="">
	            	</div>
	            	<div class="heading-title ml-5">
		            	<span>Pasti ada , Murah ,dan Aman</span>
	            	</div>
	            </a>
            </div>
          </div>
        </div>
      </div>
    </div>

     <section class="ftco-section ftco-no-pt bg-light">
    	<div class="container">
    		<div class="row no-gutters">
    			<div class="col-md-12	featured-top">
    				<div class="row no-gutters">
	  				
	  					<div class="col-md-12 d-flex align-items-center">
	  						<div class="services-wrap rounded-right w-100">
	  							<h3 class="heading-section mb-4">Bagaimana caranya menyewa motor di kami?</h3>
	  							<div class="row d-flex mb-4">
					          <div class="col-md-4 d-flex align-self-stretch ftco-animate">
					            <div class="services w-100 text-center">
				              	<div class="icon d-flex align-items-center justify-content-center"><img src="/assets/img/icons/unicons/cek.gif" width="50px" height="50px" alt=""></div>
				              	<div class="text w-100">
					                <h3 class="heading mb-2">Pastikan anda mendaftar terlebih dahulu</h3>
				                </div>
					            </div>      
					          </div>
					          <div class="col-md-4 d-flex align-self-stretch ftco-animate">
					            <div class="services w-100 text-center">
				              	<div class="icon d-flex align-items-center justify-content-center"><img src="/assets/img/icons/unicons/moto.gif" width="50px" height="50px" alt=""></div>
				              	<div class="text w-100">
					                <h3 class="heading mb-2">Pilih kendaraan yang anda sukai</h3>
					              </div>
					            </div>      
					          </div>
					          <div class="col-md-4 d-flex align-self-stretch ftco-animate">
					            <div class="services w-100 text-center">
				              	<div class="icon d-flex align-items-center justify-content-center"><img src="/assets/img/icons/unicons/gedung.gif" width="50px" height="50px" alt=""></div>
				              	<div class="text w-100">
					                <h3 class="heading mb-2">Datang ke tempat kami</h3>
					              </div>
					            </div>      
					          </div>
					        </div>
					        <p><a href="/listmotor" class="btn btn-primary py-3 px-4 text-center d-flex align-items-center justify-content-center ">Cari motor pilihan anda!</a></p>
	  						</div>
	  					</div>
	  				</div>
				</div>
  		</div>
    </section>


    <section class="ftco-section ftco-no-pt bg-light">
    	<div class="container">
    		<div class="row justify-content-center">
          <div class="col-md-12 heading-section text-center ftco-animate mb-5">
          	<span class="subheading">Motor andalan kami</span>
            <h2 class="mb-2">Motor kami yang tersedia </h2>
          </div>
        </div>
    		<div class="row">
    			<div class="col-md-12">
    				<div class="carousel-car owl-carousel">
              @foreach ($datas as $key )
                
              
    					<div class="item">
    						<div class="car-wrap rounded ftco-animate">
		    					<div class="img rounded d-flex align-items-end">
                    <img src="/assets/images/motor/{{ $key->image }}" style="height: 100%; width: 100%"   alt="">
		    					</div>
		    					<div class="text">
		    						<h2 class="mb-0"><a href="#">{{ $key->name }}</a></h2>
                    <div class="d-flex mb-3">
			    					
			    						<p class="price ml-auto">{{number_format($key->harga, 0, '', '.') }} <span>/week</span></p>
		    						</div>
		    						<div class="d-flex mb-3">
			    						<span class="cat">{{ $key->deskripsi }}</span>
			    					
		    						</div>
		    						<p class="d-flex mb-0 d-block">
                      <a id="pesan" class="btn btn-primary py-2 ml-1  " data-bs-toggle="modal" data-bs-target="#exampleModal"
                      data-userid="{{ Auth::id() }}"
                      data-jnsid="{{ $key->motor->id }}"
                      data-mtrid="{{ $key->id }}"
                      >
                        Pesan 
                     </a>
                
                      <a id="detail" class="btn btn-secondary py-2 ml-1" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasRight" aria-controls="offcanvasRight"
                            data-image="/assets/images/motor/{{ $key->image }}"
                              data-name="{{ $key->name }}"
                              data-jenis="{{ $key->motor->name  }}"
                              data-harga="{{ $key->harga  }}"
                              data-plat="{{ $key->plat_nomor  }}"
                              data-warna="{{ $key->warna  }}"
                              data-status="{{ $key->status  }}"
                              data-des="{{ $key->deskripsi  }}"
                            >Details</a>
                          
                      
                    
                    </p>
		    					</div>
		    				</div>
    					</div>
              @endforeach
         
              
             
          
    			</div>
    		</div>
    	</div>
      <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              @if ($user)
              <h1 class="modal-title fs-5" id="exampleModalLabel">Pesan</h1>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
          
             <form action="{{ route('tambah',$user) }}" method="POST" >
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
          @else
          <h1 class="modal-title fs-5" id="exampleModalLabel">Pesan</h1>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
          
            <h2>Silahkan login atau register terlebih dahulu!</h2>
          

               
             @endif
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
    </section>

    <section class="ftco-section ftco-about">
			<div class="container">
				<div class="row no-gutters">
					<div class="col-md-6 p-md-5 img img-2 d-flex justify-content-center align-items-center" style="background-image: url(images/about.jpg);">
					</div>
					<div class="col-md-6 wrap-about ftco-animate">
	          <div class="heading-section heading-section-white pl-md-5">
	          	<span class="subheading">About us</span>
	            <h2 class="mb-4">Welcome to Remot </h2>

	            <p>Kami selalu menyediakan motor - motor pilihan anda ,banyak jenis dan kategori motor yang mungkin anda cari, di mulai dari harga 300.000 per minggu sampai 2.000.000 perminggu </p>
	            <p>Motor kami akan selalu ada jaminan nya,motor selalu di rawat seperti anak sendiri,di jamin kinclong setiap anda memasuki toko kami,perawatan yang setiap bulan kami lakukan ,seperti ganti oli dan selalu kami cek perawatan mesin ,dan juga kami mempunyai  mekanik handal yang setiap hari mengecek kendaraan sebelum di sewakan .</p>
	            <p><a href="#" class="btn btn-primary py-3 px-4">Cari motor!</a></p>
	          </div>
					</div>
				</div>
			</div>
		</section>

		{{-- <section class="ftco-section">
			<div class="container">
				<div class="row justify-content-center mb-5">
          <div class="col-md-7 text-center heading-section ftco-animate">
          	<span class="subheading">Services</span>
            <h2 class="mb-3">Our Latest Services</h2>
          </div>
        </div>
				<div class="row">
					<div class="col-md-3">
						<div class="services services-2 w-100 text-center">
            	<div class="icon d-flex align-items-center justify-content-center"><span class="flaticon-wedding-car"></span></div>
            	<div class="text w-100">
                <h3 class="heading mb-2">Wedding Ceremony</h3>
                <p>A small river named Duden flows by their place and supplies it with the necessary regelialia.</p>
              </div>
            </div>
					</div>
					<div class="col-md-3">
						<div class="services services-2 w-100 text-center">
            	<div class="icon d-flex align-items-center justify-content-center"><span class="flaticon-transportation"></span></div>
            	<div class="text w-100">
                <h3 class="heading mb-2">City Transfer</h3>
                <p>A small river named Duden flows by their place and supplies it with the necessary regelialia.</p>
              </div>
            </div>
					</div>
					<div class="col-md-3">
						<div class="services services-2 w-100 text-center">
            	<div class="icon d-flex align-items-center justify-content-center"><span class="flaticon-car"></span></div>
            	<div class="text w-100">
                <h3 class="heading mb-2">Airport Transfer</h3>
                <p>A small river named Duden flows by their place and supplies it with the necessary regelialia.</p>
              </div>
            </div>
					</div>
					<div class="col-md-3">
						<div class="services services-2 w-100 text-center">
            	<div class="icon d-flex align-items-center justify-content-center"><span class="flaticon-transportation"></span></div>
            	<div class="text w-100">
                <h3 class="heading mb-2">Whole City Tour</h3>
                <p>A small river named Duden flows by their place and supplies it with the necessary regelialia.</p>
              </div>
            </div>
					</div>
				</div>
			</div>
		</section> --}}

		<section class="ftco-section ftco-intro" style="background-image: url(images/bg_3.jpg);">
			<div class="overlay"></div>
			<div class="container">
				<div class="row justify-content-end">
					<div class="col-md-6 heading-section heading-section-white ftco-animate">
            <h2 class="mb-3">Dapatkan promo menarik lainnya dari Remot!</h2>
            <a href="{{ route('login') }}" class="btn btn-primary btn-lg">Get Started</a>
          </div>
				</div>
			</div>
		</section>


    <section class="ftco-section testimony-section bg-light">
      <div class="container">
        <div class="row justify-content-center mb-5">
          <div class="col-md-7 text-center heading-section ftco-animate">
          	<span class="subheading">Testimonial</span>
            <h2 class="mb-3">Tanggapan Customer kami</h2>
          </div>
        </div>
        <div class="row ftco-animate">
          <div class="col-md-12">
            <div class="carousel-testimony owl-carousel ftco-owl">
              <div class="item">
                <div class="testimony-wrap rounded text-center py-4 pb-5">
                  <div class="user-img mb-2" style="background-image: url(images/person_1.jpg)">
                  </div>
                  <div class="text pt-4">
                    <p class="mb-4">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                    <p class="name">Roger Scott</p>
                    <span class="position">Marketing Manager</span>
                  </div>
                </div>
              </div>
              <div class="item">
                <div class="testimony-wrap rounded text-center py-4 pb-5">
                  <div class="user-img mb-2" style="background-image: url(images/person_2.jpg)">
                  </div>
                  <div class="text pt-4">
                    <p class="mb-4">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                    <p class="name">Roger Scott</p>
                    <span class="position">Interface Designer</span>
                  </div>
                </div>
              </div>
              <div class="item">
                <div class="testimony-wrap rounded text-center py-4 pb-5">
                  <div class="user-img mb-2" style="background-image: url(images/person_3.jpg)">
                  </div>
                  <div class="text pt-4">
                    <p class="mb-4">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                    <p class="name">Roger Scott</p>
                    <span class="position">UI Designer</span>
                  </div>
                </div>
              </div>
              <div class="item">
                <div class="testimony-wrap rounded text-center py-4 pb-5">
                  <div class="user-img mb-2" style="background-image: url(images/person_1.jpg)">
                  </div>
                  <div class="text pt-4">
                    <p class="mb-4">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                    <p class="name">Roger Scott</p>
                    <span class="position">Web Developer</span>
                  </div>
                </div>
              </div>
              <div class="item">
                <div class="testimony-wrap rounded text-center py-4 pb-5">
                  <div class="user-img mb-2" style="background-image: url(images/person_1.jpg)">
                  </div>
                  <div class="text pt-4">
                    <p class="mb-4">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                    <p class="name">Roger Scott</p>
                    <span class="position">System Analyst</span>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section class="ftco-section">
      <div class="container">
        <div class="row justify-content-center mb-5">
          <div class="col-md-7 heading-section text-center ftco-animate">
          	<span class="subheading">Berita</span>
            <h2>Sekilas Berita Terkini</h2>
          </div>
        </div>
  
          
       
        <div class="row d-flex">
          @foreach ($api['articles'] as $u )
          <div class="col-md-4 d-flex ftco-animate">
          	<div class="blog-entry justify-content-end">
              <a href="blog-single.html" class="block-20" >
                <img src="{{ $u['urlToImage'] }}" width="100%" height="100%" alt="">
              </a>
              <div class="text pt-4">
              	<div class="meta mb-3">
                  <div><a href="#">{{ $u['author'] }}</a></div>
                  {{-- <div><a href="#">Admin</a></div>
                  <div><a href="#" class="meta-chat"><span class="icon-chat"></span> 3</a></div> --}}
                </div>
                <h3 class="heading mt-2"><a href="#">{{ $u['title'] }}</a></h3>
                <p><a href="{{ $u['url'] }}" class="btn btn-primary">Read more</a></p>
              </div>
            </div>
          </div>
          @endforeach
        
        </div>
      </div>
    </section>	

    <section class="ftco-counter ftco-section img bg-light" id="section-counter">
			<div class="overlay"></div>
    	<div class="container">
    		<div class="row">
          <div class="col-md-6 col-lg-3 justify-content-center counter-wrap ftco-animate">
            <div class="block-18">
              <div class="text text-border d-flex align-items-center">
                <strong class="number" data-number="1">0</strong>
                <span>Year <br>Experienced</span>
              </div>
            </div>
          </div>
          <div class="col-md-6 col-lg-3 justify-content-center counter-wrap ftco-animate">
            <div class="block-18">
              <div class="text text-border d-flex align-items-center">
                <strong class="number" data-number="{{ $motor }}">0</strong>
                <span>Total <br>Motor</span>
              </div>
            </div>
          </div>
          <div class="col-md-6 col-lg-3 justify-content-center counter-wrap ftco-animate">
            <div class="block-18">
              <div class="text text-border d-flex align-items-center">
                <strong class="number" data-number="2590">0</strong>
                <span>Happy <br>Customers</span>
              </div>
            </div>
          </div>
          <div class="col-md-6 col-lg-3 justify-content-center counter-wrap ftco-animate">
            <div class="block-18">
              <div class="text d-flex align-items-center">
                <strong class="number" data-number="{{ $transaksi }}">0</strong>
                <span>Total <br>Transaksi</span>
              </div>
            </div>
          </div>
        </div>
    	</div>
    </section>	

    <footer class="ftco-footer ftco-bg-dark ftco-section">
      <div class="container">
        <div class="row mb-5">
          <div class="col-md">
            <div class="ftco-footer-widget mb-4">
              <h2 class="ftco-heading-2"><a href="#" class="logo">RE<span>MOT</span></a></h2>
              <p>website rental motor yang selalu menyediakan motor bagus ,terawat dengan harga murah dan terjangkau</p>
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
            	<h2 class="ftco-heading-2">Punya pertanyaan?</h2>
            	<div class="block-23 mb-3">
	              <ul>
	                <li><span class="icon icon-map-marker"></span><span class="text">Jl Perumahan Pondok cipta raya blok c</span></li>
	                <li><a href="#"><span class="icon icon-phone"></span><span class="text">+62 895617434</span></a></li>
	                <li><a href="#"><span class="icon icon-envelope"></span><span class="text">Remot@yahoo.com</span></a></li>
	              </ul>
	            </div>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-12 text-center">

            <p><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
  Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | made with <i class="icon-heart color-danger" aria-hidden="true"></i> by Remot</a>
  <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
          </div>
        </div>
      </div>
    </footer>
    
  

  <!-- loader -->
  {{-- <div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00"/></svg></div> --}}

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
       $('#warna').text(warna);
       $('#harga').text(harga);
       $('#plat').text(plat);
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
</script>
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
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
  <script src="js/bootstrap-datepicker.js"></script>
  <script src="js/jquery.timepicker.min.js"></script>
  <script src="js/scrollax.min.js"></script>
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
  <script src="js/google-map.js"></script>
  <script src="js/main.js"></script>
    
  </body>
</html>
