@extends('layouts.admin.app')

@section('title', 'Tambah Himpunan')

@section('content')

  <!--Tambah Himpunan-->
  <div class="col-lg-12 col-lg-12 form-wrapper" id="tambah-himpunan">
      <div class="card">
      <div class="card-header">
      <h4 class="card-title">Input Data Himpunan</h4>
      </div>
      <div class="card-body">
    @if(auth()->user()->roles_id == 1)
        <form method="POST" action="{{ route('super.himpunan.store') }}" enctype='multipart/form-data'>
    @elseif(auth()->user()->roles_id == 2)
        <form method="POST" action="{{ route('admin.himpunan.store') }}" enctype='multipart/form-data'>
    @elseif(auth()->user()->roles_id == 3)
        <form method="POST" action="{{ route('himpunans.himpunan.store') }}" enctype='multipart/form-data'>
    @endif
        @csrf
          <div class="mb-3 row">
            <label class="col-sm-3 col-form-label">Nama Lengkap</label>
            <div class="col-sm-9">
              <input type="text" class="form-control" placeholder="Nama Lengkap" name="namaLengkap" id="namaLengkap" required>
            </div>
          </div>
          <div class="mb-3 row">
            <label class="col-sm-3 col-form-label">Nama Singkat</label>
            <div class="col-sm-9">
              <input type="text" class="form-control" placeholder="Nama Singkat" name="namaSingkat" id="namaSingkat" required>
            </div>
          </div>
          <div class="mb-3 row">
            <label class="col-sm-3 col-form-label">Pembina</label>
            <div class="col-sm-9">
              <input type="text" class="form-control" placeholder="Pembina" name="pembina" id="pembina" >
            </div>
          </div>
          <div class="mb-3 row">
            <label class="col-sm-3 col-form-label">Ketua Himpunan</label>
            <div class="col-sm-9">
              <input type="text" class="form-control" placeholder="Ketua Himpunan" name="ketuaHimpunan" id="ketuaHimpunan"  >
            </div>
          </div>
          <div class="mb-3 row">
            <label class="col-sm-3 col-form-label">Tahun Berdiri</label>
            <div class="col-sm-9">
              <input type="number" class="form-control" placeholder="Tahun Berdiri" name="tahunBerdiri" id="tahunBerdiri"  >
            </div>
          </div>
          <div class="mb-3 row">
            <label class="col-sm-3 col-form-label">Visi</label>
            <div class="col-sm-9">
              <textarea class="form-control custom-txt-area" placeholder="Visi" name="visi" id="visi"></textarea>
            </div>
          </div>
          <div class="mb-3 row">
            <label class="col-sm-3 col-form-label">Misi</label>
            <div class="col-sm-9">
              <textarea class="form-control custom-txt-area misi" placeholder="Misi" name="misi" id="misi"  ></textarea>
            </div>
          </div>
          <div class="mb-3 row">
            <label class="col-sm-3 col-form-label">Logo</label>
            <div class="col-sm-9">
              <input type="file" accept="image/*" class="form-control" name="logo" id="logo" >
              @error('logo')
              <div class="alert alert-danger">{{ $message }}</div>
              @enderror
            </div>
          </div>
          <div class="mb-3 row">
            <label class="col-sm-3 col-form-label">Filosofi Logo</label>
            <div class="col-sm-9">
              <input type="text" class="form-control" placeholder="Filosofi Logo" name="filosofiLogo" id="filosofiLogo" >
            </div>
          </div>
          <div class="mb-3 row">
            <label class="col-sm-3 col-form-label">Deskripsi</label>
            <div class="col-sm-9 ">
              <textarea class="form-control custom-txt-area" placeholder="Deskripsi" name="deskripsi" id="deskripsi"  ></textarea>
            </div>
          </div>
          <div class="mb-3 row">
            <div class="col-sm-9">
              <button type="submit" class="btn btn-primary ">Tambah</button>
            </div>
          </div>
          </form>
        </div>
      </div>
    </div>
    <!--./Tambah Himpunan-->

@endsection
