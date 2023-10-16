@extends('frontend.app')

@section('section')


    <!-- MCU -->
    <section class="gallery bg-gray">
      <div class="container">
        <div class="row">
          <div class="col-lg-12">
            <div class="section-title text-center">
              <h3>MCU</h3>
            </div>
          </div>

          @foreach ($mcu as $item)
          <div class="col-lg-4 col-md-6">
            <div class="gallery-item">
              <img loading="lazy" src="{{ asset('storage/mcu/gambar/' .$item->gambar) }}" class="img-fluid" alt="gallery-image">
              <a data-fancybox="images" href="{{ asset('storage/mcu/gambar/' .$item->gambar) }}"></a>
              <h3>{{$item->judul}}</h3>
              <p>{{$item->deskripsi}}</p>
            </div>
          </div>
          @endforeach
        </div>
      </div>
          @endsection
