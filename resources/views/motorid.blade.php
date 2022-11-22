@extends('layouts.admin')
@section('isi')
    
<div class="card">
    <h5 class="card-header">Motor yang sedang anda sewa</h5>
    <div class="table-responsive text-nowrap">
      <table class="table table-borderless text-center">
        <thead>
          <tr>
            <th>Image</th>
            <th>Nama motor</th>
            <th>Durasi</th>
            <th>Batas waktu</th>
            <th>Status</th>
             <th>Action</th>
          
          </tr>
        </thead>
        @foreach ($datas as $key )
        <tbody>
          <tr>
            <td id="td"><img src="/assets/images/motor/{{ $key->image }}" style="height: 100px; width: 150px" /></td>
            <td> <strong>{{ $key->name }}</strong></td>
            <td >{{ $key->durasi }} Minggu</td>
            <td >{{ $key->waktu }}</td>
            @if ($key->status == 1)
            <td><span class="badge bg-label-primary me-1">Sedang aktif di pakai</span></td>
            @elseif($key->status == 2)
            <td><span class="badge bg-label-success me-1">Sudah di kembalikan</span></td>
            @elseif($key->status == 3)
            <td><span class="badge bg-label-warning me-1">Tolong di kembalikan segera</span></td>
            @endif
       
            <td>
              
              <div class="dropdown">
                <button type="button" class="btn p-0 dropdown-toggle hide-arrow" data-bs-toggle="dropdown">
                  <i class="bx bx-dots-vertical-rounded"></i>
                </button>
                <div class="dropdown-menu">
                    
                    @if ($key->status == 1)
                        <form action="{{ route('kembalikan',$key->id) }}" method="POST" >
                            @csrf
                            <input type="hidden" name="status" value="2">
                            <button type="submit" class="dropdown-item"><i class="bx bx-edit-alt me-1"></i> kembalikan</button>
                            
                        </form>  
                    @endif
                      <form action="{{ url('hapus/'.$key->id) }}" method="POST" >
                        @csrf
                        <input type="hidden" name="_method" value="DELETE">
                        <button type="submit" class="dropdown-item"><i class="bx bx-trash me-1"></i>Delete</button>
                        
                    </form>
                  
                </div>
              </div>
            </td>
          

          </tr>
        </tbody>
        @endforeach
      </table>
    </div>
  </div>
@endsection