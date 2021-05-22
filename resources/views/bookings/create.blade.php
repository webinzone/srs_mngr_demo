
@extends('layouts/default')

{{-- Page title --}}
@section('title')
Create Booking
@parent
@stop
@section('header_right')
    @can('create', \App\Models\Booking::class)
        <a href="{{ route('bookings.index') }}" class="btn btn-primary pull-right" style="border-color: #23536f;background-color: #307095;"> Back</a>
    @endcan
@stop

@section('inputFields')

{{-- Page content --}}
@section('content')
<div id="webui">
  
	<div class="row">
	    <!-- col-md-8 -->
	    <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1 col-sm-12 col-sm-offset-0">

	      <form id="create-form" class="form-horizontal" method="post" action="{{ route('bookings.store') }}" autocomplete="off" role="form" >
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
	                            <a class="btn btn-link text-left" href="{{ route('bookings.index') }}">
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
					    <label for="name" class="col-md-3 control-label">Client Name</label>
					    <div class="col-md-7 col-sm-12 required">
  	             <input type="text" name="c_name" class="form-control" placeholder="Client Name">
        
					    </div>
					</div>
					<div class="form-group ">
					    <label for="name" class="col-md-3 control-label">BookFrom</label>
					    <div class="col-md-7 col-sm-12 required">
  	             <input type="text" name="b_from" class="form-control" placeholder="BookFrom">					        	        
					    </div>
					</div>
					<div class="form-group ">
					    <label for="name" class="col-md-3 control-label">BookTo</label>
					    <div class="col-md-7 col-sm-12 required">
  	             <input type="text" name="b_to" class="form-control" placeholder="BookTo">					        	        
					    </div>
					</div>
					<div class="form-group ">
					    <label for="name" class="col-md-3 control-label">Bed</label>
					    <div class="col-md-7 col-sm-12 required">
  	             <input type="text" name="bed" class="form-control" placeholder="Bed">					        	        
					    </div>
					</div>
					<div class="form-group ">
					    <label for="name" class="col-md-3 control-label">Paying Via</label>
					    <div class="col-md-7 col-sm-12 required">
  	             <input type="text" name="pay_via" class="form-control" placeholder="Paying Via">					        	        
					    </div>
					</div>
					<div class="form-group ">
					    <label for="name" class="col-md-3 control-label">Quated Fee</label>
					    <div class="col-md-7 col-sm-12 required">
  	             <input type="text" name="quated_fee" class="form-control" placeholder="Quated Fee">					        	        
					    </div>
					</div>
					<div class="form-group ">
					    <label for="name" class="col-md-3 control-label">Freq Fee</label>
					    <div class="col-md-7 col-sm-12 required">
  	             <input type="text" name="freq_fee" class="form-control" placeholder="Freq Fee">					        	        
					    </div>
					</div>
					<div class="form-group ">
					    <label for="name" class="col-md-3 control-label">DOB</label>
					    <div class="col-md-7 col-sm-12 required">
  	             <input type="text" name="dob" class="form-control" placeholder="DOB">					        	        
					    </div>
					</div>
					<div class="form-group ">
					    <label for="name" class="col-md-3 control-label">Age</label>
					    <div class="col-md-7 col-sm-12 required">
  	             <input type="text" name="age" class="form-control" placeholder="Action Date">					        	        
					    </div>
					</div>
					<div class="form-group ">
					    <label for="name" class="col-md-3 control-label">Reffering Contact Information</label>
					    <div class="col-md-7 col-sm-12 required">
  	             <input type="text" name="reffer_ph" class="form-control" placeholder="Reffering Contact Information">					        	        
					    </div>
					</div>
					<div class="form-group ">
					    <label for="name" class="col-md-3 control-label">Former Address</label>
					    <div class="col-md-7 col-sm-12 required">
  	             <input type="text" name="f_address" class="form-control" placeholder="Former Address">					        	        
					    </div>
					</div>
					<div class="form-group ">
					    <label for="name" class="col-md-3 control-label">Reason or referral-details of discharge</label>
					    <div class="col-md-7 col-sm-12 required">
  	             <input type="text" name="reason" class="form-control" placeholder="Reason or referral-details of discharge">					        	        
					    </div>
					</div>
					<div class="form-group ">
					    <label for="name" class="col-md-3 control-label">Personal car needs</label>
					    <div class="col-md-7 col-sm-12 required">
  	             <input type="text" name="p_car" class="form-control" placeholder="Personal car needs">					        	        
					    </div>
					</div>
					<div class="form-group ">
					    <label for="name" class="col-md-3 control-label">Diagnosis History</label>
					    <div class="col-md-7 col-sm-12 required">
  	             <input type="text" name="d_history" class="form-control" placeholder="Diagnosis History">					        	        
					    </div>
					</div>
					<div class="form-group ">
					    <label for="name" class="col-md-3 control-label">Behaviours-wandering/agression</label>
					    <div class="col-md-7 col-sm-12 required">
  	             <input type="text" name="behav" class="form-control" placeholder="Behaviours-wandering/agression">					        	        
					    </div>
					</div>
					<div class="form-group ">
					    <label for="name" class="col-md-3 control-label">History of or current substance abuse</label>
					    <div class="col-md-7 col-sm-12 required">
  	             <input type="text" name="substances" class="form-control" placeholder="History of or current substance abuse">					        	        
					    </div>
					</div>
					<div class="form-group ">
					    <label for="name" class="col-md-3 control-label">Current meds/assistance requierd</label>
					    <div class="col-md-7 col-sm-12 required">
  	             <input type="text" name="c_meds" class="form-control" placeholder="Current meds/assistance requierd">					        	        
					    </div>
					</div>
					<div class="form-group ">
					    <label for="name" class="col-md-3 control-label">Casemanager</label>
					    <div class="col-md-7 col-sm-12 required">
  	             <input type="text" name="case_mngr" class="form-control" placeholder="Casemanager">					        	        
					    </div>
					</div>
					<div class="form-group ">
					    <label for="name" class="col-md-3 control-label">Social Worker</label>
					    <div class="col-md-7 col-sm-12 required">
  	             <input type="text" name="social_wrkr" class="form-control" placeholder="Social Worker">					        	        
					    </div>
					</div>
					<div class="form-group ">
					    <label for="name" class="col-md-3 control-label">Forensichistory</label>
					    <div class="col-md-7 col-sm-12 required">
  	             <input type="text" name="forensic_history" class="form-control" placeholder="Forensichistory">					        	        
					    </div>
					</div>
					<div class="form-group ">
					    <label for="name" class="col-md-3 control-label">Notes</label>
					    <div class="col-md-7 col-sm-12 required">
  	             <input type="text" name="notes" class="form-control" placeholder="Notes">					        	        
					    </div>
					</div>
					<div class="box-footer text-right">
					    <a class="btn btn-link text-left" href="{{ route('bookings.index') }}">Cancel</a>
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

