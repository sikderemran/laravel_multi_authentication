@extends('viewer')
@section('employee_details')
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
								  <th>Sub Link</th>
								  <th>Total earn</th>
								  <th>Last Month Earn</th>
								  <th>Current Month Earn</th>
								  <th>Today Earn</th>
								  <th>Status</th>
							  </tr>
						  </thead>   
						  <tbody>
						@foreach ($viewer as $viewers)	
							<tr>
								<td>{{$viewers->id}}</td>
								<td class="center">{{$viewers->name}}</td>
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
							</tr>
						@endforeach  							
						  </tbody>
					  </table>            
					</div>
				</div><!--/span-->
			
			</div><!--/row-->
@endsection