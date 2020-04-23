<?php

namespace App\Http\Controllers;

use App\Obat;
use App\Transaksi;
use Illuminate\Http\Request;
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
}
