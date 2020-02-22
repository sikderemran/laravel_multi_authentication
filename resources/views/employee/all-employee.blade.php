@extends('admin')
@section('employee_content')
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
								  <th>Zone</th>
								  <th>Code</th>
								  <th>Url</th>
								  <th>T_earn</th>
								  <th>L_Earn</th>
								  <th>C_Earn</th>
								  <th>To_earn</th>
								  <th>Status</th>
								  <th>Actions</th>
							  </tr>
						  </thead>   
						  <tbody>
						@foreach ($viewer as $viewers)	
							<tr>
								<td>{{$viewers->id}}</td>
								<td class="center">{{$viewers->name}}</td>
								<td class="center">{{$viewers->zone}}</td>
								<td class="center">{{$viewers->code}}</td>
								<td class="center">{{$viewers->url}}</td>
								<td class="center">{{$viewers->t_earn}}$</td>
								<td class="center">{{$viewers->l_earn}}$</td>
								<td class="center">{{$viewers->c_earn}}$</td>
								<td class="center">{{$viewers->to_earn}}$</td>
								<td class="center">
									@if ($viewers->status==0)
									<span class="label label-success">Unactive</span>
									@else
									<span class="label label-success">Active</span>	
									@endif
								</td>
								<td class="center">
									@if ($viewers->status==0)
									<a class="btn btn-success" href="{{URL::to('admin/activeEmployee/'.$viewers->id)}}">
										<i class="halflings-icon white thumbs-up"></i>
									</a>
									@else
									<a class="btn btn-danger" href="{{URL::to('admin/unactiveEmployee/'.$viewers->id)}}">
										<i class="halflings-icon white thumbs-down"></i>  
									</a>
									@endif
									
								
									<a class="btn btn-info" href="{{URL::to('admin/editEmployee/'.$viewers->id)}}">
										<i class="halflings-icon white edit"></i>  
									</a>
									<a class="btn btn-danger" href="{{URL::to('admin/deleteEmployee/'.$viewers->id)}}">
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