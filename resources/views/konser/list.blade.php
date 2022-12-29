@extends('layout.template')

@section('content')
<h2>Data Konser</h2>
<a class="btn btn-primary" href="{{ url('konser/create') }}">Tambah Data</a>
<div class="row">

  <table class="table table-responsive table-stripped">
    <tr>
      <th>Nama Konser</th>
      <th>Tanggal Konser</th>
      <th>Aksi</th>
    </tr>
    <tbody>
      @foreach ($data as $item)
      <tr>
        <td>{{ $item->nama_konser }}</td>
        <td>{{ $item->tanggal }}</td>
        <td>
          <form action="{{ url('konser/'.$item->id) }}" method="POST">
            @csrf
            <input type="hidden" name="_method" value="DELETE"><a class="btn btn-warning btn-sm"
              href="{{ url('konser/'.$item->id.'/edit') }}">Edit</a>
            <button class="btn btn-danger btn-sm" type="submit">Delete</button>
          </form>
        </td>
      </tr>
      @endforeach

    </tbody>
  </table>
</div>
@endsection