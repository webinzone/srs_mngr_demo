
@extends('layouts/default')

{{-- Page title --}}
@section('title')
Create Progress Notes
@parent
@stop
@section('header_right')
    @can('create', \App\Models\ProgressNote::class)
        <a href="{{ route('progress_notes.index') }}" class="btn btn-primary pull-right" style="border-color: #23536f;background-color: #307095;"> Back</a>
    @endcan
@stop

@section('inputFields')

{{-- Page content --}}
@section('content')
<div id="webui">
  
	<div class="row">
	    <!-- col-md-8 -->
	    <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1 col-sm-12 col-sm-offset-0">

	      <form id="create-form" class="form-horizontal" method="post" action="{{ route('progress_notes.store') }}" autocomplete="off" role="form" >
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
	                            <a class="btn btn-link text-left" href="{{ route('progress_notes.index') }}">
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
					    <label for="name" class="col-md-3 control-label">Prg_Note</label>
					    <div class="col-md-7 col-sm-12 required">
  	             <input type="text" name="prg_note" class="form-control" placeholder="Age">					        	        
					    </div>
					</div>
					<div class="form-group ">
					    <label for="name" class="col-md-3 control-label">Staff</label>
					    <div class="col-md-7 col-sm-12 required">
  	             <input type="text" name="staff" class="form-control" placeholder="Gender">					        	        
					    </div>
					</div>
					<div class="form-group ">
					    <label for="name" class="col-md-3 control-label">Career</label>
					    <div class="col-md-7 col-sm-12 required">
  	             <input type="text" name="career" class="form-control" placeholder="Room No">					        	        
					    </div>
					</div>
					
					<div class="box-footer text-right">
					    <a class="btn btn-link text-left" href="{{ route('progress_notes.index') }}">Cancel</a>
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

