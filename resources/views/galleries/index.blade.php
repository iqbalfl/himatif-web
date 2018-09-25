@extends('layouts.app')
@section('content')
  <div class="container">
    <div class="row">
      <h2 class="" style="padding-top: 10px;">Galeri Himatif</h2>
      <!-- Gallery Section-->
      <section class="gallery">    
        <div class="row">
          <div class="mix col-lg-3 col-md-3 col-sm-6">
            <div class="item">
              <a href="/vendor/himatif/img/gallery-1.jpg" data-fancybox="gallery" class="image">
                <img src="/vendor/himatif/img/gallery-1.jpg" alt="..." class="img-fluid">
                <div class="overlay d-flex align-items-center justify-content-center">
                  <i class="icon-search"></i>
                </div>
              </a>
            </div>
          </div>
          <div class="mix col-lg-3 col-md-3 col-sm-6">
            <div class="item">
              <a href="/vendor/himatif/img/gallery-2.jpg" data-fancybox="gallery" class="image">
                <img src="/vendor/himatif/img/gallery-2.jpg" alt="..." class="img-fluid">
                <div class="overlay d-flex align-items-center justify-content-center">
                  <i class="icon-search"></i>
                </div>
              </a>
            </div>
          </div>
          <div class="mix col-lg-3 col-md-3 col-sm-6">
            <div class="item">
              <a href="/vendor/himatif/img/gallery-3.jpg" data-fancybox="gallery" class="image">
                <img src="/vendor/himatif/img/gallery-3.jpg" alt="..." class="img-fluid">
                <div class="overlay d-flex align-items-center justify-content-center">
                  <i class="icon-search"></i>
                </div>
              </a>
            </div>
          </div>
          <div class="mix col-lg-3 col-md-3 col-sm-6">
            <div class="item">
              <a href="/vendor/himatif/img/gallery-4.jpg" data-fancybox="gallery" class="image">
                <img src="/vendor/himatif/img/gallery-4.jpg" alt="..." class="img-fluid">
                <div class="overlay d-flex align-items-center justify-content-center">
                  <i class="icon-search"></i>
                </div>
              </a>
            </div>
          </div>
        </div>
      </section>
    </div>
  </div>
@endsection