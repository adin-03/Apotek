@extends('templates.admin')
@section('content')
    <div class="row">
        <div class="col-sm-12">
            <div class="iq-card">
                <div class="iq-card-header d-flex justify-content-between">
                    <div class="iq-header-title">
                        <h4 class="card-title">Laporan Transaksi</h4>
                    </div>
                    <a href="{{route('transaksi.create')}}" class="btn btn-info btn-md float-right">Tambah</a>
                </div>
                <div class="iq-card-body">
                    <div class="table-responsive">
                        <table id="example" class="display" style="width:100%">
                            <thead>
                            <tr>
                                <th>Id</th>
                                <th>Kode Obat</th>
                                <th>Stok</th>
                                <th>Tanggal</th>
                                <th>Harga</th>
                                <th>Total Harga</th>
                                <th>Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($transaksis as $transaksi)
                                <tr>
                                    <th>{{$transaksi->id}}</th>
                                    <th>{{$transaksi->kode_obat}}</th>
                                    <th>{{$transaksi->stok}}</th>
                                    <th>{{$transaksi->tanggal}}</th>
                                    <th>{{$transaksi->harga}}</th>
                                    <th>{{$transaksi->total_harga}}</th>
                                    <th>
                                        <button class="btn btn-danger">Hapus</button>
                                        <button class="btn btn-warning">Edit</button>
                                    </th>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection