@extends('admin.admin_master')

@section('admin')

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
	  <div class="container-full">
		<!-- Content Header (Page header) -->


		<!-- Main content -->
		<section class="content">
		  <div class="row">
			  
			<div class="col-12">

			 <div class="box">
				<div class="box-header with-border">
				  <h3 class="box-title">Data User</h3>
                  <a href="{{route('user.add')}}" style="float:right;" type="button" class="btn btn-rounded btn-success mb-5">Tambah User</a>
				</div>
				<!-- /.box-header -->
				<div class="box-body">
					<div class="table-responsive">
					  <table id="example1" class="table table-bordered table-striped">
						<thead>
							<tr>
								<th>Id</th>
								<th>Gambar</th>
								<th>Nama</th>
								<th>Aksi</th>
								
								
							</tr>
						</thead>
						<tbody>
							@foreach($allDataUser as $key => $user)
							<tr>
								<td>{{$key+1}}</td>
								<td>{{$user->usertype}}</td>
								<td>{{$user->name}}</td>
								
								<td>
									<a href="" class="btn btn-info">Edit</a>
									<a href="" class="btn btn-danger">Delate</a>
								<td>
							
							</tr>
							@endforeach

						</tfoot>
					  </table>
					</div>
					
				</div>
				<!-- /.box-body -->
			  </div>
			  <!-- /.box -->

			
			  <!-- /.box -->          
			</div>
			<!-- /.col -->
		  </div>
		  <!-- /.row -->
		</section>
		<!-- /.content -->
	  
	  </div>
  </div>
  <!-- /.content-wrapper -->



@endsection