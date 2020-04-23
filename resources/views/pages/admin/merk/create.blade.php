@extends('templates.admin')
@section('content')
    <div class="row">
        <div class="col-sm-12 col-lg-12">
            <div class="iq-card">
                <div class="iq-card-header d-flex justify-content-between">
                    <div class="iq-header-title">
                        <h4 class="card-title">Tambah Merk</h4>
                    </div>
                </div>
                <div class="iq-card-body">
                    <form method="post" action="{{route('merk.store')}}">
                        @csrf

                        <div class="form-group">
                            <label>Merk</label>
                            <input type="text"
                                   class="form-control {{$errors->has('merk')?'is-invalid':''}}"
                                   placeholder="Merk" name="merk" value="{{old('merk')}}">
                            @if ($errors->has('merk'))
                                <span class="invalid-feedback" role="alert">
                                    <p><b>{{ $errors->first('merk') }}</b></p>
                                </span>
                            @endif
                        </div>

                        <button type="submit" class="btn btn-primary">Submit</button>
                        <a href="{{route('merk.index')}}" class="btn btn-warning">Cancel</a>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection