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
                    <label for="">Nama Mahasiswa</label>
                    <input class="form-control" type="text" name="nama">
                </div>

                <div class="form-group">
                    <label for="">Nomor Pokok Mahasiswa</label>
                    <input class="form-control" type="number" name="npm">
                </div>
<<<<<<< HEAD

                <div class="form-group">
              <label class="control-label col-sm-1">Alamat</label>
              <div class="col-sm-10">
                <textarea type="text" name="alamat" class="form-control placeholder" Masukkan Alamat Lengkap> {!! @$result->alamat !!}</textarea>
              </div>
            </div>
=======
>>>>>>> 1888499140fe53cc386ebd175c836e8851f660d2
                
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

<<<<<<< HEAD
                
=======
                 <div class="form-group">
              <label class="control-label col-sm-2">Alamat</label>
              <div class="col-sm-10">
                <textarea type="text" name="alamat" class="form-control placeholder" Masukkan Alamat Lengkap> {!! @$result->alamat !!}</textarea>
              </div>
            </div>
>>>>>>> 1888499140fe53cc386ebd175c836e8851f660d2

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