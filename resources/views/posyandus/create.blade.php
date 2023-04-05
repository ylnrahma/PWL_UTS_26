@extends('posyandus.layout')
@section('content')

<div class="container mt-5">
    <div class="row justify-content-center align-items-center">
        <div class="card" style="width: 24rem;">
        <div class="card-header">
            Tambah Peserta Posyandu
        </div>
        <div class="card-body">
            @if ($errors->any())
            <div class="alert alert-danger">
                <strong>Whoops!</strong> There were some problems with your input.<br><br>
                <ul>
                    @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
            @endif
            <form method="post" action="{{ route('posyandus.store') }}" id="myForm">
                @csrf
                <div class="form-group">
                    <label for="No_Urut">No_Urut</label> 
                    <input type="text" name="No_Urut" class="form-control" id="No_Urut" aria-describedby="No_Urut" > 
                </div>
                <div class="form-group">
                    <label for="Nama">Nama</label> 
                    <input type="Nama" name="Nama" class="form-control" id="Nama" aria-describedby="Nama" > 
                </div>
                <div class="form-group">
                    <label for="Alamat">Alamat</label> 
                    <input type="Alamat" name="Alamat" class="form-control" id="Alamat" aria-describedby="Alamat" > 
                </div>
                <div class="form-group">
                    <label for="Tanggal_lahir">Tanggal_lahir</label> 
                    <input type="Tanggal_lahir" name="Tanggal_lahir" class="form-control" id="Tanggal_lahir" aria-describedby="Tanggal_lahir" > 
                </div>
                <div class="form-group">
                    <label for="Bb_lahir">Bb_lahir</label> 
                    <input type="Bb_lahir" name="Bb_lahir" class="form-control" id="Bb_lahir" aria-describedby="Bb_lahir" > 
                </div>
                <div class="form-group">
                    <label for="Tb_lahir">Tb_lahir</label> 
                    <input type="Tb_lahir" name="Tb_lahir" class="form-control" id="Tb_lahir" aria-describedby="Tb_lahir" > 
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>
</div>
</div>
@endsection