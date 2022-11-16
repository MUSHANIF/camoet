@extends("layouts.admin")
@section('isi')
@if (empty($datas))
    <h1>isi data dulu</h1>
    @else
    <h1>udah ada datanya</h1>
    @endif
@endsection