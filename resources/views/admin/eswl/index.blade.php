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
				  <h3 class="box-title">Table ESWL</h3>
                  <a href="{{route('eswl.add')}}" style="float:right;" type="button" class="btn btn-rounded btn-info mb-5">Tambah</a>
				</div>
				<!-- /.box-header -->
				<div class="box-body">
					<div class="table-responsive">
					  <table id="example1" class="table table-bordered table-striped">
						<thead>
							<tr>
								<th>No</th>
								<th>Judul</th>
								<th>Gambar</th>
								<th>Deskripsi</th>
                                <th>Action</th>
								
								
							</tr>
						</thead>
						<tbody>
						@foreach($eswl as $data)	
							<tr>
								<td>{{$loop -> iteration}}</td>
								<td>{{$data->judul}}</td>
								<td>
                                 <img src="{{ asset('storage/eswl/gambar/' .$data->gambar) }}" width="180px" alt="Image">
                                 </td>


                                <td>{{$data->deskripsi}}</td>
								
								<td>
									<a href="{{ route('eswl.edit', $data->id) }}" class="btn btn-info">Edit</a>
									<a href="{{ route('eswl.delete', $data->id) }}" id="delete" class="btn btn-danger">Delate</a>
                                </td>
	
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