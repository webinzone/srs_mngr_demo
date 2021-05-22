
@extends('layouts/default')

{{-- Page title --}}
@section('title')
Create Incident
@parent
@stop
@section('header_right')
    @can('create', \App\Models\Incident::class)
        <a href="{{ route('incidents.index') }}" class="btn btn-primary pull-right" style="border-color: #23536f;background-color: #307095;"> Back</a>
    @endcan
@stop

@section('inputFields')

{{-- Page content --}}
@section('content')
<div id="webui">
  
	<div class="row">
	    <!-- col-md-8 -->
	    <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1 col-sm-12 col-sm-offset-0">

	      <form id="create-form" class="form-horizontal" method="post" action="{{ route('incidents.store') }}" autocomplete="off" role="form" >
                 {{ csrf_field() }}

	        <!-- box -->
	        <div class="box box-default">
	            <!-- box-header -->
	            <div class="box-header with-border text-right">

	                <div class="col-md-12 box-title text-right" style="padding: 0px; margin: 0px;">

	                    <div class="col-md-12" style="padding: 0px; margin: 0px;">
	                        <div class="col-md-9 text-left">
	                                                    </div>
	                        <div class="col-md-3 text-right" style="padding-right: 10px;">
	                            <a class="btn btn-link text-left" href="{{ route('incidents.index') }}">
	                                Cancel
	                            </a>
	                            <button type="submit" class="btn btn-primary">
	                                <i class="fa fa-check icon-white" aria-hidden="true"></i>
	                                Save
	                            </button>
	                        </div>
	                    </div>
	                </div>

	            </div><!-- /.box-header -->

	            <!-- box-body -->
	            <div class="box-body">		                    
					<div class="form-group ">
					    <label for="name" class="col-md-3 control-label">Incident Date</label>
					    <div class="col-md-7 col-sm-12 required">
  	             <input type="text" name="i_date" class="form-control" placeholder="Incident Date">
        
					    </div>
					</div>
					<div class="form-group ">
					    <label for="name" class="col-md-3 control-label">Incident Time</label>
					    <div class="col-md-7 col-sm-12 required">
  	             <input type="text" name="i_time" class="form-control" placeholder="Incident Time">					        	        
					    </div>
					</div>
					<div class="form-group ">
					    <label for="name" class="col-md-3 control-label">Staff Name</label>
					    <div class="col-md-7 col-sm-12 required">
  	             <input type="text" name="s_name" class="form-control" placeholder="Staff Name">					        	        
					    </div>
					</div>
					<div class="form-group ">
					    <label for="name" class="col-md-3 control-label">Staff Sign</label>
					    <div class="col-md-7 col-sm-12 required">
  	             <input type="text" name="s_sign" class="form-control" placeholder="Staff Sign">					        	        
					    </div>
					</div>
					
					<div class="form-group ">
					    <label for="name" class="col-md-3 control-label">Person/involved effected in incident</label>
					    <div class="col-md-7 col-sm-12 required">
  	             <input type="text" name="p_name" class="form-control" placeholder="Person/involved effected in incident">					        	        
					    </div>
					</div>
					<div class="form-group ">
					    <label for="name" class="col-md-3 control-label">Location</label>
					    <div class="col-md-7 col-sm-12 required">
  	             <input type="text" name="place" class="form-control" placeholder="Location">					        	        
					    </div>
					</div>
					<div class="form-group ">
					    <label for="name" class="col-md-3 control-label">Doctor</label>
					    <div class="col-md-7 col-sm-12 required">
  	             <input type="text" name="doctor" class="form-control" placeholder="Doctor">					        	        
					    </div>
					</div>
					<div class="form-group ">
					    <label for="name" class="col-md-3 control-label">NOK</label>
					    <div class="col-md-7 col-sm-12 required">
  	             <input type="text" name="nok" class="form-control" placeholder="NOK">					        	        
					    </div>
					</div>
					<div class="form-group ">
					    <label for="name" class="col-md-3 control-label">Case Mgr</label>
					    <div class="col-md-7 col-sm-12 required">
  	             <input type="text" name="case_mgr" class="form-control" placeholder="Case Mgr">					        	        
					    </div>
					</div>
					<div class="form-group ">
					    <label for="name" class="col-md-3 control-label">Management</label>
					    <div class="col-md-7 col-sm-12 required">
  	             <input type="text" name="management" class="form-control" placeholder="Management">					        	        
					    </div>
					</div>
					<div class="form-group ">
					    <label for="name" class="col-md-3 control-label">DHSS</label>
					    <div class="col-md-7 col-sm-12 required">
  	             <input type="text" name="dhhs" class="form-control" placeholder="DHSS">					        	        
					    </div>
					</div>
					<div class="form-group ">
					    <label for="name" class="col-md-3 control-label">Notified Date</label>
					    <div class="col-md-7 col-sm-12 required">
  	             <input type="text" name="n_date" class="form-control" placeholder="Notified Date">					        	        
					    </div>
					</div>
					<div class="form-group ">
					    <label for="name" class="col-md-3 control-label">Notified Time</label>
					    <div class="col-md-7 col-sm-12 required">
  	             <input type="text" name="n_time" class="form-control" placeholder="Notified Time">					        	        
					    </div>
					</div>
					<div class="form-group ">
					    <label for="name" class="col-md-3 control-label">Resident transfferd to the hospital</label>
					    <div class="col-md-7 col-sm-12 required">
  	             <input type="text" name="res_hos" class="form-control" placeholder="Resident transfferd to the hospital">					        	        
					    </div>
					</div>
					<div class="form-group ">
					    <label for="name" class="col-md-3 control-label">Incident Details</label>
					    <div class="col-md-7 col-sm-12 required">
  	             <input type="text" name="i_details" class="form-control" placeholder="Incident Details">					        	        
					    </div>
					</div>
					<div class="form-group ">
					    <label for="name" class="col-md-3 control-label">Action Taken</label>
					    <div class="col-md-7 col-sm-12 required">
  	             <input type="text" name="actions" class="form-control" placeholder="Action Taken">					        	        
					    </div>
					</div>
					<div class="form-group ">
					    <label for="name" class="col-md-3 control-label">Action Date</label>
					    <div class="col-md-7 col-sm-12 required">
  	             <input type="text" name="action_date" class="form-control" placeholder="Action Date">					        	        
					    </div>
					</div>
					<div class="form-group ">
					    <label for="name" class="col-md-3 control-label">Other Details</label>
					    <div class="col-md-7 col-sm-12 required">
  	             <input type="text" name="o_det" class="form-control" placeholder="Other Details">					        	        
					    </div>
					</div>
					<div class="form-group ">
					    <label for="name" class="col-md-3 control-label">Prescribed reportable incident</label>
					    <div class="col-md-7 col-sm-12 required">
  	             <input type="text" name="i_prescribed" class="form-control" placeholder="Prescribed reportable incident">					        	        
					    </div>
					</div>
					<div class="form-group ">
					    <label for="name" class="col-md-3 control-label">Police notified</label>
					    <div class="col-md-7 col-sm-12 required">
  	             <input type="text" name="police_noti" class="form-control" placeholder="Police notified">					        	        
					    </div>
					</div>
					<div class="form-group ">
					    <label for="name" class="col-md-3 control-label">Does the resident’s support plan need updating</label>
					    <div class="col-md-7 col-sm-12 required">
  	             <input type="text" name="sp_update" class="form-control" placeholder="Does the resident’s support plan need updating">					        	        
					    </div>
					</div>
					<div class="form-group ">
					    <label for="name" class="col-md-3 control-label">Reported to the Department</label>
					    <div class="col-md-7 col-sm-12 required">
  	             <input type="text" name="reported" class="form-control" placeholder="Reported to the Department">					        	        
					    </div>
					</div>
					<div class="form-group ">
					    <label for="name" class="col-md-3 control-label">Authorized Officer’s Name</label>
					    <div class="col-md-7 col-sm-12 required">
  	             <input type="text" name="auth_name" class="form-control" placeholder="Authorized Officer’s Name">					        	        
					    </div>
					</div>
					<div class="form-group ">
					    <label for="name" class="col-md-3 control-label">Reported Date</label>
					    <div class="col-md-7 col-sm-12 required">
  	             <input type="text" name="rep_date" class="form-control" placeholder="Reported Date">					        	        
					    </div>
					</div>
					<div class="form-group ">
					    <label for="name" class="col-md-3 control-label">Reported Time</label>
					    <div class="col-md-7 col-sm-12 required">
  	             <input type="text" name="rep_time" class="form-control" placeholder="Reported Time">					        	        
					    </div>
					</div>
					<div class="box-footer text-right">
					    <a class="btn btn-link text-left" href="{{ route('incidents.index') }}">Cancel</a>
					    <button type="submit" class="btn btn-primary"><i class="fa fa-check icon-white" aria-hidden="true"></i> Save</button>
					</div>

				</div> <!-- ./box-body -->
						    <!-- col-md-8 -->

			    </div><!-- ./row -->
     </form>
</div>
@stop

@section('moar_scripts')
@include ('partials.bootstrap-table')
@stop

