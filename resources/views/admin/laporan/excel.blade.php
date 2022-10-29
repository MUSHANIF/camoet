
<table class="table mt-3" cellpadding="10" cellspace="0">
  
   
    <thead class="align-self-center text-center">
        <tr>
            <th><h2>Data transaksi hari ini</h2></th>
        </tr>
        <tr>

            <th>nama</th>
            <th>Metode pembayaran</th>
            <th>tanggal pembayaran</th>
            <th>total yang di bayar kan</th>
            <th>kembalian</th>
    </tr>
        
    </thead>
   
    @foreach ($datas as $key) 
    <tbody>
        <tr class="align-self-center text-center"  style="border: 1px solid black;">
            <td data-label="Cost">{{ $key->pembeli->name }}</td>
            <td data-label="Cost">{{ $key->metode_pembayaran }}</td>
            <td data-label="Cost">{{ $key->hari }}</td>
            <td data-label="Cost">{{ $key->total }}</td>
            <td data-label="Cost">{{ $key->kembalian }}</td>
 
            
        
        </tr>
    </tbody>
    @endforeach
   

</table>