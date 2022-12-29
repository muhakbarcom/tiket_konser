@extends('layout.template')

@section('content')
<a class="btn btn-primary" href="{{ url('mahasiswa/create') }}">Tambah Data</a>
<div class="row">

  <table class="table table-responsive table-stripped">
    <tr>
      <th>Nama</th>
      <th>NPM</th>
      <th>Jurusan</th>
      <th>Tanggal Masuk</th>
      <th>Aksi</th>
    </tr>
    <tbody>
      @foreach ($data as $item)
      <tr>
        <td>{{ $item->nama }}</td>
        <td>{{ $item->npm }}</td>
        <td>{{ $item->jurusan }}</td>
        <td>{{ $item->tanggal_masuk }}</td>
        <td>
          <form action="{{ url('mahasiswa/'.$item->id) }}" method="POST">
            @csrf
            <input type="hidden" name="_method" value="DELETE"><a class="btn btn-warning btn-sm"
              href="{{ url('mahasiswa/'.$item->id.'/edit') }}">Edit</a>
            <button class="btn btn-danger btn-sm" type="submit">Delete</button>
          </form>
        </td>
      </tr>
      @endforeach

    </tbody>
  </table>
</div>
@endsection