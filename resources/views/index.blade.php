@extends('top')
@section('content')

    <!-- Begin Page Content -->
    <div class="container-fluid">

        <!-- Page Heading -->
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Selamat datang di Admin Dashboard</h1>
        </div>
        <div class="row">
            <!-- Earnings (Monthly) Card Example -->
            <div class="col-xl-3 col-md-6 mb-4">
                <div class="card border-left-primary shadow h-100 py-2">
                    <div class="card-body">
                        <div class="row no-gutters align-items-center">
                            <div class="col mr-2">
                                <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Balance / Saldo</div>
                                <div class="h5 mb-0 font-weight-bold {{ $pemasukan->sum('nominal') - $pengeluaran->sum('nominal') >= 0 ? 'text-success' : 'text-danger' }}">
                                    {{ "Rp. " . number_format($pemasukan->sum('nominal') - $pengeluaran->sum('nominal')) }}
                                </div>
                                <br>
                                <div class="h6 mb-0 font-weight-bold text-success">Pemasukan: {{ "Rp. " . number_format($pemasukan->sum('nominal')) }}</div>
                                <div class="h6 mb-0 font-weight-bold text-danger">Pengeluaran: {{ "Rp. " . number_format($pengeluaran->sum('nominal')) }}</div>
                            </div>
                            <div class="col-auto">
                                <i class="fas fa-dollar-sign fa-2x text-gray-300"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">Table Pemasukan Tahun {{ date('Y') }}</h6>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th>Kategori</th>
                                <th>Januari</th>
                                <th>Februari</th>
                                <th>Maret</th>
                                <th>April</th>
                                <th>Mei</th>
                                <th>Juni</th>
                                <th>Juli</th>
                                <th>Agustus</th>
                                <th>September</th>
                                <th>Oktober</th>
                                <th>November</th>
                                <th>Desember</th>
                            </tr>
                        </thead>
                        @php
                            $count = 0;
                        @endphp
                        <tbody>
                            <tr>
                                <td>Utama</td>
                                <td>
                                    {{ "Rp. " . number_format(\App\Models\Pemasukan::where('status', 1)->where('kategori', 'Utama')->whereMonth('tanggal', '=', 1)->whereYear('tanggal', '=', date('Y'))->sum('nominal')) }}
                                </td>
                                <td>
                                    {{ "Rp. " . number_format(\App\Models\Pemasukan::where('status', 1)->where('kategori', 'Utama')->whereMonth('tanggal', '=', 2)->whereYear('tanggal', '=', date('Y'))->sum('nominal')) }}
                                </td>
                                <td>
                                    {{ "Rp. " . number_format(\App\Models\Pemasukan::where('status', 1)->where('kategori', 'Utama')->whereMonth('tanggal', '=', 3)->whereYear('tanggal', '=', date('Y'))->sum('nominal')) }}
                                </td>
                                <td>
                                    {{ "Rp. " . number_format(\App\Models\Pemasukan::where('status', 1)->where('kategori', 'Utama')->whereMonth('tanggal', '=', 4)->whereYear('tanggal', '=', date('Y'))->sum('nominal')) }}
                                </td>
                                <td>
                                    {{ "Rp. " . number_format(\App\Models\Pemasukan::where('status', 1)->where('kategori', 'Utama')->whereMonth('tanggal', '=', 5)->whereYear('tanggal', '=', date('Y'))->sum('nominal')) }}
                                </td>
                                <td>
                                    {{ "Rp. " . number_format(\App\Models\Pemasukan::where('status', 1)->where('kategori', 'Utama')->whereMonth('tanggal', '=', 6)->whereYear('tanggal', '=', date('Y'))->sum('nominal')) }}
                                </td>
                                <td>
                                    {{ "Rp. " . number_format(\App\Models\Pemasukan::where('status', 1)->where('kategori', 'Utama')->whereMonth('tanggal', '=', 7)->whereYear('tanggal', '=', date('Y'))->sum('nominal')) }}
                                </td>
                                <td>
                                    {{ "Rp. " . number_format(\App\Models\Pemasukan::where('status', 1)->where('kategori', 'Utama')->whereMonth('tanggal', '=', 8)->whereYear('tanggal', '=', date('Y'))->sum('nominal')) }}
                                </td>
                                <td>
                                    {{ "Rp. " . number_format(\App\Models\Pemasukan::where('status', 1)->where('kategori', 'Utama')->whereMonth('tanggal', '=', 9)->whereYear('tanggal', '=', date('Y'))->sum('nominal')) }}
                                </td>
                                <td>
                                    {{ "Rp. " . number_format(\App\Models\Pemasukan::where('status', 1)->where('kategori', 'Utama')->whereMonth('tanggal', '=', 10)->whereYear('tanggal', '=', date('Y'))->sum('nominal')) }}
                                </td>
                                <td>
                                    {{ "Rp. " . number_format(\App\Models\Pemasukan::where('status', 1)->where('kategori', 'Utama')->whereMonth('tanggal', '=', 11)->whereYear('tanggal', '=', date('Y'))->sum('nominal')) }}
                                </td>
                                <td>
                                    {{ "Rp. " . number_format(\App\Models\Pemasukan::where('status', 1)->where('kategori', 'Utama')->whereMonth('tanggal', '=', 12)->whereYear('tanggal', '=', date('Y'))->sum('nominal')) }}
                                </td>
                            <tr>
                                <td>Sampingan</td>
                                <td>
                                    {{ "Rp. " . number_format(\App\Models\Pemasukan::where('status', 1)->where('kategori', 'Sampingan')->whereMonth('tanggal', '=', 1)->whereYear('tanggal', '=', date('Y'))->sum('nominal')) }}
                                </td>
                                <td>
                                    {{ "Rp. " . number_format(\App\Models\Pemasukan::where('status', 1)->where('kategori', 'Sampingan')->whereMonth('tanggal', '=', 2)->whereYear('tanggal', '=', date('Y'))->sum('nominal')) }}
                                </td>
                                <td>
                                    {{ "Rp. " . number_format(\App\Models\Pemasukan::where('status', 1)->where('kategori', 'Sampingan')->whereMonth('tanggal', '=', 3)->whereYear('tanggal', '=', date('Y'))->sum('nominal')) }}
                                </td>
                                <td>
                                    {{ "Rp. " . number_format(\App\Models\Pemasukan::where('status', 1)->where('kategori', 'Sampingan')->whereMonth('tanggal', '=', 4)->whereYear('tanggal', '=', date('Y'))->sum('nominal')) }}
                                </td>
                                <td>
                                    {{ "Rp. " . number_format(\App\Models\Pemasukan::where('status', 1)->where('kategori', 'Sampingan')->whereMonth('tanggal', '=', 5)->whereYear('tanggal', '=', date('Y'))->sum('nominal')) }}
                                </td>
                                <td>
                                    {{ "Rp. " . number_format(\App\Models\Pemasukan::where('status', 1)->where('kategori', 'Sampingan')->whereMonth('tanggal', '=', 6)->whereYear('tanggal', '=', date('Y'))->sum('nominal')) }}
                                </td>
                                <td>
                                    {{ "Rp. " . number_format(\App\Models\Pemasukan::where('status', 1)->where('kategori', 'Sampingan')->whereMonth('tanggal', '=', 7)->whereYear('tanggal', '=', date('Y'))->sum('nominal')) }}
                                </td>
                                <td>
                                    {{ "Rp. " . number_format(\App\Models\Pemasukan::where('status', 1)->where('kategori', 'Sampingan')->whereMonth('tanggal', '=', 8)->whereYear('tanggal', '=', date('Y'))->sum('nominal')) }}
                                </td>
                                <td>
                                    {{ "Rp. " . number_format(\App\Models\Pemasukan::where('status', 1)->where('kategori', 'Sampingan')->whereMonth('tanggal', '=', 9)->whereYear('tanggal', '=', date('Y'))->sum('nominal')) }}
                                </td>
                                <td>
                                    {{ "Rp. " . number_format(\App\Models\Pemasukan::where('status', 1)->where('kategori', 'Sampingan')->whereMonth('tanggal', '=', 10)->whereYear('tanggal', '=', date('Y'))->sum('nominal')) }}
                                </td>
                                <td>
                                    {{ "Rp. " . number_format(\App\Models\Pemasukan::where('status', 1)->where('kategori', 'Sampingan')->whereMonth('tanggal', '=', 11)->whereYear('tanggal', '=', date('Y'))->sum('nominal')) }}
                                </td>
                                <td>
                                    {{ "Rp. " . number_format(\App\Models\Pemasukan::where('status', 1)->where('kategori', 'Sampingan')->whereMonth('tanggal', '=', 12)->whereYear('tanggal', '=', date('Y'))->sum('nominal')) }}
                                </td>
                            </tr>
                            <tr>
                                <td>Investasi</td>
                                <td>
                                    {{ "Rp. " . number_format(\App\Models\Pemasukan::where('status', 1)->where('kategori', 'Investasi')->whereMonth('tanggal', '=', 1)->whereYear('tanggal', '=', date('Y'))->sum('nominal')) }}
                                </td>
                                <td>
                                    {{ "Rp. " . number_format(\App\Models\Pemasukan::where('status', 1)->where('kategori', 'Investasi')->whereMonth('tanggal', '=', 2)->whereYear('tanggal', '=', date('Y'))->sum('nominal')) }}
                                </td>
                                <td>
                                    {{ "Rp. " . number_format(\App\Models\Pemasukan::where('status', 1)->where('kategori', 'Investasi')->whereMonth('tanggal', '=', 3)->whereYear('tanggal', '=', date('Y'))->sum('nominal')) }}
                                </td>
                                <td>
                                    {{ "Rp. " . number_format(\App\Models\Pemasukan::where('status', 1)->where('kategori', 'Investasi')->whereMonth('tanggal', '=', 4)->whereYear('tanggal', '=', date('Y'))->sum('nominal')) }}
                                </td>
                                <td>
                                    {{ "Rp. " . number_format(\App\Models\Pemasukan::where('status', 1)->where('kategori', 'Investasi')->whereMonth('tanggal', '=', 5)->whereYear('tanggal', '=', date('Y'))->sum('nominal')) }}
                                </td>
                                <td>
                                    {{ "Rp. " . number_format(\App\Models\Pemasukan::where('status', 1)->where('kategori', 'Investasi')->whereMonth('tanggal', '=', 6)->whereYear('tanggal', '=', date('Y'))->sum('nominal')) }}
                                </td>
                                <td>
                                    {{ "Rp. " . number_format(\App\Models\Pemasukan::where('status', 1)->where('kategori', 'Investasi')->whereMonth('tanggal', '=', 7)->whereYear('tanggal', '=', date('Y'))->sum('nominal')) }}
                                </td>
                                <td>
                                    {{ "Rp. " . number_format(\App\Models\Pemasukan::where('status', 1)->where('kategori', 'Investasi')->whereMonth('tanggal', '=', 8)->whereYear('tanggal', '=', date('Y'))->sum('nominal')) }}
                                </td>
                                <td>
                                    {{ "Rp. " . number_format(\App\Models\Pemasukan::where('status', 1)->where('kategori', 'Investasi')->whereMonth('tanggal', '=', 9)->whereYear('tanggal', '=', date('Y'))->sum('nominal')) }}
                                </td>
                                <td>
                                    {{ "Rp. " . number_format(\App\Models\Pemasukan::where('status', 1)->where('kategori', 'Investasi')->whereMonth('tanggal', '=', 10)->whereYear('tanggal', '=', date('Y'))->sum('nominal')) }}
                                </td>
                                <td>
                                    {{ "Rp. " . number_format(\App\Models\Pemasukan::where('status', 1)->where('kategori', 'Investasi')->whereMonth('tanggal', '=', 11)->whereYear('tanggal', '=', date('Y'))->sum('nominal')) }}
                                </td>
                                <td>
                                    {{ "Rp. " . number_format(\App\Models\Pemasukan::where('status', 1)->where('kategori', 'Investasi')->whereMonth('tanggal', '=', 12)->whereYear('tanggal', '=', date('Y'))->sum('nominal')) }}
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">Table Pengeluaran Tahun {{ date('Y') }}</h6>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th>Kategori</th>
                                <th>Januari</th>
                                <th>Februari</th>
                                <th>Maret</th>
                                <th>April</th>
                                <th>Mei</th>
                                <th>Juni</th>
                                <th>Juli</th>
                                <th>Agustus</th>
                                <th>September</th>
                                <th>Oktober</th>
                                <th>November</th>
                                <th>Desember</th>
                            </tr>
                        </thead>
                        @php
                            $count = 0;
                        @endphp
                        <tbody>
                            <tr>
                                <td>Utama</td>
                                <td>
                                    {{ "Rp. " . number_format(\App\Models\Pengeluaran::where('status', 1)->where('kategori', 'Utama')->whereMonth('tanggal', '=', 1)->whereYear('tanggal', '=', date('Y'))->sum('nominal')) }}
                                </td>
                                <td>
                                    {{ "Rp. " . number_format(\App\Models\Pengeluaran::where('status', 1)->where('kategori', 'Utama')->whereMonth('tanggal', '=', 2)->whereYear('tanggal', '=', date('Y'))->sum('nominal')) }}
                                </td>
                                <td>
                                    {{ "Rp. " . number_format(\App\Models\Pengeluaran::where('status', 1)->where('kategori', 'Utama')->whereMonth('tanggal', '=', 3)->whereYear('tanggal', '=', date('Y'))->sum('nominal')) }}
                                </td>
                                <td>
                                    {{ "Rp. " . number_format(\App\Models\Pengeluaran::where('status', 1)->where('kategori', 'Utama')->whereMonth('tanggal', '=', 4)->whereYear('tanggal', '=', date('Y'))->sum('nominal')) }}
                                </td>
                                <td>
                                    {{ "Rp. " . number_format(\App\Models\Pengeluaran::where('status', 1)->where('kategori', 'Utama')->whereMonth('tanggal', '=', 5)->whereYear('tanggal', '=', date('Y'))->sum('nominal')) }}
                                </td>
                                <td>
                                    {{ "Rp. " . number_format(\App\Models\Pengeluaran::where('status', 1)->where('kategori', 'Utama')->whereMonth('tanggal', '=', 6)->whereYear('tanggal', '=', date('Y'))->sum('nominal')) }}
                                </td>
                                <td>
                                    {{ "Rp. " . number_format(\App\Models\Pengeluaran::where('status', 1)->where('kategori', 'Utama')->whereMonth('tanggal', '=', 7)->whereYear('tanggal', '=', date('Y'))->sum('nominal')) }}
                                </td>
                                <td>
                                    {{ "Rp. " . number_format(\App\Models\Pengeluaran::where('status', 1)->where('kategori', 'Utama')->whereMonth('tanggal', '=', 8)->whereYear('tanggal', '=', date('Y'))->sum('nominal')) }}
                                </td>
                                <td>
                                    {{ "Rp. " . number_format(\App\Models\Pengeluaran::where('status', 1)->where('kategori', 'Utama')->whereMonth('tanggal', '=', 9)->whereYear('tanggal', '=', date('Y'))->sum('nominal')) }}
                                </td>
                                <td>
                                    {{ "Rp. " . number_format(\App\Models\Pengeluaran::where('status', 1)->where('kategori', 'Utama')->whereMonth('tanggal', '=', 10)->whereYear('tanggal', '=', date('Y'))->sum('nominal')) }}
                                </td>
                                <td>
                                    {{ "Rp. " . number_format(\App\Models\Pengeluaran::where('status', 1)->where('kategori', 'Utama')->whereMonth('tanggal', '=', 11)->whereYear('tanggal', '=', date('Y'))->sum('nominal')) }}
                                </td>
                                <td>
                                    {{ "Rp. " . number_format(\App\Models\Pengeluaran::where('status', 1)->where('kategori', 'Utama')->whereMonth('tanggal', '=', 12)->whereYear('tanggal', '=', date('Y'))->sum('nominal')) }}
                                </td>
                            <tr>
                                <td>Sampingan</td>
                                <td>
                                    {{ "Rp. " . number_format(\App\Models\Pengeluaran::where('status', 1)->where('kategori', 'Sampingan')->whereMonth('tanggal', '=', 1)->whereYear('tanggal', '=', date('Y'))->sum('nominal')) }}
                                </td>
                                <td>
                                    {{ "Rp. " . number_format(\App\Models\Pengeluaran::where('status', 1)->where('kategori', 'Sampingan')->whereMonth('tanggal', '=', 2)->whereYear('tanggal', '=', date('Y'))->sum('nominal')) }}
                                </td>
                                <td>
                                    {{ "Rp. " . number_format(\App\Models\Pengeluaran::where('status', 1)->where('kategori', 'Sampingan')->whereMonth('tanggal', '=', 3)->whereYear('tanggal', '=', date('Y'))->sum('nominal')) }}
                                </td>
                                <td>
                                    {{ "Rp. " . number_format(\App\Models\Pengeluaran::where('status', 1)->where('kategori', 'Sampingan')->whereMonth('tanggal', '=', 4)->whereYear('tanggal', '=', date('Y'))->sum('nominal')) }}
                                </td>
                                <td>
                                    {{ "Rp. " . number_format(\App\Models\Pengeluaran::where('status', 1)->where('kategori', 'Sampingan')->whereMonth('tanggal', '=', 5)->whereYear('tanggal', '=', date('Y'))->sum('nominal')) }}
                                </td>
                                <td>
                                    {{ "Rp. " . number_format(\App\Models\Pengeluaran::where('status', 1)->where('kategori', 'Sampingan')->whereMonth('tanggal', '=', 6)->whereYear('tanggal', '=', date('Y'))->sum('nominal')) }}
                                </td>
                                <td>
                                    {{ "Rp. " . number_format(\App\Models\Pengeluaran::where('status', 1)->where('kategori', 'Sampingan')->whereMonth('tanggal', '=', 7)->whereYear('tanggal', '=', date('Y'))->sum('nominal')) }}
                                </td>
                                <td>
                                    {{ "Rp. " . number_format(\App\Models\Pengeluaran::where('status', 1)->where('kategori', 'Sampingan')->whereMonth('tanggal', '=', 8)->whereYear('tanggal', '=', date('Y'))->sum('nominal')) }}
                                </td>
                                <td>
                                    {{ "Rp. " . number_format(\App\Models\Pengeluaran::where('status', 1)->where('kategori', 'Sampingan')->whereMonth('tanggal', '=', 9)->whereYear('tanggal', '=', date('Y'))->sum('nominal')) }}
                                </td>
                                <td>
                                    {{ "Rp. " . number_format(\App\Models\Pengeluaran::where('status', 1)->where('kategori', 'Sampingan')->whereMonth('tanggal', '=', 10)->whereYear('tanggal', '=', date('Y'))->sum('nominal')) }}
                                </td>
                                <td>
                                    {{ "Rp. " . number_format(\App\Models\Pengeluaran::where('status', 1)->where('kategori', 'Sampingan')->whereMonth('tanggal', '=', 11)->whereYear('tanggal', '=', date('Y'))->sum('nominal')) }}
                                </td>
                                <td>
                                    {{ "Rp. " . number_format(\App\Models\Pengeluaran::where('status', 1)->where('kategori', 'Sampingan')->whereMonth('tanggal', '=', 12)->whereYear('tanggal', '=', date('Y'))->sum('nominal')) }}
                                </td>
                            </tr>
                            <tr>
                                <td>Investasi</td>
                                <td>
                                    {{ "Rp. " . number_format(\App\Models\Pengeluaran::where('status', 1)->where('kategori', 'Investasi')->whereMonth('tanggal', '=', 1)->whereYear('tanggal', '=', date('Y'))->sum('nominal')) }}
                                </td>
                                <td>
                                    {{ "Rp. " . number_format(\App\Models\Pengeluaran::where('status', 1)->where('kategori', 'Investasi')->whereMonth('tanggal', '=', 2)->whereYear('tanggal', '=', date('Y'))->sum('nominal')) }}
                                </td>
                                <td>
                                    {{ "Rp. " . number_format(\App\Models\Pengeluaran::where('status', 1)->where('kategori', 'Investasi')->whereMonth('tanggal', '=', 3)->whereYear('tanggal', '=', date('Y'))->sum('nominal')) }}
                                </td>
                                <td>
                                    {{ "Rp. " . number_format(\App\Models\Pengeluaran::where('status', 1)->where('kategori', 'Investasi')->whereMonth('tanggal', '=', 4)->whereYear('tanggal', '=', date('Y'))->sum('nominal')) }}
                                </td>
                                <td>
                                    {{ "Rp. " . number_format(\App\Models\Pengeluaran::where('status', 1)->where('kategori', 'Investasi')->whereMonth('tanggal', '=', 5)->whereYear('tanggal', '=', date('Y'))->sum('nominal')) }}
                                </td>
                                <td>
                                    {{ "Rp. " . number_format(\App\Models\Pengeluaran::where('status', 1)->where('kategori', 'Investasi')->whereMonth('tanggal', '=', 6)->whereYear('tanggal', '=', date('Y'))->sum('nominal')) }}
                                </td>
                                <td>
                                    {{ "Rp. " . number_format(\App\Models\Pengeluaran::where('status', 1)->where('kategori', 'Investasi')->whereMonth('tanggal', '=', 7)->whereYear('tanggal', '=', date('Y'))->sum('nominal')) }}
                                </td>
                                <td>
                                    {{ "Rp. " . number_format(\App\Models\Pengeluaran::where('status', 1)->where('kategori', 'Investasi')->whereMonth('tanggal', '=', 8)->whereYear('tanggal', '=', date('Y'))->sum('nominal')) }}
                                </td>
                                <td>
                                    {{ "Rp. " . number_format(\App\Models\Pengeluaran::where('status', 1)->where('kategori', 'Investasi')->whereMonth('tanggal', '=', 9)->whereYear('tanggal', '=', date('Y'))->sum('nominal')) }}
                                </td>
                                <td>
                                    {{ "Rp. " . number_format(\App\Models\Pengeluaran::where('status', 1)->where('kategori', 'Investasi')->whereMonth('tanggal', '=', 10)->whereYear('tanggal', '=', date('Y'))->sum('nominal')) }}
                                </td>
                                <td>
                                    {{ "Rp. " . number_format(\App\Models\Pengeluaran::where('status', 1)->where('kategori', 'Investasi')->whereMonth('tanggal', '=', 11)->whereYear('tanggal', '=', date('Y'))->sum('nominal')) }}
                                </td>
                                <td>
                                    {{ "Rp. " . number_format(\App\Models\Pengeluaran::where('status', 1)->where('kategori', 'Investasi')->whereMonth('tanggal', '=', 12)->whereYear('tanggal', '=', date('Y'))->sum('nominal')) }}
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

    </div>
    <!-- /.container-fluid -->

@endsection