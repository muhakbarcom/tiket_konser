@extends('layout.template')

@section('content')
<form action="{{ url('mahasiswa') }}" method="POST">
  @csrf

  <div class="form-group">
    <label for="nama">Nama</label>
    <input type="text" name="nama" class="form-control">
  </div>
  <div class="form-group">
    <label for="npm">npm</label>
    <input type="text" name="npm" class="form-control">
  </div>
  <div class="form-group">
    <label for="jurusan">jurusan</label>
    <input type="text" name="jurusan" class="form-control">
  </div>
  <div class="form-group">
    <label for="tanggal_masuk">tanggal_masuk</label>
    <input type="date" name="tanggal_masuk" class="form-control">
  </div>
  <div class="form-group mt-3">
    <button class="btn btn-primary" type="submit">Simpan</button>
  </div>
</form>
@endsection