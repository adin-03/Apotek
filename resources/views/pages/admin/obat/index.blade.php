@extends('templates.admin')
@section('content')
    <div class="row">
        <div class="col-sm-12">
            <div class="iq-card">
                <div class="iq-card-header d-flex justify-content-between">
                    <div class="iq-header-title">
                        <h4 class="card-title">Data Obat</h4>
                    </div>
                    <a href="{{route('obat.create')}}" class="btn btn-info btn-md float-right">Tambah</a>

                </div>
                <div class="iq-card-body">
                    <div class="table-responsive">
                        <table id="example" class="display" style="width:100%">
                            <thead>
                            <tr>
                                <th>Id</th>
                                <th>Kode</th>
                                <th>Id Merk</th>
                                <th>Nama Produk</th>
                                <th>Satuan</th>
                                <th>Harga</th>
                                <th>Stok</th>
                                <th>Sisa Stok</th>
                                <th>action</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($obats as $obat)
                                <tr>
                                    <th>{{$obat->id}}</th>
                                    <th>{{$obat->kode_obat}}</th>
                                    <th>{{$obat->id_merk}}</th>
                                    <th>{{$obat->nama_produk}}</th>
                                    <th>{{$obat->satuan}}</th>
                                    <th>{{$obat->harga}}</th>
                                    <th>{{$obat->stok}}</th>
                                    <th>{{$obat->sisa_stok}}</th>
                                    <td>
                                        <button class="btn btn-danger">Hapus</button>
                                        <a class="btn btn-warning" href="{{ route('obat.edit', $obat->id) }}"
                                           onclick="return confirm('Apakah Anda Akan Edit Data Ini?')" type="button" class="btn default btn-outline btn-circle m-b-10">Edit</a>
                                    </td>
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