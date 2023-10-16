@extends('frontend.app')

@section('section')


        <!-- DIREKSI -->
        <section class="service-section bg-gray section">
          <div class="container">
            <div class="section-title text-center">
            </div>
            <section class="sample-text-area" style="margin-top: -50px;">
              <div class="container">
                <img src="{{asset('assetsjs/images/background/3.jpg')}}" class="img-fluid">
                <blockquote class="generic-blockquote">
                  <h3 style="text-align: center">DIREKSI 'RSIFATIMAH'</h3>
                </blockquote>
                <table>
                  <tbody>
                    <tr>
                      <td style="width: 300px;">Direktur</td>
                      <td>-</td>
                    </tr>
                    <tr>
                      <td style="width: 300px;">Wadir Medis</td>
                      <td>-</td>
                    </tr>
                    <tr>
                      <td style="width: 300px;">Wadir Administrasi & Keuangan</td>
                      <td>-</td>
                    </tr>
                    <tr>
                      <td style="width: 300px;">Devisi Pelayanan Kesehatan</td>
                      <td></td>
                    </tr>
                     <tr>
                      <td style="width: 300px;">Devisi Pemberdayaan Masyarakat</td>
                      <td></td>
                    </tr>
                   
                  </tbody>
                </table>
              </div>
            </section>
            <!-- DIREKSI -->

            <!-- VISI MISI -->
            <section class="service-section bg-gray section">
            <div class="container">
              <div class="section-title text-center">
              </div>
              <div class="container">           
                <div class="section-top-border">           
                  <div class="row">         
                    <div class="col-md-6">            
                      <div class="single-defination">           
                        <h4 class="mb-20">VISI</h4>           
                        <div class="line"></div>           
                        <p>Menjadi Rumah Sakit dengan pelayanan prima dan sebagai Sarana Dakwah</p>            
                      </div>           
                    </div>            
                    <div class="col-md-6">           
                      <div class="single-defination">          
                        <h4 class="mb-20">MISI</h4>          
                        <div class="line"></div>           
                        <p>1.Memberikan pelayanan bermutu dan memuaskan</p>
                        <p>2.Melaksanakan pengelolaan yang efektif dan efisien</p>
                        <p>3.Meningkatkan kompetensi dan loyalitas sumber daya ikhsani yang berakhlaqul karimah</p>
                      </div>
                    </div>           
                  </div>          
                </div>           
              </div>          
            </section>
            <!-- END VISI MISI -->

         <!-- SEJARAH -->
         <section class="service-section bg-gray section">
              <div class="container">
                <div class="section-title text-center">
                </div>
              <div class="container">            
                <h3 class="text-heading">SEJARAH </h3>            
                <div class="line"></div>           
                <p class="sample-text">           
                </p>
                <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Quis, suscipit nobis. Soluta quas voluptates minus natus, harum consequuntur vitae fugiat beatae et velit sequi minima ea est, illum explicabo ex?</p>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Officia totam at harum omnis repellendus minus, soluta aut dolor quae, accusamus ipsam obcaecati iusto fugiat ad sunt a sequi et cum.</p>               
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ad reprehenderit numquam consequatur consectetur commodi eum unde amet in cumque, quas, similique, iste cum. Id possimus assumenda sit, dolor iusto quisquam?</p>
              </div>
              </div>
              <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3948.94421168377!2d114.36341777500955!3d-8.20836539182378!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd1453bb065f8e7%3A0xad5ff16b895a4de6!2sRumah%20Sakit%20Umum%20Daerah%20(%20RSUD%20)%20Blambangan!5e0!3m2!1sid!2sid!4v1696835011003!5m2!1sid!2sid" width="1100" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
                </div>
            </section>
            <!--END SEJARAH-->

  <!--Scroll to top-->
  <div class="scroll-to-top scroll-to-target" data-target=".header-top">
    <span class="icon fa fa-angle-up"></span>
  </div>


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