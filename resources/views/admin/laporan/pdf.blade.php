<!DOCTYPE html>
<html lang="en">
   <head>
      <meta charset="UTF-8" />
      <meta name="viewport" content="width=device-width, initial-scale=1.0" />
      <meta http-equiv="Content-Type" content="text/html" ; charset="utf-8" />
      <title>Laporan</title>
      <style>
         * {
            box-sizing: border-box;
         }

         .table {
            width: 100%;
            border-collapse: collapse;
            page-break-after: always;
         }

         .table td,
         .table th {
            text-align: center;
         }

         .table th {
            background-color: #ff9106;
            color: black;
         }

         .table tbody:nth-child(even) {
            background-color: #f5f5f5;
         }

         .title {
            color: #adadad;
            text-align: center;
         }

         .subtitle a {
            color: white;
            text-decoration: none;
            float: left;
            padding-top: 1px;
         }

         .subtitle a:hover {
            color: #dbd7e6;
            text-decoration: none;
         }

         .form-control {
         }

         .btn {
            background-color: #ff9106;
            color: white;
         }

         body {
            margin: 0;
         }
      </style>
   </head>
   <body>
      <div class="container">
        
         <h2 class="my-6 text-2xl font-semibold text-gray-700 dark:text-gray-200 align-self-center text-center">Laporan pdf </h2>
         
<table class="table mt-3" cellpadding="10" cellspace="0">
  
   
    <thead class="align-self-center text-center">
     
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
			
      </div>
   </body>
</html>
