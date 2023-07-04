@extends('admin.admin_dashboard')
@section('admin')

<div class="page-content">
				<!--breadcrumb-->
				<div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
					<div class="breadcrumb-title pe-3">All Testimonials</div>
					<div class="ps-3">
						<nav aria-label="breadcrumb">
							<ol class="breadcrumb mb-0 p-0">
								<li class="breadcrumb-item"><a href="javascript:;"><i class="bx bx-home-alt"></i></a>
								</li>
								<li class="breadcrumb-item active" aria-current="page">All Testimonials</li>
							</ol>
						</nav>
					</div>
					<div class="ms-auto">
						<div class="btn-group">
		<a href="{{ route('add.testimonials') }}" class="btn btn-primary">Add Testimonials</a> 				 
						</div>
					</div>
				</div>
				<!--end breadcrumb-->

				<hr/>
				<div class="card">
					<div class="card-body">
						<div class="table-responsive">
							<table id="example" class="table table-striped table-bordered" style="width:100%">
								<thead>
			<tr>
				<th>Sl</th>
                <th>Testimonials Name</th>
				<th>Testimonials Title </th>
				<th>Testimonials Image </th>
                <th>Testimonials Text </th>
				<th>Action</th> 
			</tr>
		</thead>
		<tbody>
            
	@foreach($testimonials as $key => $item)		
			<tr>
				<td> {{ $key+1 }} </td>
				<td>{{ $item->testi_name }}</td>
                <td>{{ $item->testi_title }}</td>
              
				<td> <img src="{{ asset($item->testi_image) }}" style="width: 70px; height:40px;" >  </td>
                <td>{{ $item->long_descp }}</td>

				<td>
<a href="{{ route('edit.testimonials',$item->id) }}" class="btn btn-info">Edit</a>
<a href="{{ route('delete.testimonials',$item->id) }}" class="btn btn-danger" id="delete" >Delete</a>

				</td> 
			</tr>
			@endforeach


		</tbody>
		<tfoot>
			<tr>
				<th>Sl</th>
                <th>Testimonials Name</th>
				<th>Testimonials Title </th>
				<th>Testimonials Image </th>
                <th>Testimonials Text </th>
				<th>Action</th>  
			</tr>
		</tfoot>
	</table>
						</div>
					</div>
				</div>



			</div>




@endsection