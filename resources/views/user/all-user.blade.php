@extends('admin')
@section('user_content')
<ul class="breadcrumb">
				<li>
					<i class="icon-home"></i>
					<a href="index.html">Home</a> 
					<i class="icon-angle-right"></i>
				</li>
				<li><a href="#">Tables</a></li>
			</ul>

			<div class="row-fluid sortable">		
				<div class="box span12">
					<div class="box-header" data-original-title>
						<h2><i class="halflings-icon user"></i><span class="break"></span>Members</h2>
						<div class="box-icon">
							<a href="#" class="btn-setting"><i class="halflings-icon wrench"></i></a>
							<a href="#" class="btn-minimize"><i class="halflings-icon chevron-up"></i></a>
							<a href="#" class="btn-close"><i class="halflings-icon remove"></i></a>
						</div>
					</div>
					<div class="box-content">
						<table class="table table-striped table-bordered bootstrap-datatable datatable">
						  <thead>
							  <tr>
								  <th>Id</th>
								  <th>Name</th>
								  <th>Email</th>
								  <th>Status</th>
								  <th>Actions</th>
							  </tr>
						  </thead>   
						  <tbody>
						@foreach ($user as $users)
							<tr>
							<td>{{$users->id}}</td>
								<td class="center">{{$users->name}}</td>
								<td class="center">{{$users->email}}</td>
								<td class="center">
									@if ($users->status==0)
									<span class="label label-success">Unactive</span>
									@else
									<span class="label label-success">active</span>	
									@endif
								</td>
								<td class="center">
									
									@if ($users->status==1)
									<a class="btn btn-danger" href="{{URL::to('admin/unactiveUser/'.$users->id)}}">
										<i class="halflings-icon white thumbs-down"></i>  
									</a>
									@else
									<a class="btn btn-success" href="{{URL::to('admin/activeUser/'.$users->id)}}">
										<i class="halflings-icon white thumbs-up"></i> 
									</a>
									@endif											
									<a class="btn btn-danger" href="{{URL::to('admin/deleteUser/'.$users->id)}}">
										<i class="halflings-icon white trash"></i> 
									</a>
								</td>
							</tr>
							@endforeach
													
						  </tbody>
					  </table>            
					</div>
				</div><!--/span-->
			
			</div><!--/row-->
@endsection