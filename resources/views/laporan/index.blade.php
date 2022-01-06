@extends('top')
@section('content')

    <!-- Begin Page Content -->
    <div class="container-fluid">

        <!-- Page Heading -->
        <div class="row">
            <div class="col-6">
                <h1 class="h3 mb-4 text-gray-800">Data Laporan Mutasi</h1>
            </div>
        </div>

        @if(Session::has('success'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                <strong>{{ \Illuminate\Support\Facades\Session::get('success') }}</strong>
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
        @endif
        @if(Session::has('error'))
            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                <strong>{{ \Illuminate\Support\Facades\Session::get('error') }}</strong>
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
        @endif

        <!-- DataTales Example -->
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">Table Pemasukan</h6>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                            <tr class="text-center">
                                <th class="text-right">No. </th>
                                <th>Tanggal Pemasukan</th>
                                <th>Kategori</th>
                                <th>Nominal</th>
                                <th>Keterangan</th>
                                <th>Status</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($pemasukan as $masuk)
                                <tr class="text-center">
                                    <td class="text-right">{{ ++$i }}.</td>
                                    <td>{{ date('d/M/Y', strtotime($masuk->tanggal)) }}</td>
                                    <td>{{ $masuk->kategori }}</td>
                                    <td>{{ "Rp. " . number_format($masuk->nominal) }}</td>
                                    <td>{{ $masuk->keterangan }}</td>
                                    
                                    @if ($masuk->status == 0)
                                        <td class="text-danger">Belum Approved</td>
                                    @else
                                        <td class="text-success">Approved</td>
                                    @endif

                                    @if ($masuk->status == 0)
                                        <td class="text-center">
                                            <form class="btn-group" action="{{ url('deletepemasukan', $masuk->id) }}" method="POST">

                                                <a href="/approvepemasukan/{{ $masuk->id }}" class="btn btn-success btn-circle" title="Approve">
                                                    <i class="fas fa-check"></i>
                                                </a>

                                                <a href="/showeditpemasukan/{{ $masuk->id }}" class="btn btn-warning btn-circle" title="Edit">
                                                    <i class="fas fa-edit"></i>
                                                </a>
                                                
                                                @csrf
                                                @method('DELETE')

                                                <button type="submit" class="btn btn-danger btn-circle"  onclick="return confirm('Yakin ingin menghapus data?')" 
                                                title="Delete">
                                                    <i class="fas fa-trash"></i>
                                                </button>
                                            </form>
                                        </td>
                                    @else
                                        <td>-</td>
                                    @endif
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

        @php
            $i = 0;
        @endphp

        <!-- DataTales Example -->
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">Table Pengeluaran</h6>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable2" width="100%" cellspacing="0">
                        <thead>
                            <tr class="text-center">
                                <th class="text-right">No. </th>
                                <th>Tanggal Pengeluaran</th>
                                <th>Kategori</th>
                                <th>Nominal</th>
                                <th>Keterangan</th>
                                <th>Status</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($pengeluaran as $keluar)
                                <tr class="text-center">
                                    <td class="text-right">{{ ++$i }}.</td>
                                    <td>{{ date('d/M/Y', strtotime($keluar->tanggal)) }}</td>
                                    <td>{{ $keluar->kategori }}</td>
                                    <td>{{ "Rp. " . number_format($keluar->nominal) }}</td>
                                    <td>{{ $keluar->keterangan }}</td>
                                    
                                    @if ($keluar->status == 0)
                                        <td class="text-danger">Belum Approved</td>
                                    @else
                                        <td class="text-success">Approved</td>
                                    @endif

                                    @if ($keluar->status == 0)
                                        <td class="text-center">
                                            <form class="btn-group" action="{{ url('deletepengeluaran', $keluar->id) }}" method="POST">

                                                <a href="/approvepengeluaran/{{$keluar->id}}" class="btn btn-success btn-circle" title="Approve">
                                                    <i class="fas fa-check"></i>
                                                </a>

                                                <a href="/showeditpengeluaran/{{ $keluar->id }}" class="btn btn-warning btn-circle" title="Edit">
                                                    <i class="fas fa-edit"></i>
                                                </a>
                                                
                                                @csrf
                                                @method('DELETE')

                                                <button type="submit" class="btn btn-danger btn-circle"  onclick="return confirm('Yakin ingin menghapus data?')" 
                                                title="Delete">
                                                    <i class="fas fa-trash"></i>
                                                </button>
                                            </form>
                                        </td>
                                    @else
                                        <td>-</td>
                                    @endif
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

    </div>
    <!-- /.container-fluid -->

@endsection