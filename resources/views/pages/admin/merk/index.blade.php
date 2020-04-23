@extends('templates.admin')
@section('content')
    <div class="row">
        <div class="col-sm-12">
            <div class="iq-card">
                <div class="iq-card-header d-flex justify-content-between">
                    <div class="iq-header-title">
                        <h4 class="card-title">Data Merk</h4>
                    </div>
                    <a href="{{route("merk.create")}}" class="btn btn-info btn-md float-right">Tambah</a>
                </div>
                <div class="iq-card-body">
                    <div class="table-responsive">
                        <table id="example" class="display" style="width:100%">
                            <thead>
                            <tr>
                                <th>Id</th>
                                <th>Merk</th>
                                <th>Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($merks as $merk)
                                <tr>
                                    <th>{{$merk->id}}</th>
                                    <th>{{$merk->merk}}</th>
                                    <td>
                                        <a class="btn btn-warning" href="{{ route('merk.edit', $merk->id) }}"
                                           onclick="return confirm('Apakah Anda Akan Edit Data Ini?')" type="button" class="btn default btn-outline btn-circle m-b-10">Edit</a>
                                        <a class="btn btn-danger" href="{{ route('merk.destroy', $merk->id) }}"
                                        onclick="return confirm('Apakah Anda Akan Menghapus Data Ini?')" type="button" class="btn default btn-outline btn-circle m-b-10">Delete</a>
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