@extends('templates.admin')
@section('content')
    <div class="row">
        <div class="col-sm-12 col-lg-12">
            <div class="iq-card">
                <div class="iq-card-header d-flex justify-content-between">
                    <div class="iq-header-title">
                        <h4 class="card-title">Edit Obat</h4>
                    </div>
                </div>
                <div class="iq-card-body">
                    <form method="post" action="{{route('obat.update', $obats->id)}}">
                        @method('PATCH')
                        @csrf

                        <div class="form-group">
                            <label>Merk</label>
                            <select class="form-control" name="id_merk">
                                @foreach($obats as $obat)
                                    <option value="{{$obats->merk}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <label>Nama Produk</label>
                            <input type="text" value="{{$obats -> nama_produk}}" class="form-control" name="nama_produk">
                        </div>
                        <div class="form-group">
                            <label>Satuan</label>
                            <input type="text" value="{{$obats -> satuan}}" class="form-control" name="satuan">
                        </div>
                        <div class="form-group">
                            <label>Harga</label>
                            <input type="number" value="{{$obats -> harga}}" class="form-control" name="harga">
                        </div>
                        <div class="form-group">
                            <label>Stok</label>
                            <input type="number" value="{{$obats -> stok}}" class="form-control" name="stok">
                        </div>

                        <button type="submit" class="btn btn-primary">Submit</button>
                        <a href="{{route('obat.index')}}" class="btn btn-warning">Cancel</a>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection