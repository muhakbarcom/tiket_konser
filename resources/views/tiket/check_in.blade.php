@extends('layout.template')

@section('content')
<h2>Data Check In Tiket</h2>
<form action="{{ url('tiket/check_in_act') }}" method="POST">
  @if (session('success'))
  <div class="alert alert-success">{{ session('success') }}</div>
  @endif

  @csrf
  <p>masukan nomor tiket
  </p>
  <div class="form-group">
    <label for="nomor">Nomor Tiket</label>
    <input type="text" name="nomor_tiket" class="form-control">
  </div>
  <div class="form-group mt-3">
    <button class="btn btn-primary" type="submit">Check In</button>
  </div>
</form>
@endsection