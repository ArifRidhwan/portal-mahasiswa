@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                <form action="{{ route('mahasiswa.store') }}" method="POST">
                {{ csrf_field() }}

                <div class="form-group">
                    <label for="">NPM</label>
                    <input class="form-control" type="number" name="npm">
                </div>
     
                <div class="form-group">
                    <label for="">Nama Lengkap Mahasiswa</label>
                    <input class="form-control" type="text" name="nama">
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
              <label class="control-label col-sm-2">Alamat</label>
              <div class="col-sm-10">
                <textarea type="text" name="alamat" class="form-control placeholder" Masukkan Alamat Lengkap> {!! @$result->alamat !!}</textarea>
              </div>
            </div>
                
                {{-- <div class="form-group">
                    <label for="">Nama Dosen</label>
                    <select class="form-control" name="id_dosen">
                        @foreach ($dosen as $data)
                        <option value="{{ $data->id }}">{{ $data->nama }}</option>
                        @endforeach
                    </select>
                </div> --}}

                {{-- <div class="form-group">
                    <label for="">Hobi</label>
                    <select name="hobi[]" class="form-control multiple" multiple>
                        @foreach ($hobi as $data)
                            <option value="{{ $data->id }}">{{ $data->hobi }}</option>
                        @endforeach
                    </select>
                </div> --}}

                

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