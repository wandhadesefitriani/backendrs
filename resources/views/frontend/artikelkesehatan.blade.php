@extends('frontend.app')

@section('section')

    <!--Service Section-->
    <section class="service-section bg-gray section">
      <div class="container">
        <div class="section-title text-center">
          <h3>ARTIKEL KESEHATAN
          </h3>
        </div>
        <div class="row">
          <div class="col-lg-12">
            <div class="items-container">
              <div class="item">
                <div class="inner-box">
                  <div class="img_holder">
                    <a href="/artikel1F">
                      <img loading="lazy" src="{{asset('assetsjs/images/artikelkes/artikel1.png')}}" alt="images" class="img-fluid">
                    </a>
                  </div>
                  <div class="image-content text-center">
                    <a href="/artikel1F">
                      <h6>Tips agar tetap aman selama masa kehamilan </h6>
                    </a>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Suscipit, vero.</p>
                    <div class="link-btn">
                        <a href="/artikel1F" class="btn-style-one">read more</a>
                    </div>
                  </div>
                </div>
              </div>
              <div class="item">
                <div class="inner-box">
                  <div class="img_holder">
                    <a href="/artikel2F">
                      <img loading="lazy" src="{{asset('assetsjs/images/artikelkes/artikel1.png')}}" alt="images" class="img-fluid">
                    </a>
                  </div>
                  <div class="image-content text-center">
                    <a href="/artikel2F">
                      <h6>Tips agar tetap aman selama masa kehamilan 2</h6>
                    </a>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Suscipit, vero.</p>
                    <div class="link-btn">
                        <a href="/artikel2F" class="btn-style-one">read more</a>
                    </div>
                  </div>
                </div>
              </div>
              <div class="item">
                <div class="inner-box">
                  <div class="img_holder">
                    <a href="/artikel3F">
                      <img loading="lazy" src="{{asset('assetsjs/images/artikelkes/artikel1.png')}}" alt="images" class="img-fluid">
                    </a>
                  </div>
                  <div class="image-content text-center">
                   <a href="/artikel3F">
                      <h6>Tips agar tetap aman selama masa kehamilan 3 </h6>
                    </a>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Suscipit, vero.</p>
                    <div class="link-btn">
                        <a href="/artikel3F" class="btn-style-one">read more</a>
                    </div>
                  </div>
                </div>
              </div>
              <div class="item">
                <div class="inner-box">
                  <div class="img_holder">
                    <a href="/artikel1F">
                      <img loading="lazy" src="{{asset('assetsjs/images/artikelkes/artikel1.png')}}" alt="images" class="img-fluid">
                    </a>
                  </div>
                  <div class="image-content text-center">
                    <a href="artikel1F">
                      <h6>Tips agar tetap aman selama masa kehamilan 4</h6>
                    </a>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Suscipit, vero.</p>
                    <div class="link-btn">
                        <a href="/artikel1F" class="btn-style-one">read more</a>
                    </div>
                  </div>
                </div>
              </div>
              <div class="item">
                <div class="inner-box">
                  <div class="img_holder">
                    <a href="/artikel2F">
                      <img loading="lazy" src="{{asset('assetsjs/images/artikelkes/artikel1.png')}}" alt="images" class="img-fluid">
                    </a>
                  </div>
                  <div class="image-content text-center">
                    <a href="/artikel2F">
                      <h6>Tips agar tetap aman selama masa kehamilan 5</h6>
                    </a>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Suscipit, vero.</p>
                    <div class="link-btn">
                        <a href="/artikel2F" class="btn-style-one">read more</a>
                    </div>
                  </div>
                </div>
              </div>
              <div class="item">
                <div class="inner-box">
                  <div class="img_holder">
                    <a href="/artikel3F">
                      <img loading="lazy" src="{{asset('assetsjs/images/artikelkes/artikel1.png')}}" alt="images" class="img-fluid">
                    </a>
                  </div>
                  <div class="image-content text-center">
                   <a href="/artikel3F">
                      <h6>Tips agar tetap aman selama masa kehamilan 6 </h6>
                    </a>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Suscipit, vero.</p>
                    <div class="link-btn">
                        <a href="/artikel3F" class="btn-style-one">read more</a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!--End Service Section-->

   

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