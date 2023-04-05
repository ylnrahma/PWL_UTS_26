@push('js')
<script>
  alert('Selamat Datang');
</script>
@endpush

@extends('layouts.app2')

@section('content')
    
<!-- Main content -->
<section class="content">
    <div class="container-fluid">
        <!-- Small boxes (Stat box) -->
        <div class="small-box bg-light" style="width: 200px auto">
            <div class="inner">
                <h4 style="font-weight: bold">Selamat Datang Peserta Posyandu</h4>
                <h5 style="font-weight: bold">{!! $full_name !!}, {!! $yfull_name !!}</h5>
            </div>
        </div>
        <!-- /.content -->
    </div>
</section>
  <!-- /.content-wrapper -->
@endsection