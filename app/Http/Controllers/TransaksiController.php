<?php

namespace App\Http\Controllers;

use App\Obat;
use App\Transaksi;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Psy\Util\Str;

class TransaksiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */


    public function index()
    {
        $transaksis = Transaksi::all();
        return view('pages.admin.transaksi.index', compact('transaksis'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $datas = Obat::all();
        return view('pages.admin.transaksi.create', compact('datas'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $obat = Obat::where('id', $request->id_obat)->first();
//        dd($obat);
        $data = new Transaksi();
        $data->kode_obat = $obat->kode_obat;
        $data->stok = $request->stok;
        $data->tanggal = $request->tanggal;
        $data->harga = $obat->harga;
        $data->total_harga = $obat->harga * $request->stok;
        $data->save();
        $obat->update([
            'sisa_stok' => $obat->stok - $request->stok
        ]);
//        dd($data);
        return redirect()->route('transaksi.index');

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

    public function search(Request $request)
    {
        $dates1 = ['01-01', '02-01', '03-01', '04-01', '05-01', '06-01', '07-01', '08-01', '09-01', '10-01', '11-01', '12-01'];
        $dates2 = ['01-31', '02-28', '03-31', '04-30', '05-31', '06-30', '07-31', '08-31', '09-30', '10-31', '11-30', '12-31'];
        $tahun = Carbon::now()->year;
        $get1 = $request->search_bulan_1;
        $get2 = $request->search_bulan_2;
        $bulan1 = $tahun.'-'.$dates1[$get1];
        $bulan2 = $tahun.'-'.$dates2[$get2];
        $transaksis = Transaksi::whereBetween('tanggal', [$bulan1, $bulan2])->get();
        //dd($transaksis);

        return view('pages.admin.transaksi.index', compact('transaksis'));
    }
}
