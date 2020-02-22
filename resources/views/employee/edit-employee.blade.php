@extends('admin')
@section('employee_content')
<ul class="breadcrumb">
				<li>
					<i class="icon-home"></i>
					<a href="index.html">Home</a>
					<i class="icon-angle-right"></i> 
				</li>
				<li>
					<i class="icon-edit"></i>
					<a href="#">Forms</a>
				</li>
			</ul>
			
			<div class="row-fluid sortable">
				<div class="box span12">
					<div class="box-header" data-original-title>
						<h2><i class="halflings-icon edit"></i><span class="break"></span>Form Elements</h2>
						<div class="box-icon">
							<a href="#" class="btn-setting"><i class="halflings-icon wrench"></i></a>
							<a href="#" class="btn-minimize"><i class="halflings-icon chevron-up"></i></a>
							<a href="#" class="btn-close"><i class="halflings-icon remove"></i></a>
						</div>
					</div>
					<p class="alert-success">
						
					</p>
				@foreach ($edit as $edits)
					<div class="box-content">
						<form class="form-horizontal" action="" method="post" enctype="multipart/form-data">
						@csrf	
						  <fieldset>
							<div class="control-group">
							  <label class="control-label" for="date01">Employee Name</label>
							  <div class="controls">
							  <input type="text" class="input-xlarge" id="date01" name="name" value="{{$edits->name}}" readonly>
							  </div>
							</div>
							<div class="control-group">
								<label class="control-label" for="date01">View Name</label>
								<div class="controls">
								<input type="text" class="input-xlarge" id="date01" name="name" value="{{$edits->v_name}}" readonly>
								</div>
							</div>
							<div class="control-group">
								<label class="control-label" for="date01">Url Name</label>
								<div class="controls">
								<input type="text" class="input-xlarge" id="date01" name="name" value="{{$edits->u_name}}">
								</div>
							</div> 
							<div class="control-group">
								<label class="control-label" for="date01">Zone Name</label>
								<div class="controls">
								<input type="text" class="input-xlarge" id="date01" name="name" value="{{$edits->zone}}" readonly>
								</div>
							</div>  
							<div class="control-group">
							  <label class="control-label" for="fileInput">Code Js</label>
							  <div class="controls">
								<input class="input-file uniform_on" name="code" id="fileInput" type="file" value="{{$edits->code}}">
							  </div>
							</div> 
							<div class="control-group">
							  <label class="control-label" for="date01">Url</label>
							  <div class="controls">
								<input type="text" class="input-xlarge" id="date01" name="url" value="{{$edits->url}}">
							  </div>
							</div> 
							<div class="control-group">
							  <label class="control-label" for="date01">Total Earn</label>
							  <div class="controls">
								<input type="text" class="input-xlarge" id="date01" name="t_earn" value="{{$edits->t_earn}}">
							  </div>
							</div> 
							<div class="control-group">
							  <label class="control-label" for="date01">Last Month Earn</label>
							  <div class="controls">
								<input type="text" class="input-xlarge" id="date01" name="l_earn" value="{{$edits->l_earn}}">
							  </div>
							</div>
							<div class="control-group">
								<label class="control-label" for="date01">Current Month Earn</label>
								<div class="controls">
								  <input type="text" class="input-xlarge" id="date01" name="c_earn" value="{{$edits->c_earn}}" readonly>
								</div>
							  </div> 
							  <div class="control-group">
								<label class="control-label" for="date01">Today</label>
								<div class="controls">
								  <input type="text" class="input-xlarge" id="date01" name="c_earn" value="{{$edits->to_earn}}" readonly>
								</div>
							  </div>          
							<div class="form-actions">
							  <button type="submit" class="btn btn-primary">Save changes</button>
							</div>
						  </fieldset>
						</form>   

					</div>
					@endforeach
				</div><!--/span-->

			</div><!--/row-->
@endsection()