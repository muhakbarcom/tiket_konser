@extends('layout.template')

@section('content')
<h2>Data Konser</h2>
<form action="{{ url('konser/'.$model->id) }}" method="POST">
  @csrf
  <input type="hidden" name="_method" value="PATCH">
  <div class="form-group">
    <label for="nama">Nama Konser</label>
    <input type="text" name="nama_konser" class="form-control" value="{{ $model->nama_konser }}">
  </div>
  <div class="form-group">
    <label for="tanggal">tanggal</label>
    <input type="date" name="tanggal" class="form-control" value="{{ $model->tanggal }}">
  </div>

  <div class="form-group mt-3">
    <button class="btn btn-primary" type="submit">Simpan</button>
  </div>
</form>
@endsection