@extends('layout.template')

@section('content')
<h2>Data Konser</h2>
<form action="{{ url('/konser') }}" method="POST">
  @csrf

  <div class="form-group">
    <label for="nama">Nama Konser</label>
    <input type="text" name="nama_konser" class="form-control">
  </div>
  <div class="form-group">
    <label for="tanggal">Tanggal Konser</label>
    <input type="date" name="tanggal" class="form-control">
  </div>

  <div class="form-group mt-3">
    <button class="btn btn-primary" type="submit">Simpan</button>
  </div>
</form>
@endsection