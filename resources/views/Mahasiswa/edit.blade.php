@extends('layout.template')

@section('content')
<form action="{{ url('mahasiswa/'.$model->id) }}" method="POST">
  @csrf
  <input type="hidden" name="_method" value="PATCH">
  <div class="form-group">
    <label for="nama">Nama</label>
    <input type="text" name="nama" class="form-control" value="{{ $model->nama }}">
  </div>
  <div class="form-group">
    <label for="npm">npm</label>
    <input type="text" name="npm" class="form-control" value="{{ $model->npm }}">
  </div>
  <div class="form-group">
    <label for="jurusan">jurusan</label>
    <input type="text" name="jurusan" class="form-control" value="{{ $model->jurusan }}">
  </div>
  <div class="form-group">
    <label for="tanggal_masuk">tanggal_masuk</label>
    <input type="date" name="tanggal_masuk" class="form-control" value="{{ $model->tanggal_masuk }}">
  </div>
  <div class="form-group mt-3">
    <button class="btn btn-primary" type="submit">Simpan</button>
  </div>
</form>
@endsection