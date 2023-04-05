@extends('posyandus.layout')
 
@section('content')
<div class="container mt-5">
    <div class="row justify-content-center align-items-center">
        <div class="card" style="width: 24rem;">
        <div class="card-header">
            Detail Peserta Posyandu
        </div>
        <div class="card-body">
            <ul class="list-group list-group-flush">
                <li class="list-group-item"><b>No_Urut: </b>{{$Posyandu->No_Urut}}</li>
                <li class="list-group-item"><b>Nama: </b>{{$Posyandu->Nama}}</li>
                <li class="list-group-item"><b>Alamat: </b>{{$Posyandu->Alamat}}</li>
                <li class="list-group-item"><b>Tanggal_lahir: </b>{{$Posyandu->Tanggal_lahir}}</li>
                <li class="list-group-item"><b>Bb_lahir: </b>{{$Posyandu->Bb_lahir}}</li>
                <li class="list-group-item"><b>Tb_lahir: </b>{{$Posyandu->Tb_lahir}}</li>
            </ul>
        </div>
        <a class="btn btn-success mt3" href="{{ route('posyandus.index') }}">Kembali</a>
    </div>
</div>
</div>
@endsection