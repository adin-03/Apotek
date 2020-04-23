@extends('templates.admin')
@section('content')
    <div class="row">
        <div class="col-sm-12 col-lg-12">
            <div class="iq-card">
                <div class="iq-card-header d-flex justify-content-between">
                    <div class="iq-header-title">
                        <h4 class="card-title">Tambah Transaksi</h4>
                    </div>
                </div>
                <div class="iq-card-body">
                    <form method="post" action="{{route('transaksi.store')}}">
                        @csrf

                    <form>
                        <div class="form-group">
                            <label>Nama Produk</label>
                            <select class="form-control" name="id_obat">
                                @foreach($datas as $data)
                                    <option value="{{$data->id}}">{{$data->nama_produk}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <label>Stok</label>
                            <input type="number" class="form-control" name="stok">
                        </div>
                        <div class="form-group">
                            <label>Tanggal</label>
                            <input type="date" class="form-control" name="tanggal">
                        </div>

                        <button type="submit" class="btn btn-primary">Submit</button>
                        <a href="{{route('transaksi.index')}}" class="btn btn-warning">Cancel</a>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection