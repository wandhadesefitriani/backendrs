@extends('frontend.app')

@section('section')


  <!-- RAWAT INAP -->


  <div class="container">
  <section class="gallery bg-gray">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <div class="section-title text-center">
            <h3>Dokumen KEPK</h3>
            
          </div>
        </div>
        </div>
      
      
<p></p>
<p></p>
<p></p>
<p></p>
  @endsection

    @section('script')
    <!-- jquery -->
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