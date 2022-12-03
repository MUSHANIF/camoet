<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body>
    <div class="content-start transition">
		<div class="container-fluid dashboard">
			<div class="content-header">
				<h1 class="text-center">Laporan Transaksi Hari ini</h1>
				<p></p>
			</div>
		  
			<div class="row">
				<div class="col-12">

					<div class="card">
						<div class="card-body"> 
							<p>
                        bukti transaksi {{ $tanggal }}
                     </p>
								
							<div class="card-content">
								<div class="card-body">
									
									
									@foreach ( $datas as $key)
                              
                           
										
										
										
									<ul class="list-group mb-3">
										<li class="list-group-item ">Nama: {{ $key->user->name }}</li>
										<li class="list-group-item">Nama Motor: {{ $key->mtr->name }}</li>
										<li class="list-group-item ">Nik: {{ $key->orang->nik }}</li>
                              <li class="list-group-item">Status pembayaran : <span class="alert alert-primary p-1">Sukses!</span> </li>
                              <li class="list-group-item">Batas waktu :  {{ $key->waktu }}</li>
                              <li class="list-group-item">Waktu di kembalikan :  {{ $key->waktu_kembali }}</li>
                              {{-- <li class="list-group-item"> :  {{ $key->trans->metode_pembayaran }}</li> --}}
                                        
									</ul>
									@endforeach
								
								</div>
					</div>
				</div>

				</div>
			</div>

		</div> <!-- End Container -->
	</div>
    <script src="{{ asset('assets/libs/bootstrap/dist/js/bootstrap.bundle.min.js') }}"></script>
</body>
</html>