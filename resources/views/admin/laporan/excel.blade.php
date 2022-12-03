
<table class="table mt-3" cellpadding="10" cellspace="0">
  
   
    <thead class="align-self-center text-center">
        <tr>
            <th><h2>Data transaksi hari ini</h2></th>
        </tr>
        <tr>

            <th>Nama</th>
            <th>Nama Motor</th>
            <th>Nik</th>
            <th>Status pembayaran</th>
            <th>Batas waktu:</th>
            <th>Waktu di kembalikan</th>
        
    </tr>
        
    </thead>
   
    @foreach ($datas as $key) 
    <tbody>
        <tr class="align-self-center text-center"  style="border: 1px solid black;">
            <td data-label="Cost">{{ $key->user->name }}</td>
            <td data-label="Cost">{{ $key->mtr->name }}</td>
            <td data-label="Cost">{{ $key->orang->nik }}</td>
            <td data-label="Cost">Sukses</td>
            <td data-label="Cost">{{ $key->waktu }}</td>
            <td data-label="Cost">{{ $key->waktu_kembali }}</td>
 
            
        
        </tr>
    </tbody>
    @endforeach
   

</table>