<?php

namespace App\Http\Controllers;

use App\Models\Pemasukan;
use App\Models\Pengeluaran;
use Illuminate\Http\Request;

class LaporanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pemasukan = Pemasukan::orderBy('tanggal', 'ASC')->get();
        $pengeluaran = Pengeluaran::orderBy('tanggal', 'ASC')->get();
        $active = 'laporan';
        return view('laporan.index', compact('pemasukan', 'pengeluaran', 'active'))->with('i');
    }

    public function approvePemasukan($id)
    {
        try {
            $pemasukan = Pemasukan::where('id', $id)->first();
            $pemasukan->status = 1;
            $pemasukan->save();

            return redirect()->route('laporans.index')->with('success', 'Data Approved!');
        } catch (\Throwable $th) {
            return redirect()->route('laporans.index')->with('error', $th->getMessage());
        }
    }

    public function approvePengeluaran($id)
    {
        try {
            $pengeluaran = Pengeluaran::where('id', $id)->first();
            $pengeluaran->status = 1;
            $pengeluaran->save();

            return redirect()->route('laporans.index')->with('success', 'Data Approved!');
        } catch (\Throwable $th) {
            return redirect()->route('laporans.index')->with('error', $th->getMessage());
        }
    }

    public function showEditPemasukan($id)
    {
        $data = Pemasukan::where('id', $id)->first();
        $active = 'laporan';
        return view('laporan.edit-pemasukan', compact('data', 'active'));
    }

    public function updatePemasukan(Request $request, $id)
    {
        $request->validate([
            'tanggal' => 'required',
            'kategori' => 'required',
            'nominal' => 'required',
        ]);

        try {
            $data = Pemasukan::where('id', $id)->first();
            $data->tanggal = $request->tanggal;
            $data->kategori = $request->kategori;
            $data->nominal = $request->nominal;
            $data->keterangan = $request->keterangan;
            $data->save();

            return redirect()->route('laporans.index')->with('success', 'Berhasil mengedit data!');
        } catch (\Throwable $th) {
            return redirect()->route('laporans.index')->with('error', $th->getMessage());
        }
    }

    public function deletePemasukan($id)
    {
        try {
            $data = Pemasukan::where('id', $id)->first();
            $data->delete();

            return redirect()->route('laporans.index')->with('success', 'Berhasil menghapus data!');
        } catch (\Throwable $th) {
            return redirect()->route('laporans.index')->with('error', $th->getMessage());
        }
    }

    public function showEditPengeluaran($id)
    {
        $data = Pengeluaran::where('id', $id)->first();
        $active = 'laporan';
        return view('laporan.edit-pengeluaran', compact('data', 'active'));
    }

    public function updatePengeluaran(Request $request, $id)
    {
        $request->validate([
            'tanggal' => 'required',
            'kategori' => 'required',
            'nominal' => 'required',
        ]);

        try {
            $data = Pengeluaran::where('id', $id)->first();
            $data->tanggal = $request->tanggal;
            $data->kategori = $request->kategori;
            $data->nominal = $request->nominal;
            $data->keterangan = $request->keterangan;
            $data->save();

            return redirect()->route('laporans.index')->with('success', 'Berhasil mengedit data!');
        } catch (\Throwable $th) {
            return redirect()->route('laporans.index')->with('error', $th->getMessage());
        }
    }

    public function deletePengeluaran($id)
    {
        try {
            $data = Pengeluaran::where('id', $id)->first();
            $data->delete();

            return redirect()->route('laporans.index')->with('success', 'Berhasil menghapus data!');
        } catch (\Throwable $th) {
            return redirect()->route('laporans.index')->with('error', $th->getMessage());
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
