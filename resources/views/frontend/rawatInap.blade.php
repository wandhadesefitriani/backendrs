@extends('frontend.app')
@section('section')
  <!-- RAWAT INAP -->
  <div class="container">
  <section class="gallery bg-gray">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <div class="section-title text-center">
            <h3>Rawat Inap</h3>
            <p>Beberapa Fasilitas Ruang RAWAT INAP
              <br>Rumah Sakit Fatimah
            </p>
          </div>
        </div>
        <div class="col">

          @foreach ($rawat as $items)
          <div class="col">
            <div class="row justify-content-center">
              <div class="card mt-3 mb-3" style="width: 25rem;">
                <img class="card-img-top" src="{{ asset('storage/rawatinap/gambar/' .$items->gambar) }}" alt="Card image cap">
                <div class="card-body">
                <div class="parent">
                  <button name="button" class="custom">VVIP</button>
                  <button name="button" class="custom">VIP</button>
                </div>
                  <h5 class="card-title">{{$items->judul}}</h5>
                  <p class="card-text">{{$items->deskripsi}}</p>
                 
                </div>
              </div>
    </div>
  </div>


  @endforeach
        </div>
</div>
</div>
</div>
</section>

        </div>
      </div>
    </div>
  </div>   
  <!--END RAWAT INAP-->
  @endsection

    @section('script')
    <!-- jquery -->
    <script src="{{asset('assetsjs/plugins/jquery.min.js')}}"></script>
    <!-- bootstrap -->
    <script src="{{asset('assetsjs/plugins/bootstrap/bootstrap.min.js')}}"></script>
    <!-- Slick Slider -->
    <script src="{{asset('assetsjs/plugins/slick/slick.min.js')}}"></script>
    <script src="{{asset('assetsjs/plugins/slick/slick-animation.min.js')}}"></script>
    <!-- FancyBox -->
    <script src="{{asset('assetsjs/plugins/fancybox/jquery.fancybox.min.js')}}" defer></script>
    <!-- Google Map -->
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCcABaamniA6OL5YvYSpB3pFMNrXwXnLwU" defer></script>
    <script src="{{asset('assetsjs/plugins/google-map/gmap.js')}}" defer></script>

    <!-- jquery-ui -->
    <script src="{{asset('assetsjs/plugins/jquery-ui/jquery-ui.js')}}" defer></script>
    <!-- timePicker -->
    <script src="{{asset('assetsjs/plugins/timePicker/timePicker.js')}}" defer></script>

    <!-- script js -->
    <script src="{{asset('assetsjs/js/script.js')}}"></script>


    @endsection

@section('script')