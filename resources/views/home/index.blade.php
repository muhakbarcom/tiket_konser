@extends('layout.template')

@section('content')
<h2>List Konser</h2>
<div class="row">
  @foreach ($data as $item)
  <div class="col">
    <div class="card mb-2" style="width: 18rem;">
      <img src="https://source.unsplash.com/random/100×100/?concert" class="card-img-top img-responsive" alt="...">
      <div class="card-body">
        <h5 class="card-title">
          <?= $item->nama_konser; ?>
        </h5>
        <p class="card-text">
          <?= $item->tanggal; ?>
        </p>
        <a href="<?= url('tiket/pesan/'.$item->id); ?>" class="btn btn-primary">Pesan</a>
      </div>
    </div>
  </div>
  @endforeach
</div>
@endsection