<aside class="main-sidebar">
    <!-- sidebar-->
    <section class="sidebar">	
		
        <div class="user-profile">
			<div class="ulogo">
				 <a href="index.html">
				  <!-- logo for regular state and mobile devices -->
					 <div class="d-flex align-items-center justify-content-center">					 	
						  <img src="../images/logo-dark.png" alt="">
						  <h3><b>ADMIN</b>RSI Fatimah</h3>
					 </div>
				</a>
			</div>
        </div>
      
      <!-- sidebar menu-->
      <ul class="sidebar-menu" data-widget="tree">  

      
		  <li>
          <a href="auth_login.html">
            <i data-feather="home"></i>
			<span>Dashboard</span>
          </a>
        </li> 
        

        <li class="treeview">
          <a href="#">
            <i data-feather="mail"></i> <span>Jadwal Dokter</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-right pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="{{route('jadwalDokter.view')}}"><i class="ti-more"></i>Jadwal Dokter</a></li>
          </ul>
        </li>

        <li class="treeview">
          <a href="#">
            <i data-feather="message-circle"></i>
            <span>Layanan</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-right pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="{{route('layananunggulan.view')}}"><i class="ti-more"></i>Layanan unggulan</a></li>
            <li><a href="{{route('layananlainnya.view')}}"><i class="ti-more"></i>Layanan lainnya</a></li>
          </ul>
        </li> 
		
        <li class="treeview">
          <a href="#">
            <i data-feather="file"></i>
            <span>Rawat Inap</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-right pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="{{route('rawatinap.view')}}"><i class="ti-more"></i>Rawat Inap</a></li>
          </ul>
        </li> 
        
        
        <li class="treeview">
          <a href="#">
            <i data-feather="grid"></i>
            <span>Paket Layanan</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-right pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="{{route('mcu.view')}}"><i class="ti-more"></i>Mcu</a></li>
            <li><a href="{{route('paketpersalinan.view')}}"><i class="ti-more"></i>PaketPersalinan</a></li>
            <li><a href="{{route('layananlaboratorium.view')}}"><i class="ti-more"></i>Layanan Laboratorium</a></li>
            <li><a href="{{route('eswl.view')}}"><i class="ti-more"></i>ESWL</a></li>
          </ul>
        </li>


        <li class="treeview">
          <a href="#">
            <i data-feather="grid"></i>
            <span>Promosi Kesehatan</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-right pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="{{route('promosikes.view')}}"><i class="ti-more"></i>Promosi Kesehatan</a></li>
          </ul>
        </li>


        
        <li class="treeview">
          <a href="#">
            <i data-feather="grid"></i>
            <span>Informasi Kesehatan</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-right pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="{{route('informasikes.view')}}"><i class="ti-more"></i>Informasi Kesehatan</a></li>
            <li><a href="{{route('artikelkes.view')}}"><i class="ti-more"></i>Artikel Kesehatan</a></li>
            <li><a href="{{route('berita.view')}}"><i class="ti-more"></i>Berita</a></li>
            <li><a href="{{route('kegiatankami.view')}}"><i class="ti-more"></i>Kegiatan Kami</a></li>
          </ul>
        </li>
		     
		<li>
          <a href="auth_login.html">
            <i data-feather="lock"></i>
			<span>Log Out</span>
          </a>
        </li> 
        
      </ul>
    </section>

  </aside>