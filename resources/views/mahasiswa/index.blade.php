@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center" >
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    <div class="dropdown">
<<<<<<< HEAD
                        <!-- <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                          Menu
                        </button> -->
=======
                        <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                          Menu
                        </button>
>>>>>>> 1888499140fe53cc386ebd175c836e8851f660d2
                        {{-- <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                            <a class="dropdown-item" href="{{ route('dosen.index') }}">Dosen</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="{{ route('hobi.index') }}">Hobi</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="{{ route('mahasiswa.index') }}">Mahasiswa</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="{{ route('wali.index') }}">Wali</a>
                        </div> --}}
                    </div>
                    <center><h4>Data Mahasiswa</h4></center>
                </div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    {{-- --}}

                    <div class="table-responsive">
                    <center><a href="{{ route('mahasiswa.create') }}" class="btn btn-info">Tambah Data</a></center>
                    <br>
                    <table class="table">
                        <tr>
                            <th>No</th>
                            <th>Nama Mahasiswa</th>
                            <th>Nomor Pokok Mahasiswa</th>
                            <th>Alamat</th>
<<<<<<< HEAD
                            <th colspan="3" style="text-align:center;">Aksi</th>
=======
                            <th colspan="3" style="text-align:center;"></th>
>>>>>>> 1888499140fe53cc386ebd175c836e8851f660d2
                        </tr>
                        @php $no = 1 @endphp
                        @foreach ($mhs as $data)
                            <tr>
                            <td>{{$no++}}</td>
                            <td>{{$data->nama}}</td>
                            <td>{{$data->npm}}</td>
                            <td>{{$data->alamat}}</td>
                            <td>
                                <ol>
                                    @endforeach
                                </ol>
                            </td> 
                            </tr>
                            
                            {{-- <td>
                                <a href="{{ route('mahasiswa.show', $data->id) }}" class = "btn btn-warning">Show</a>
                            </td>

                            <td>
                                <a href="{{ route('mahasiswa.edit', $data->id) }}" class = "btn btn-success">Edit</a>
                            </td>

                            <td>
                                <form action="{{ route('mahasiswa.destroy', $data->id) }}" method = "POST">
                                {{ csrf_field() }}
                                <input type="hidden" name="_method" value="DELETE">
                                <button type="submit" class="btn btn-danger">Delete</button> --}}
                                {{-- </form>
                            </td>
                        </tr> --}}
                        {{-- @endforeach --}}
                    </table>
                </div>

                {{-- --}}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection