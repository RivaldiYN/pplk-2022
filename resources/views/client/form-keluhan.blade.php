@extends('layouts.client.app')

<!-- TITLE -->
@section('title', 'Form Keluhan')

@section('style')
    <link rel="stylesheet" href="{{ asset('assets/css/main-style.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/style-form.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
@endsection

@section('content')
    <!-- CONTENT -->
      <div>
      {{-- <form action="https://docs.google.com/forms/u/0/d/e/1FAIpQLScI0EE9pdqGDDqWtfM0WyQKXR7KQJUbV-oX956iEN7hn8WUwA/formResponse"> --}}

      <div class="content">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-md-10">
            <div class="row justify-content-center">
              <div class="col-md-6">
              <br><h3 style="color: #FFF;" class="heading mb-4" ></p>PPLK 2022 </h3>
                <h6 style="color: #FFF;" >Program Pengenalan Lingkungan Kampus <br> Institut Teknologi Sumatera <br><br><br>
                <img src="{{ asset('assets/Maskot1.png') }}" alt="Image" class="img-fluid"></h6> <br><br><br>
              </div>

              <div class="col-md-6">
                <br><br>
                  <form class="mb-5" enctype="multipart/form-data" method="post" action="/form-keluhan/{{ $users->id }}" id="contactForm" name="contactForm">
                  @csrf
                    <div class="row">
                    <div class="col-md-12 form-group">
                      <input type="text" class="form-control" name="nama" id="nama" placeholder="Nama" value="{{ $users->nama }}" readonly>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-12 form-group">
                      <input type="text" class="form-control" name="nim" id="nim" placeholder="NIM" value="{{ $users->nim }}" readonly>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-12 form-group">
                      <input type="text" class="form-control" name="kelompok" id="kelompok" placeholder="Kelompok" value="{{ $users->kelompok }}" readonly>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-12 form-group">
                      <textarea class="form-control" name="keluhan" id="keluhan" cols="30" rows="7" placeholder="Tuliskan keluhan anda"></textarea>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-12 form-group ">
                      <div class="image" name="foto"> </div>
                    <input id="default-btn" type="file" name="bukti" required>
                </div>
                <div class="row mb-5">
                    <div class="col-md-12 form-group ">
                      <input type="submit" class="form-control " name="submit" id="submit"  value="Kirim Keluhan" >
                    </div>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    </div>
@endsection

@section('script')
    <!-- SCRIPTS -->
    <script type="text/javascript">
      let nav = document.querySelector('#navbar-desktop');

      window.addEventListener('scroll', function () {
          if (window.pageYOffset > 50) {
              nav.classList.add('background-gradient', 'shadow');
          } else {
              nav.classList.remove('background-gradient', 'shadow');
          }
      });
  </script>
          <!-- Swiper JS -->
  <script src="/js/hmp-ukm.min.js"></script>
@endsection
