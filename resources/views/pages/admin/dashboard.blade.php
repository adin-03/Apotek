@extends('templates.admin')
@section('content')
    <div class="row">
        <div class="col-sm-12">
            <div class="iq-card">
                <div class="iq-card-header d-flex justify-content-between">
                    <div class="iq-header-title">
                        <h4 class="card-title">Dashboard</h4>
                    </div>

                </div>
                <div class="iq-card-body">
                    <div class="card">
                        @foreach($datas as $data)
                            {{$data->obat->nama_produk.' = '}} <br>
                        @endforeach
                        {{$total}}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
