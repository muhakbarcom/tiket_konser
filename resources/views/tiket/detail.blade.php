@extends('layout.template')

@section('content')
<div class="row mt-5 mx-auto">
  <div class="col-md-6">
    <div class="card">
      <div class="card-header">
        <h2>Tiket Anda</h2>
      </div>
      <div class="card-body">
        <div class="row">
          <div class="col-md-6">Nama Lengkap</div>
          <div class="col-md-6">
            <?= $tiket->nama_lengkap; ?>
          </div>
        </div>
        <div class="row mt-2">
          <div class="col-md-6">Nomor Tiket</div>
          <div class="col-md-6">
            <?= $tiket->tiket_id; ?>
          </div>
        </div>
        <div class="row mt-2">
          <div class="col-md-6">Nama Konser</div>
          <div class="col-md-6">
            <?= $konser->nama_konser; ?>
          </div>
        </div>
        <div class="row mt-2">
          <div class="col-md-6">Tanggal Konser</div>
          <div class="col-md-6">
            <?= $konser->tanggal; ?>
          </div>
        </div>
        <div class="row mt-2">
          <div class="col-md-6">Alamat</div>
          <div class="col-md-6">
            <?= $tiket->alamat; ?>
          </div>
        </div>
        <div class="row mt-2">
          <div class="col-md-6">Nomor Handphone</div>
          <div class="col-md-6">
            <?= $tiket->nomor_hp; ?>
          </div>
        </div>
        <div class="row mt-2">
          <div class="col-md-6">Status Checkin</div>
          <div class="col-md-6">
            <?= $tiket->is_check_in; ?>
          </div>
        </div>
        <button class="btn btn-primary mt-3" onclick="window.print()">Print</button>
      </div>
    </div>
  </div>
</div>
@endsection