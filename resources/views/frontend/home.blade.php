@extends('frontend.app')

@section('section')

<!--=================================
=            Page Slider            =
==================================-->
<div class="hero-slider">
  <!-- Slider Item -->
  <div class="slider-item slide1" style="background-image: url('{{asset('assetsjs/images/slider/slide3.jpeg')}}');">
    <div class="container">
      <div class="row">
        <div class="col-12">
          <!-- Slide Content Start -->
          <div class="content style text-center">
            <h2 class="text-white text-bold mb-2" data-animation-in="slideInLeft">Assalamualaikum Sahabat Sehat Fatimah</h2>
            <!-- <p class="tag-text mb-4" data-animation-in="slideInRight"> Layananku Ibadahku </p> -->
            <a href="about.htm" class="btn btn-main btn-white" data-animation-in="slideInLeft" data-duration-in="1.2">explore</a>
          </div>
          
          <!-- Slide Content End -->
        </div>
      </div>
    </div>
  </div>
  <!-- Slider Item -->
  <div class="slider-item" style="background-image: url('{{asset('assetsjs/images/slider/slide3.jpeg')}}');">
    <div class="container">
      <div class="row">
        <div class="col-12">
          <!-- Slide Content Start-->
          <div class="content style text-center">
            <h2 class="text-white" data-animation-in="slideInRight">Assalamualaikum Sahabat Sehat Fatimah</h2>
            <!-- <p class="tag-text mb-4" data-animation-in="slideInRight" data-duration-in="0.6">Lorem ipsum dolor sit amet consectetur adipisicing elit. </p> -->
            <a href="profil.html" class="btn btn-main btn-white" data-animation-in="slideInRight" data-duration-in="1.2">about us</a>
          </div>
          <!-- Slide Content End-->
        </div>
      </div>
    </div>
  </div>
  <!-- Slider Item -->
  <div class="slider-item" style="background-image: url('{{asset('assetsjs/images/slider/slide3.jpeg')}}');">
    <div class="container">
      <div class="row">
        <div class="col-12">
          <!-- Slide Content Start -->
          <div class="content text-center style">
            <h2 class="text-white text-bold mb-2" data-animation-in="slideInRight">Assalamualaikum Sahabat Sehat Fatimah</h2>
            <!-- <p class="tag-text mb-4" data-animation-in="slideInLeft">Lorem ipsum dolor sit amet consectetur adipisicing elit. Beatae deserunt, <br>eius pariatur minus itaque nostrum.</p> -->
            <a href="about.html" class="btn btn-main btn-white" data-animation-in="slideInRight"  data-duration-in="1.2">EXPLORE</a>
          </div>
          <!-- Slide Content End -->
        </div>
      </div>
    </div>
  </div>
</div>

<!--Service Section-->
<section class="service-section bg-gray section">
  <div class="container">
    <div class="section-title text-center">
    <div class="row">
      <div class="col-lg-12">
        <div class="items-container">
          <div class="item">
            <div class="inner-box">
              <div class="img_holder">
              <a href="{{route('jadwalDokter.index')}}">
                  <img loading="lazy" src="{{asset('assetsjs/images/icons/jadwal dokter.png')}}" alt="images" class="img-fluid">
                </a>
              </div>
              <div class="image-content text-center">
              <a href="{{route('jadwalDokter.index')}}">
                  <h6>Jadwal Dokter</h6>
                </a>
              </div>
            </div>
          </div>
          <div class="item">
            <div class="inner-box">
              <div class="img_holder">
                <a href="/layanan">
                  <img loading="lazy" src="{{asset('assetsjs/images/icons/layanan.png')}}" alt="images" class="img-fluid">
                </a>
              </div>
              <div class="image-content text-center">
                <a href="/layanan">
                  <h6>LAYANAN</h6>
                </a>
              </div>
            </div>
          </div>
          <div class="item">
            <div class="inner-box">
              <div class="img_holder">
                <a href="/ranap">
                  <img loading="lazy" src="{{asset('assetsjs/images/icons/rawat inap.png')}}" alt="images" class="img-fluid">
                </a>
              </div>
              <div class="image-content text-center">
              <a href="/ranap">
                  <h6>RAWAT INAP</h6>
                </a>
              </div>
            </div>
          </div>
          <div class="item">
            <div class="inner-box">
              <div class="img_holder">
              <a href="{{route('jadwalDokter.index')}}">
                  <img loading="lazy" src="{{asset('assetsjs/images/icons/jadwal dokter.png')}}" alt="images" class="img-fluid">
                </a>
              </div>
              <div class="image-content text-center">
                <a href="{{route('jadwalDokter.index')}}">
                  <h6>JADWAL DOKTER</h6>
                </a>
              </div>
            </div>
          </div>
          <div class="item">
            <div class="inner-box">
              <div class="img_holder">
                <a href="/layanan">
                  <img loading="lazy" src="{{asset('assetsjs/images/icons/layanan.png')}}" alt="images" class="img-fluid">
                </a>
              </div>
              <div class="image-content text-center">
                <a href="/layanan">
                  <h6>LAYANAN</h6>
                </a>
              </div>
            </div>
          </div>
          <div class="item">
            <div class="inner-box">
              <div class="img_holder">
                <a href="/ranap">
                  <img loading="lazy" src="{{asset('assetsjs/images/icons/rawat inap.png')}}" alt="images" class="img-fluid">
                </a>
              </div>
              <div class="image-content text-center">
              <a href="/ranap">
                  <h6>RAWAT INAP</h6>
                </a>             
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!--End Service Section-->



<!--CONTEN-->
<div class="container mb-5">
  <div class="row">
    <div class="col-md-6 col-sm-12 mb-3">
      <div class="border border-white p-3 bgconten">
        <a href="https://api.whatsapp.com/send?phone=6281230463131" class="text-decoration-none d-flex align-items-center">
          <img src="{{asset('assetsjs/images/icons/cs.png')}}" alt="" width="30" height="30" class="mr-3 me-5" />       
          <h3 class="text-white fs-4">Contact CS</h3>
        </a>
      </div>
    </div>
    <div class="col-md-6 col-sm-12 mb-3">
      <div class="border border-black p-3 bgconten">
        <a href="https://play.google.com/store/apps/details?id=com.rsif.mobile.sireog" class="text-decoration-none d-flex align-items-center">
          <img src="{{asset('assetsjs/images/icons/Download.png')}}" alt="" width="30" height="30" class="mr-3 me-5" />
          <h3 class="text-white fs-4">Download Aplikasi</h3>
        </a>
      </div>
    </div>
    <div class="col-md-6 col-sm-12 mb-3">
      <div class="border border-black p-3 bgconten">
        <a href="https://api.whatsapp.com/send?phone=6281230463131" class="text-decoration-none d-flex align-items-center">
          <img src="{{asset('assetsjs/images/icons/saran.png')}}" alt="" width="30" height="30" class="mr-3 me-5" />
          <h3 class="text-white fs-4">Contact Pengaduan</h3>
        </a>
      </div>
    </div>
    <div class="col-md-6 col-sm-12 mb-3">
      <div class="border border-black p-3 bgconten">
        <a href="https://docs.google.com/forms/d/e/1FAIpQLSdqP0RacNKtIEBCkMEqsGwiHjrMUpzPjoowTLTbsLbwe8pwFw/viewform" class="text-decoration-none d-flex align-items-center">
          <img src="{{asset('assetsjs/images/icons/kuisoner.png')}}" alt="" width="30" height="30" class="mr-3 me-5" />
          <h3 class="text-white fs-4">Quisoner</h3>
        </a>
      </div>
    </div>
  </div>
</div>
<!---->

<!--about section-->
<section class="feature-section section bg-gray">
  <div class="container mt-10 mb-10">
    <div class="row justify-content-between">
      <div class="col-md-2 col-sm-6">
        <a href="/mcuF">
          <div class="text-center">
            <img src="{{asset('assetsjs/images/icons/mcu.png')}}" alt="" width="110" height="110" class="mt-3" />
            <h3 class="mt-3 fs-4 colorfeature">Medical</h3>
            <p class="colorfeature">Checkup</p>
          </div>
        </a>
      </div>
      <div class="col-md-2 col-sm-6">
        <a href="/paket">
          <div class="text-center">
            <img src="{{asset('assetsjs/images/icons/persalinan.png')}}" alt="" width="110" height="110" class="mt-3" />
            <h3 class="mt-3 colorfeature fs-4 colorfeature">Paket</h3>
            <p class="colorfeature">Persalinan</p>
          </div>
        </a>
      </div>
      <div class="col-md-2 col-sm-6">
        <a href="/labF">
          <div class="text-center">
            <img src="{{asset('assetsjs/images/icons/layanan laboratorium.png')}}" alt="" width="110" height="110" class="mt-3" />
            <h3 class="mt-3  colorfeature fs-4">Layanan</h3>
            <p class="colorfeature">Laboratorium</p>
          </div>
        </a>
      </div>
      <div class="col-md-2 col-sm-6">
        <a href="/eswlF">
          <div class="text-center">
            <img src="{{asset('assetsjs/images/icons/eswl.png')}}" alt="" width="110" height="110" class="mt-3" />
            <h3 class="mt-3 colorfeature fs-4">ESWL</h3>
            <p class="colorfeature">eswl</p>
          </div>
        </a>
      </div>
    
    </div>
  </div>
</section>
         
<!--Promosi Kesehatan-->
<section class="service-section bg-gray section">
  <div class="container">
    <div class="section-title text-center">
      <h3>Promosi Kesehatan</h3>
      <div class="row">
        <div class="col-lg-12">
          <div class="items-container">
            <div class="item">
              <div class="inner-box">
                <div class="img_holder">
                  <a href="layanan.html">
                    <img loading="lazy" src="{{asset('assetsjs/images/promosi kes/prom 1.png')}}" alt="images" class="img-fluid">
              
                  </a>
                </div>
                <div class="image-content text-center">
                  <a href="layanan.html">
                    <h6>Promosi 1</h6>
                  </a>
                </div>
              </div>
            </div>
            <div class="item">
              <div class="inner-box">
                <div class="img_holder">
                  <a href="layanan.html">
                    <img loading="lazy" src="{{asset('assetsjs/images/promosi kes/prom 3.png')}}" alt="images" class="img-fluid">
                  </a>
                </div>
                <div class="image-content text-center">
                  <a href="layanan.html">
                    <h6>Promosi 2</h6>
                  </a>
                </div>
              </div>
            </div>
            <div class="item">
              <div class="inner-box">
                <div class="img_holder">
                  <a href="layanan.html">
                    <img loading="lazy" src="{{asset('assetsjs/images/promosi kes/prom 2.png')}}" alt="images" class="img-fluid">
                  </a>
                </div>
                <div class="image-content text-center">
                  <a href="layanan.html">
                    <h6>Promosi 3</h6>
                  </a>
                </div>
              </div>
            </div>
            <div class="item">
              <div class="inner-box">
                <div class="img_holder">
                  <a href="layanan.html">
                    <img loading="lazy" src="{{asset('assetsjs/images/promosi kes/prom 1.png')}}" alt="images" class="img-fluid">
                  </a>
                </div>
                <div class="image-content text-center">
                  <a href="layanan.html">
                    <h6>Promosi 1</h6>
                  </a>
                </div>
              </div>
            </div>
            <div class="item">
              <div class="inner-box">
                <div class="img_holder">
                  <a href="layanan.html">
                    <img loading="lazy" src="{{asset('assetsjs/images/promosi kes/prom 3.png')}}" alt="images" class="img-fluid">
                  </a>
                </div>
                <div class="image-content text-center">
                  <a href="layanan.html">
                    <h6>Promosi 2</h6>
                  </a>
                </div>
              </div>
            </div>
            <div class="item">
              <div class="inner-box">
                <div class="img_holder">
                  <a href="layanan.html">
                    <img loading="lazy" src="{{asset('assetsjs/images/promosi kes/prom 2.png')}}" alt="images" class="img-fluid">
                  </a>
                </div>
                <div class="image-content text-center">
                  <a href="layanan.html">
                    <h6>Promosi 3</h6>
                  </a>
                </div>
              </div>
</section>
<!---->

<!--Informasi Kesehatan Conten-->
<section class="service-section bg-gray section">
  <div class="container">
    <div class="section-title text-center">
      <h3>Informasi Kesehatan</h3>
      <div class="container mb-5">
        <div class="row">
          <div class="col-md-4 col-12 mb-3">
            <div class="border border-black p-3 bgconten">
              <a href="/artikelkesehatanF" class="text-decoration-none d-flex align-items-center">
                <img src="{{asset('assetsjs/images/icons/Artikel 3.png')}}" alt="" width="40" height="40" class="mr-3 me-5" />
                <h4 class="text-white fs-4">Artikel Kesehatan</h4>
              </a>
            </div>
          </div>
          <div class="col-md-4 col-sm-12 mb-3">
            <div class="border border-black p-3 bgconten">
              <a href="/beritainformasiF" class="text-decoration-none d-flex align-items-center">
                <img src="{{asset('assetsjs/images/icons/Berita 1.png')}}" alt="" width="40" height="40" class="mr-3 me-5" />
                <h4 class="text-white fs-4">Berita Infomasi</h4>
              </a>
            </div>
          </div>
            <div class="col-md-4 col-sm-12 mb-3">
              <div class="border border-black p-3 bgconten">
                <a href="/kegiatan" class="text-decoration-none d-flex align-items-center">
                  <img src="{{asset('assetsjs/images/icons/kegiatankami.png')}}" alt="" width="40" height="40" class="mr-3 me-5" />
                  <h4 class="text-white fs-4">Kegiatan Kami</h4>
                </a>
              </div>
            </div>
          </div>
        </div>
      </div>
    <!--End Infomasi Kesehatan Conten> -->

    
    <!-- Informasi kesehatan kolom -->
      <section class="service-section bg-gray section">
        <div class="container">
            <div class="row">
              <div class="col-lg-12">
                <div class="items-container">
                  <div class="item">
                    <div class="inner-box">
                      <div class="img_holder">
                        <a href="layanan.html">
                          <img loading="lazy" src="{{asset('assetsjs/images/informasi kes/gmbr1.png')}}" alt="images" class="img-fluid">
                        </a>
                      </div>
                      <div class="image-content text-center">
                        <a href="layanan.html">
                            <a href="blog-details.html" class="btn btn-lg btn-custom">Berita</a>
                            <a href="blog-details.html" class="btn btn-lg btn-custom">Artikel</a>
                      <div class="content-text">
                        <a href="blog-details.html">
                          <h4>RS Fatimah Mengadakan Kegiatan Hitan Gembira</h4>
                        </a>
                        <span>By  / 02 January 2020</span>
                        <p>Praesent sapien massa, convallis a pellentesque nec, egestas non nisi. Sed porttitor lectus nibh.</p>
                        <div class="link-btn">
                          <a href="blog-details.html" class="btn-style-one">read more</a>
                        </div>
                      </div>
                        </a>
                      </div>
                    </div>
                  </div>

                  <div class="item">
                    <div class="inner-box">
                      <div class="img_holder">
                        <a href="layanan.html">
                          <img loading="lazy" src="{{asset('assetsjs/images/informasi kes/gmbr1.png')}}" alt="images" class="img-fluid">
                        </a>
                      </div>
                      <div class="image-content text-center">
                         <a href="/beritainformasi" class="btn btn-lg btn-custom">Berita</a>
                         <a href="/artikelkesehatan" class="btn btn-lg btn-custom">Artikel</a>
                        <a href="layanan.html">
                        <div class="content-text">
                          <a href="blog-details.html">
                            <h4>RS Fatimah Mengadakan Kegiatan Hitan Gembira</h4>
                          </a>
                          <span>By  / 02 January 2020</span>
                          <p>Praesent sapien massa, convallis a pellentesque nec, egestas non nisi. Sed porttitor lectus nibh.</p>
                          <div class="link-btn">
                            <a href="blog-details.html" class="btn-style-one">read more</a>
                          </div>
                        </div>
                        </a>
                      </div>
                    </div>
                  </div>


                  <div class="item">
                    <div class="inner-box">
                      <div class="img_holder">
                        <a href="layanan.html">
                          <img loading="lazy" src="{{asset('assetsjs/images/informasi kes/gmbr1.png')}}" alt="images" class="img-fluid">
                        </a>
                      </div>
                      <div class="image-content text-center">
                        <a href="/beritainformasi" class="btn btn-lg btn-custom">Berita</a>
                        <a href="/artikelkesehatan" class="btn btn-lg btn-custom">Artikel</a>
                        <a href="layanan.html">
                    <div class="content-text">
                      <a href="blog-details.html">
                        <h4>RS Fatimah Mengadakan Kegiatan Hitan Gembira</h4>
                      </a>
                      <span>By / 02 January 2020</span>
                      <p>Praesent sapien massa, convallis a pellentesque nec, egestas non nisi. Sed porttitor lectus nibh.</p>
                      <div class="link-btn">
                        <a href="blog-details.html" class="btn-style-one">read more</a>
                      </div>
                    </div>
                    </a>
                    </div>
                    </div>
                    </div>

                  
                  <div class="item">
                    <div class="inner-box">
                      <div class="img_holder">
                        <a href="layanan.html">
                          <img loading="lazy" src="{{asset('assetsjs/images/informasi kes/gmbr1.png')}}" alt="images" class="img-fluid">
                        </a>
                      </div>
                      <div class="image-content text-center">
                       <a href="/beritainformasi" class="btn btn-lg btn-custom">Berita</a>
                       <a href="/artikelkesehatan" class="btn btn-lg btn-custom">Artikel</a>
                        <a href="layanan.html">
                        <div class="content-text">
                          <a href="blog-details.html">
                            <h4>RS Fatimah Mengadakan Kegiatan Hitan Gembira</h4>
                          </a>
                          <span>By  / 02 January 2020</span>
                          <p>Praesent sapien massa, convallis a pellentesque nec, egestas non nisi. Sed porttitor lectus nibh.</p>
                          <div class="link-btn">
                            <a href="blog-details.html" class="btn-style-one">read more</a>
                          </div>
                        </div>
                        </a>
                        </div>
                        </div>
                        </div>

                  <div class="item">
                    <div class="inner-box">
                      <div class="img_holder">
                        <a href="layanan.html">
                          <img loading="lazy" src="{{asset('assetsjs/images/informasi kes/gmbr1.png')}}" alt="images" class="img-fluid">
                        </a>
                      </div>
                      <div class="image-content text-center">
                       <a href="/beritainformasi" class="btn btn-lg btn-custom">Berita</a>
                       <a href="/artikelkesehatan" class="btn btn-lg btn-custom">Artikel</a>
                        <a href="layanan.html">
                        <div class="content-text">
                          <a href="blog-details.html">
                            <h4>RS Fatimah Mengadakan Kegiatan Hitan Gembira</h4>
                          </a>
                          <span>By / 02 January 2020</span>
                          <p>Praesent sapien massa, convallis a pellentesque nec, egestas non nisi. Sed porttitor lectus nibh.</p>
                          <div class="link-btn">
                            <a href="blog-details.html" class="btn-style-one">read more</a>
                          </div>
                        </div>
                        </a>
                        </div>
                        </div>
                      </div>

                  <div class="item">
                    <div class="inner-box">
                      <div class="img_holder">
                        <a href="layanan.html">
                          <img loading="lazy" src="{{asset('assetsjs/images/informasi kes/gmbr1.png')}}" alt="images" class="img-fluid">
                        </a>
                      </div>
                      <div class="image-content text-center">
                        <a href="/beritainformasi" class="btn btn-lg btn-custom">Berita</a>
                        <a href="/artikelkesehatan" class="btn btn-lg btn-custom">Artikel</a>
                        <a href="layanan.html">
                        <div class="content-text">
                          <a href="blog-details.html">
                            <h4>RS Fatimah Mengadakan Kegiatan Hitan Gembira</h4>
                          </a>
                          <span>By / 02 January 2020</span>
                          <p>Praesent sapien massa, convallis a pellentesque nec, egestas non nisi. Sed porttitor lectus nibh.</p>
                          <div class="link-btn">
                            <a href="blog-details.html" class="btn-style-one">read more</a>
                          </div>
                        </div>
                        </a>
                        </div>
                        </div>
                        </div>
              </section>
<!---->

<!--MITRA KAMI-->
<section class="service-section bg-gray section">
  <div class="container">
    <div class="section-title text-center">
      <h3>Mitra Kami</h3>
        <div class="container mt-5 mb-5">
  <div class="row text-center">
    <div class="col-md-2 col-sm-4">
      <img src="{{asset('assetsjs/images/mitra kami/logo.png')}}" alt="" width="117" height="104" />
    </div>
    <div class="col-md-2 col-sm-4">
      <img src="{{asset('assetsjs/images/mitra kami/logo (1).png')}}" alt="" width="117" height="104" />
    </div>
    <div class="col-md-2 col-sm-4">
      <img src="{{asset('assetsjs/images/mitra kami/jasa raharja.jpeg')}}" alt="" width="117" height="104" />
    </div>
    <div class="col-md-2 col-sm-4">
      <img src="{{asset('assetsjs/images/mitra kami/aa.jpeg')}}" alt="" width="117" height="104" />
    </div>
    <div class="col-md-2 col-sm-4">
      <img src="{{asset('assetsjs/images/mitra kami/pertamina.jpeg')}}" alt="" width="117" height="104" />
    </div>
    <div class="col-md-2 col-sm-4">
      <img src="{{asset('assetsjs/images/mitra kami/bsi.png')}}" alt="" width="117" height="104" />
    </div>
  </div>
  <div class="row text-center">
    <div class="col-md-2 col-sm-4">
      <img src="{{asset('assetsjs/images/mitra kami/bni.jpeg')}}" alt="" width="117" height="104" />
    </div>
    <div class="col-md-2 col-sm-4">
      <img src="{{asset('assetsjs/images/mitra kami/pln.png')}}" alt="" width="117" height="104" />
    </div>
    <div class="col-md-2 col-sm-4">
      <img src="{{asset('assetsjs/images/mitra kami/axa.png')}}" alt="" width="117" height="104" />
    </div>
    <div class="col-md-2 col-sm-4">
      <img src="{{asset('assetsjs/images/mitra kami/stp.png')}}" alt="" width="117" height="104" />
    </div>
    <div class="col-md-2 col-sm-4">
      <img src="{{asset('assetsjs/images/mitra kami/generali.png')}}" alt="" width="117" height="104" />
    </div>
    <div class="col-md-2 col-sm-4">
      <img src="{{asset('assetsjs/images/mitra kami/astra.jpeg')}}" alt="" width="117" height="104" />
    </div>
  </div>
  <div class="row text-center">
    <div class="col-md-2 col-sm-4">
      <img src="{{asset('assetsjs/images/mitra kami/yayasan pertamina.jpeg')}}" alt="" width="117" height="104" />
    </div>
    <div class="col-md-2 col-sm-4">
      <img src="{{asset('assetsjs/images/mitra kami/taspen.jpeg')}}" alt="" width="117" height="104" />
    </div>
    <div class="col-md-2 col-sm-4">
      <img src="{{asset('assetsjs/images/mitra kami/prudential.jpeg')}}" alt="" width="117" height="104" />
    </div>
    <div class="col-md-2 col-sm-4">
      <img src="{{asset('assetsjs/images/mitra kami/sampoerna.jpeg')}}" alt="" width="117" height="104" />
    </div>
    <div class="col-md-2 col-sm-4">
      <img src="{{asset('assetsjs/images/mitra kami/manulife.jpeg')}}" alt="" width="117" height="104" />
    </div>
    <div class="col-md-2 col-sm-4">
      <img src="{{asset('assetsjs/images/mitra kami/MP.jpeg')}}" alt="" width="117" height="104" />
    </div>
  </div>
  <div class="row text-center">
    <div class="col-md-2 col-sm-4">
      <img src="{{asset('assetsjs/images/mitra kami/Mega.jpeg')}}" alt="" width="117" height="104" />
    </div>
    <div class="col-md-2 col-sm-4">
      <img src="{{asset('assetsjs/images/mitra kami/reliance.jpeg')}}" alt="" width="117" height="104" />
    </div>
    <div class="col-md-2 col-sm-4">
      <img src="{{asset('assetsjs/images/mitra kami/fwd.png')}}" alt="" width="117" height="104" />
    </div>
    <div class="col-md-2 col-sm-4">
      <img src="{{asset('assetsjs/images/mitra kami/nayaka.jpeg')}}" alt="" width="117" height="104" />
    </div>
    <div class="col-md-2 col-sm-4">
      <img src="{{asset('assetsjs/images/mitra kami/ssa.jpeg')}}" alt="" width="117" height="104" />
    </div>
    <div class="col-md-2 col-sm-4">
      <img src="{{asset('assetsjs/images/mitra kami/sunlife.jpeg')}}" alt="" width="117" height="104" />
    </div>
  </div>
  
    <div class="link-btn">
      <a href="/mitra" class="btn-style-one center-block">Selengkapnya</a>
  </div>
</div>
</div>
</div>
</div>
<!--fOOTER-->
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
<!-- <script src="{{asset('assets/plugins/timePicker/timePicker.js')}}" defer></script> -->

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
<!-- <script src="{{asset('assets/plugins/timePicker/timePicker.js')}}" defer></script> -->

<!-- script js -->
<script src="{{asset('assets/js/script.js')}}"></script>

@endsection