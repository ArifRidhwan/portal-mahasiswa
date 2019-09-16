@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    <form action="{{ route('mahasiswa.update', $mhs->id) }}" method="POST">
                        <input type="hidden" value="PATCH" name="_method">
                    {{ csrf_field() }}
    
                    <div class="form-group">
                        <label for="">NPM</label>
                        <input class="form-control" type="text" name="npm" value="{{ $mhs->npm }}">
                    </div>

                    <div class="form-group">
                        <label for="">Nama Lengkap</label>
                        <input class="form-control" type="text" name="nama" value="{{ $mhs->nama }}">
                    </div>

                    <div class="form-group">
              <label class="control-label col-sm-4">Jenis Kelamin</label>
              <div class="col-sm-10">
                <div class="checkbox">
                  <label><input type="radio" name="jenis_kelamin" value="L" {{ (@$result->jenis_kelamin == 'Laki-Laki`' ? 'checked' : '') }}>L</label>
                  <label><input type="radio" name="jenis_kelamin" value="P" {{ (@$result->jenis_kelamin == 'Perempuan' ? 'checked' : '') }}>P</label>
                </div>
              </div>
            </div>

            
            <div class="form-group">
              <label class="control-label col-sm-3">Alamat</label>
              <div class="col-sm-10">
                <textarea type="text" name="alamat" class="form-control" rows="3" placeholder="{{$mhs->alamat}}"> </textarea>
              </div>
            </div>

                    <div class="form-group">
                        <button type="submit" class="btn btn-outline-info">Simpan Data</button>
                    </div>
    
                    </form>
                    </div>
            </div>
        </div>
    </div>
</div>
@endsection