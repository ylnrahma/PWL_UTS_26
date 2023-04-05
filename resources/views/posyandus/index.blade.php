@extends('posyandus.layout')
@section('content')
<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left mt-2">
            <h2>JURUSAN TEKNOLOGI INFORMASI-POLITEKNIK NEGERI MALANG</h2>
        </div>
        <form class="form-left my-2" method="get" action="{{ route('search') }}">
                    <div class="form-group w-70 mb-3">
                        <input type="text" name="search" class="form-control w-50 d-inline" id="search" placeholder="Masukkan Nama">
                        <button type="submit" class="btn btn-primary mb-1">Cari</button>
                        <br><br>
                        <a class="btn btn-success right" href="{{ route('posyandus.create') }}" style="margin-left:25cm"> Input Peserta Posyandu</a>
                    </div>
        </form>
    </div>
</div>

@if ($message = Session::get('success'))
<div class="alert alert-success">
    <p>{{ $message }}</p>
</div>
@endif

<table class="table table-bordered">
    <tr>
        <th>No_Urut</th>
        <th>Nama</th>
        <th>Alamat</th>
        <th>Tanggal_lahir</th>
        <th>Bb_lahir</th>
        <th>Tb_lahir</th>
        <th width="280px">Action</th>
    </tr>
    @foreach ($posyandus as $Posyandu)
    <tr>
        <td>{{ $Posyandu->No_Urut }}</td>
        <td>{{ $Posyandu->Nama }}</td>
        <td>{{ $Posyandu->Alamat }}</td>
        <td>{{ $Posyandu->Tanggal_lahir }}</td>
        <td>{{ $Posyandu->Bb_lahir }}</td>
        <td>{{ $Posyandu->Tb_lahir }}</td>
        <td>
            <form action="{{ route('posyandus.destroy',$Posyandu->No_Urut) }}" method="POST">
                <a class="btn btn-info" href="{{ route('posyandus.show',$Posyandu->No_Urut) }}">Show</a>
                <a class="btn btn-primary" href="{{ route('posyandus.edit',$Posyandu->No_Urut) }}">Edit</a>
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danger">Delete</button>
            </form>
        </td>
    </tr>
    @endforeach
</table>
@endsection