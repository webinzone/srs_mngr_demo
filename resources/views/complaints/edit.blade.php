
@extends('layouts/default')

{{-- Page title --}}
@section('title')
Update Complaints
@parent
@stop
@section('header_right')
  <a href="{{ route('complaints.index') }}" class="btn btn-primary pull-right" style="border-color: #23536f;background-color: #307095;"> Back</a>
@stop

{{-- Page content --}}
@section('content')
<div id="webui">
  
    <div class="row">
        <!-- col-md-8 -->
        <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1 col-sm-12 col-sm-offset-0">

          
         <form id="create-form" class="form-horizontal" method="post" action = "{{ route ('complaints.update', $complaint->id) }}" autocomplete="off" role="form" >
            @method('PATCH') 

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
                                <a class="btn btn-link text-left" href="{{ route('complaints.index') }}">
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
                        <label for="name" class="col-md-3 control-label">Facility Name</label>
                        <div class="col-md-7 col-sm-12 required">
                 <input type="text" name="f_name" class="form-control" value="{{ $complaint->f_name}}">
        
                        </div>
                    </div>
                    <div class="form-group ">
                        <label for="name" class="col-md-3 control-label">Name of Person Commenting</label>
                        <div class="col-md-7 col-sm-12 required">
                 <input type="text" name="user_name" class="form-control" value="{{ $complaint->user_name}}">                                        
                        </div>
                    </div>
                    <div class="form-group ">
                        <label for="name" class="col-md-3 control-label">Person Completing Form</label>
                        <div class="col-md-7 col-sm-12 required">
                 <input type="text" name="c_name" class="form-control" value="{{ $complaint->c_name}}">                                       
                        </div>
                    </div>
                    <div class="form-group ">
                        <label for="name" class="col-md-3 control-label">Complaint Details</label>
                        <div class="col-md-7 col-sm-12 required">
                 <input type="text" name="com_details" class="form-control" value="{{ $complaint->com_details}}">                                       
                        </div>
                    </div>
                        <label for="name" class="col-md-3 control-label">Nature of Complaint</label>
                        <div class="col-md-7 col-sm-12 required">
                 <input type="text" name="com_nature" class="form-control" value="{{ $complaint->com_nature}}">                                       
                        </div>
                    </div>
                   <div class="form-group ">
                        <label for="name" class="col-md-3 control-label">Contact Number</label>
                        <div class="col-md-7 col-sm-12 required">
                 <input type="text" name="phone" class="form-control" value="{{ $complaint->phone}}">                                       
                        </div>
                    </div>
                    <div class="form-group ">
                        <label for="name" class="col-md-3 control-label">Suggestions for improvement</label>
                        <div class="col-md-7 col-sm-12 required">
                 <input type="text" name="suggestions" class="form-control" value="{{ $complaint->suggestions}}">                                       
                        </div>
                    </div>
                    <div class="form-group ">
                        <label for="name" class="col-md-3 control-label">Sign</label>
                        <div class="col-md-7 col-sm-12 required">
                 <input type="text" name="sign" class="form-control" value="{{ $complaint->sign}}">                                       
                        </div>
                    </div>
                    <div class="form-group ">
                        <label for="name" class="col-md-3 control-label">Action Date</label>
                        <div class="col-md-7 col-sm-12 required">
                 <input type="text" name="action_date" class="form-control" value="{{ $complaint->action_date}}">                                       
                        </div>
                    </div>
                    <div class="form-group ">
                        <label for="name" class="col-md-3 control-label">Action Taken</label>
                        <div class="col-md-7 col-sm-12 required">
                 <input type="text" name="action_taken" class="form-control" value="{{ $complaint->action_taken}}">                                       
                        </div>
                    </div>
                    <div class="form-group ">
                        <label for="name" class="col-md-3 control-label">Outcome or Methode of Communication</label>
                        <div class="col-md-7 col-sm-12 required">
                 <input type="text" name="outcome" class="form-control" value="{{ $complaint->outcome}}">                                       
                        </div>
                    </div>
                    <div class="box-footer text-right">
                        <a class="btn btn-link text-left" href="{{ route('complaints.index') }}">Cancel</a>
                        <button type="submit" class="btn btn-primary"><i class="fa fa-check icon-white" aria-hidden="true"></i> Save</button>
                    </div>

                </div> <!-- ./box-body -->
                            <!-- col-md-8 -->

            </div><!-- ./row -->
        </form>
      </div>
    </div>
</div>
@stop

@section('moar_scripts')
@include ('partials.bootstrap-table')
@stop

