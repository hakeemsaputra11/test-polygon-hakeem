@extends('top')
@section('content')

    <!-- Begin Page Content -->
    <div class="container-fluid">

        <!-- Page Heading -->
        <h1 class="h3 mb-4 text-gray-800">Edit Data Pemasukan</h1>

        <!-- Form Edit Data Pemasukan -->
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">Edit Data Pemasukan</h6>
            </div>

            <div class="card-body">
                <div class="row">
                    <div class="col-12">
                        <form action="{{ url('updatepemasukan', $data->id) }}" method="POST">
                            @csrf
                            <div class="form-group">
                                <label class="text-gray-900" for="tanggal">Tanggal</label>
                                <input class="form-control" type="date" name="tanggal" value="{{ $data->tanggal }}" required autofocus>
                            </div>
                            <div class="form-group">
                                <label class="text-gray-900" for="kategori">Kategori</label>
                                <select class="form-control" name="kategori" required>
                                    <option value="">Pilih Kategori</option>
                                    <option value="Utama" {{ $data->kategori == 'Utama' ? 'selected' : '' }}>Utama</option>
                                    <option value="Sampingan" {{ $data->kategori == 'Sampingan' ? 'selected' : '' }}>Sampingan</option>
                                    <option value="Investasi" {{ $data->kategori == 'Investasi' ? 'selected' : '' }}>Investasi</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label class="text-gray-900" for="nominal">Nominal (Rp.)</label>
                                <input class="form-control" type="number" min="0" name="nominal" placeholder="Masukkan Nominal" value="{{ $data->nominal }}" required>
                            </div>
                            <div class="form-group">
                                <label class="text-gray-900" for="keterangan">Keterangan</label>
                                <textarea class="form-control" name="keterangan" cols="30" rows="5">{{ $data->keterangan }}</textarea>
                            </div>
                            <div class="form-group text-right">
                                <a href="{{ route('laporans.index') }}" class="btn btn-danger">
                                    Cancel
                                </a>
                                <button class="btn btn-primary" type="submit" name="submit">
                                    Edit Data Pemasukan
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>

    </div>
    <!-- /.container-fluid -->

@endsection