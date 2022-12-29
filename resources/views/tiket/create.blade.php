@extends('layout.template')

@section('content')
<h2>Data Tiket</h2>
<form action="{{ url('tiket') }}" method="POST">
  @csrf
  <p>Lengkapi data diri untuk memesan tiket konser
    <b>
      <?= $data_konser->nama_konser; ?>
    </b> pada tanggal
    <?= $data_konser->tanggal; ?>
  </p>
  <div class="form-group">
    <label for="nama">Nama Lengkap</label>
    <input type="text" name="nama_lengkap" class="form-control">
  </div>
  <div class="form-group">
    <label for="alamat">Alamat</label>
    <textarea name="alamat" class="form-control" id="" cols="30" rows="5"></textarea>
  </div>
  <div class="form-group">
    <label for="nomor_hp">Nomor Handphone</label>
    <input type="text" name="nomor_hp" class="form-control">
  </div>
  <div class="form-group mt-3">
    <input type="hidden" name="konser_id" value="<?= $data_konser->id; ?>">
    <button class="btn btn-primary" type="submit">Simpan</button>
  </div>
</form>
@endsection