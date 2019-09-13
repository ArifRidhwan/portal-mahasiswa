@section('content')

<div class="row">
    <div class="col-12">
      <div class="card">
        <div class="card-header">
          <h4>Hai, <b>{{ Auth::user()->name }}</b>. Buat post sekarang!</h4>
        </div>
        <div class="card-body">
        <form action="{{ route('artikel.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
            <div class="form-group row mb-4">
                <label class="col-form-label text-md-right col-12 col-md-2 col-lg-2">Title</label>
                <div class="col-sm-12 col-md-10">
                    <input name="judul" type="text" class="form-control{{ $errors->has('judul') ? ' is-invalid' : '' }}">

                @if ($errors->has('judul'))
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $errors->first('judul') }}</strong>
                    </span>
                @endif
                </div>
            </div>
          <div class="form-group row mb-4">
            <label class="col-form-label text-md-right col-12 col-md-2 col-lg-2">Category</label>
            <div class="col-sm-12 col-md-10">
              <select class="form-control selectric" name="kategori">
                    <option value="">- Pilih Kategori -</option>
                @foreach($cat as $data)
                    <option value="{{ $data->id }}">{{ $data->nama }}</option>
                @endforeach
              </select>
            </div>
          </div>
          <div class="form-group row mb-4">
            <label class="col-form-label text-md-right col-12 col-md-2 col-lg-2">Content</label>
            <div class="col-sm-12 col-md-10">
                <textarea name="konten" id="editor1"></textarea>

            @if ($errors->has('konten'))
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $errors->first('konten') }}</strong>
                </span>
            @endif
            </div>
          </div>
          <div class="form-group row mb-4">
            <label class="col-form-label text-md-right col-12 col-md-2 col-lg-2">Thumbnail</label>
            <div class="col-sm-12 col-md-10">
              <div id="image-preview" class="image-preview">
                <label for="image-upload" id="image-label">Choose File</label>
                <input type="file" name="foto" id="image-upload" />

            @if ($errors->has('foto'))
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $errors->first('foto') }}</strong>
                </span>
            @endif
              </div>
            </div>
          </div>
          <div class="form-group row mb-4">
            <label class="col-form-label text-md-right col-12 col-md-2 col-lg-2">Tags</label>
            <div class="col-sm-12 col-md-10">
                <select class="form-control selectric" name="tag[]" multiple>
                    {{--  <option value="">- Pilih Tag -</option>  --}}
                    @foreach ($tag as $data)
                        <option value="{{ $data->id }}">{{ $data->name }}</option>
                    @endforeach
                </select>

            @if ($errors->has('tag'))
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $errors->first('tag') }}</strong>
                </span>
            @endif
            </div>
          </div>
          <div class="form-group row mb-4">
            <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3"></label>
            <div class="col-sm-12 col-md-7">
              <button type="submit" class="btn btn-primary">Buat Post</button>
              <a href="{{ route('artikel.index') }}" class="btn btn-secondary">Kembali</a>
            </div>
          </div>
        </form>
        </div>
      </div>
    </div>
  </div>

@endsection