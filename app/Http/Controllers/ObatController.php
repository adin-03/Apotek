<?php

namespace App\Http\Controllers;

use App\Merk;
use App\Obat;
use function GuzzleHttp\Psr7\str;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class ObatController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $obats = Obat::all();
        return view('pages.admin.obat.index', compact('obats'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $datas = Merk::all();
        return view('pages.admin.obat.create', compact('datas'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $obat = Obat::latest()->first();
        $substr = substr($obat->kode_obat, -1);
        $int = (int)$substr;
        $data = new Obat();
        $data->id_merk = $request->id_merk;
        $data->kode_obat = 'obat'.$int+1;
        $data->nama_produk = $request->nama_produk;
        $data->satuan = $request->satuan;
        $data->harga = $request->harga;
        $data->stok = $request->stok;
        $data->sisa_stok = $request->stok;
        $data->save();
        return redirect()->route('obat.index');
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
        $obats = Obat::find($id);
        return view('pages.admin.obat.edit', compact('obats'));
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
        $obats = Obat::find($id);
        $obats->nama_produk = $request->nama_produk;
        $obats->satuan = $request->satuan;
        $obats->harga = $request->harga;
        $obats->stok = $request->stok;
        $obats->save();
        return redirect()->route('obat.index');
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
