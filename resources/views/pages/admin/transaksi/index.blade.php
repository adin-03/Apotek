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
                    <form action="{{route('transaksi.search')}}" method="get">
                        @csrf
                        <div class="row">
                            @php($bulan = ['Januari', 'Febuari', 'Maret', 'April', 'Mei', 'Juni', 'Juli', 'Agustus', 'September', 'Oktober', 'November', 'Desember'])
                            <select class="form-control col-md-3 mr-2 ml-3" name="search_bulan_1">
                                @for($i = 0; $i < count($bulan); $i++)
                                    <option value="{{$i}}">{{$bulan[$i]}}</option>
                                @endfor
                            </select>

                            <select class="form-control col-md-3 mr-3" name="search_bulan_2">
                                @for($i = 0; $i < count($bulan); $i++)
                                    <option value="{{$i}}">{{$bulan[$i]}}</option>
                                @endfor
                            </select>

                            <button class="btn btn-primary" type="submit">search</button>

                        </div>
                    </form>
                    <a href="{{route('transaksi.create')}}" class="btn btn-info btn-md float-right mb-3">Tambah</a>
                    <div class="table-responsive">
                        <table id="example" class="display" style="width:100%">
                            <thead>
                            <tr>
                                <th>Id</th>
                                <th>Nama Obat</th>
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
                                    <th>{{$transaksi->obat->nama_produk}}</th>
                                    <th>{{$transaksi->stok}}</th>
                                    <th>{{\Carbon\Carbon::parse($transaksi->tanggal)->format('d M Y')}}</th>
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
