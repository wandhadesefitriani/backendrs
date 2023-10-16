@extends('admin.admin_master')
@section('admin')

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
	  <div class="container-full">
		<!-- Content Header (Page header) -->
		<div class="content-header">
			<div class="d-flex align-items-center">
				<div class="mr-auto">
					<h3 class="page-title">Tambah From Layanan Lainnya</h3>
					<div class="d-inline-block align-items-center">
						<!-- <nav>
							<ol class="breadcrumb">
								<li class="breadcrumb-item"><a href="#"><i class="mdi mdi-home-outline"></i></a></li>
								<li class="breadcrumb-item" aria-current="page">Forms</li>
								<li class="breadcrumb-item active" aria-current="page">Form Validation</li>
							</ol>
						</nav> -->
					</div>
				</div>
			</div>
		</div>	  

		<!-- Main content -->
		<section class="content">

		 <!-- Basic Forms -->
		  <div class="box">
			<div class="box-header with-border">
			  <h4 class="box-title">Form Layanan Lainnya</h4>
			 
			</div>
			<!-- /.box-header -->
			<div class="box-body">
			  <div class="row">
				<div class="col">
                <form method="post" action="{{route('layananlainnya.store')}}" enctype="multipart/form-data">
                                @csrf
                        
					  <div class="row">
						<div class="col-12">	
                       
							<div class="form-group">
								<h5>Judul <span class="text-danger">*</span></h5>
									<input type="text" class="form-control @error('judul') is-invalid @enderror" name="judul">
                                    @error('judul')
                                   <div class="invalid-feedback">
                                   {{$message}}
                                   </div>
                                   @enderror
                                    </div>
                                    
							
                           

                            <div class="form-group">
								<h5>Gambar <span class="text-danger">*</span></h5>
                                <input type="file" class="form-control @error('gambar') is-invalid @enderror" name="gambar" data-buttonname="btn-secondary" >
                                @error('gambar')
                                   <div class="invalid-feedback">
                                   {{$message}}
                                   </div>
                                   @enderror
                                    </div>	
							


                            <div class="form-group">
								<h5>Deskripsi <span class="text-danger">*</span></h5>
                                <textarea class="form-control" name="deskripsi" id="exampleFormControlTextarea1" rows="3"></textarea>
							</div>    
							
                        <!-- END row select -->  
						<div class="text-xs-right">
							<button style="float:right;" type="submit" class="btn btn-rounded btn-success">Submit</button>
						</div>
					</form>

				</div>
				<!-- /.col -->
			  </div>
			  <!-- /.row -->
			</div>
			<!-- /.box-body -->
		  </div>
		  <!-- /.box -->

		</section>
		<!-- /.content -->
	  </div>
  </div>
  <!-- /.content-wrapper -->
  

@endsection