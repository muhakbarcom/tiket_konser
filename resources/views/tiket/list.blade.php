@extends('layout.template')

@section('content')
{{-- <a class="btn btn-primary" href="{{ url('tiket/create') }}">Tambah Data</a> --}}
<div class="row">
  <h2>Data Tiket</h2>
  <table class="table table-responsive table-stripped">
    <tr>
      <th>Nama Lengkap</th>
      <th>Konser</th>
      <th>Tanggal</th>
      <th>Check In</th>
      <th>Aksi</th>
    </tr>
    <tbody>
      @foreach ($data as $item)
      <tr>
        <td>{{ $item->nama_lengkap }}</td>
        <td>{{ $item->konser_id }}</td>
        <td>{{ $item->tanggal }}</td>
        <td>{{ $item->is_check_in }}</td>
        <td>
          <form action="{{ url('tiket/'.$item->id) }}" method="POST">
            @csrf
            <input type="hidden" name="_method" value="DELETE"><a class="btn btn-warning btn-sm"
              href="{{ url('tiket/'.$item->id.'/edit') }}">Edit</a>
            <button class="btn btn-danger btn-sm" type="submit">Delete</button>
          </form>
        </td>
      </tr>
      @endforeach

    </tbody>
  </table>
</div>
@endsection