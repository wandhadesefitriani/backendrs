@extends('frontend.app')
@section('section')
<!--Service Section-->
<section class="service-section bg-gray section">
  <div class="container">
    <div class="section-title text-center">
      <h3>LAYANAN UNGGULAN
        </h3>
      </div>
      <div class="row">
        <div class="col-lg-12">
          <div class="items-container"> 
            <!--End Service Section-->
            @foreach ($layanan as $item)
              <div class="item">
                <div class="inner-box">
                  <div class="img_holder">
                      <img loading="lazy" src="{{ asset('storage/layananunggulan/gambar/' .$item->gambar) }}" alt="images" class="img-fluid">
                    </a>
                  </div>
                  <div class="image-content text-center">
                    <span>Better Service At Low Cost</span>
                      <h6>{{$item->judul}}</h6>
                    </a>
                    <p>{{$item->deskripsi}}</p>
                  </div>
                </div>
              </div>
              @endforeach
            </section>
            
    <!-- Service Section-->
    <section class="service-section bg-gray section">
  <div class="container">
    <div class="section-title text-center">
      <h3>LAYANAN LAINNYA
        </h3>
      </div>
      <div class="row">
        <div class="col-lg-12">
          <div class="items-container"> 
            <!--End Service Section-->
            @foreach ($layanan as $item)
              <div class="item">
                <div class="inner-box">
                  <div class="img_holder">
                      <img loading="lazy" src="{{ asset('storage/layananlainnya/gambar/' .$item->gambar) }}" alt="images" class="img-fluid">
                    </a>
                  </div>
                  <div class="image-content text-center">
                    <span>Better Service At Low Cost</span>
                      <h6>{{$item->judul}}</h6>
                    </a>
                    <p>{{$item->deskripsi}}</p>
                  </div>
                </div>
              </div>
@endforeach
    </section> 
</section>
@endsection
@section('script')
    <!-- <-- jquery -->
    <script src="{{asset('assets/plugins/jquery.min.js')}}"></script>
    <!-- bootstrap -->
    <script src="{{asset('assets/plugins/bootstrap/bootstrap.min.js')}}"></script>
    <!-- Slick Slider -->
    <script src="{{asset('assets/plugins/slick/slick.min.js')}}"></script>
    <script src="{{asset('assets/plugins/slick/slick-animation.min.js')}}"></script>
    <!-- FancyBox -->
    <script src="{{asset('assets/plugins/fancybox/jquery.fancybox.min.js')}}" defer></script>
    <!-- Google Map -->
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCcABaamniA6OL5YvYSpB3pFMNrXwXnLwU" defer></script>
    <script src="{{asset('assets/plugins/google-map/gmap.js')}}" defer></script>

    <!-- jquery-ui -->
    <script src="{{asset('assets/plugins/jquery-ui/jquery-ui.js')}}" defer></script>
    <!-- timePicker -->
    <script src="{{asset('assets/plugins/timePicker/timePicker.js')}}" defer></script>

    <!-- script js -->
    <script src="{{asset('assets/js/script.js')}}"></script>
    @endsection
@section('script')