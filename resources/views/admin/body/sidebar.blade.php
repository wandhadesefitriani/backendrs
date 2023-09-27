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
          <a href="{{route('user.view')}}">
            <i data-feather="pie-chart"></i>
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
            <li><a href="{{route('user.view')}}"><i class="ti-more"></i>Jadwal Dokter</a></li>
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
            <li><a href="{{route('user.view')}}"><i class="ti-more"></i>Layanan unggulan</a></li>
            <li><a href="{{route('user.view')}}"><i class="ti-more"></i>Layanan lainnya</a></li>
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
            <li><a href="{{route('user.view')}}"><i class="ti-more"></i>Rawat Inap</a></li>
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
            <span>Berita</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-right pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="{{route('user.view')}}"><i class="ti-more"></i>Berita</a></li>
          </ul>
        </li>
		
		<li class="treeview">
          <a href="#">
            <i data-feather="credit-card"></i>
            <span>Artikel</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-right pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
			<li><a href="{{route('user.view')}}"><i class="ti-more"></i>Artikel</a></li>
		  </ul>
        </li>  
		  
        <li class="treeview">
          <a href="#">
            <i data-feather="hard-drive"></i>
            <span>Kegiatan kami</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-right pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="{{route('user.view')}}"><i class="ti-more"></i>Kegiatan kami</a></li>>
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
	
	<div class="sidebar-footer">
		<!-- item-->
		<a href="javascript:void(0)" class="link" data-toggle="tooltip" title="" data-original-title="Settings" aria-describedby="tooltip92529"><i class="ti-settings"></i></a>
		<!-- item-->
		<a href="mailbox_inbox.html" class="link" data-toggle="tooltip" title="" data-original-title="Email"><i class="ti-email"></i></a>
		<!-- item-->
		<a href="javascript:void(0)" class="link" data-toggle="tooltip" title="" data-original-title="Logout"><i class="ti-lock"></i></a>
	</div>
  </aside>