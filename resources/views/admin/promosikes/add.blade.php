@extends('admin.admin_master')
@section('admin')

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
	  <div class="container-full">
		<!-- Content Header (Page header) -->
		<div class="content-header">
			<div class="d-flex align-items-center">
				<div class="mr-auto">
					<h3 class="page-title">Tambah From Promosikes</h3>
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
			  <h4 class="box-title">Form Promosikes</h4>
			 
			</div>
			<!-- /.box-header -->
			<div class="box-body">
			  <div class="row">
				<div class="col">
                <form method="post" action="{{route('promosikes.store')}}" enctype="multipart/form-data">
                                @csrf
                        
					  <div class="row">
						<div class="col-12">	
                       
							<div class="form-group">
								<h5>Judul <span class="text-danger">*</span></h5>
									<input type="text" class="form-control @error('nama') is-invalid @enderror" name="nama">
                                    @error('nama')
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