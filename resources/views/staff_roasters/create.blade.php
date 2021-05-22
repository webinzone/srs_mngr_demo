
@extends('layouts/default')

{{-- Page title --}}
@section('title')
Create StaffRoaster
@parent
@stop
@section('header_right')
    @can('create', \App\Models\StaffRoaster::class)
        <a href="{{ route('staff_roasters.index') }}" class="btn btn-primary pull-right" style="border-color: #23536f;background-color: #307095;"> Back</a>
    @endcan
@stop

@section('inputFields')

{{-- Page content --}}
@section('content')
<div id="webui">
  
    <div class="row">
        <!-- col-md-8 -->
        <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1 col-sm-12 col-sm-offset-0">

          <form id="create-form" class="form-horizontal" method="post" action="{{ route('staff_roasters.store') }}" autocomplete="off" role="form" >
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
                                <a class="btn btn-link text-left" href="{{ route('staff_roasters.index') }}">
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
                        <label for="name" class="col-md-3 control-label">Date</label>
                        <div class="col-md-7 col-sm-12 required">
                 <input type="text" name="s_date" class="form-control" placeholder="Date">
        
                        </div>
                    </div>
                    <div class="form-group ">
                        <label for="name" class="col-md-3 control-label">Staff Member</label>
                        <div class="col-md-7 col-sm-12 required">
                 <input type="text" name="s_name" class="form-control" placeholder="Staff Member">                                      
                        </div>
                    </div>
                    <div class="form-group ">
                        <label for="name" class="col-md-3 control-label">Position</label>
                        <div class="col-md-7 col-sm-12 required">
                 <input type="text" name="position" class="form-control" placeholder="Position">                                        
                        </div>
                    </div>
                    <div class="form-group ">
                        <label for="name" class="col-md-3 control-label">Monday</label>
                        <div class="col-md-7 col-sm-12 required">
                 <input type="text" name="mon" class="form-control" placeholder="Monday">                                        
                        </div>
                    </div>
                    <div class="form-group ">
                        <label for="name" class="col-md-3 control-label">Tuesday</label>
                        <div class="col-md-7 col-sm-12 required">
                 <input type="text" name="tues" class="form-control" placeholder="Tuesday">                                       
                        </div>
                    </div>
                    <div class="form-group ">
                        <label for="name" class="col-md-3 control-label">Wednsday</label>
                        <div class="col-md-7 col-sm-12 required">
                 <input type="text" name="wed" class="form-control" placeholder="Wednsday">                                       
                        </div>
                    </div>
                    <div class="form-group ">
                        <label for="name" class="col-md-3 control-label">Thursday</label>
                        <div class="col-md-7 col-sm-12 required">
                 <input type="text" name="thurs" class="form-control" placeholder="Thursday">                                     
                        </div>
                    </div>
                    <div class="form-group ">
                        <label for="name" class="col-md-3 control-label">Friday</label>
                        <div class="col-md-7 col-sm-12 required">
                 <input type="text" name="fri" class="form-control" placeholder="Friday">                                      
                        </div>
                    </div>
                    <div class="form-group ">
                        <label for="name" class="col-md-3 control-label">Saturday</label>
                        <div class="col-md-7 col-sm-12 required">
                 <input type="text" name="sat" class="form-control" placeholder="Saturday">                                        
                        </div>
                    </div>
                    <div class="form-group ">
                        <label for="name" class="col-md-3 control-label">Sunday</label>
                        <div class="col-md-7 col-sm-12 required">
                 <input type="text" name="sun" class="form-control" placeholder="Sunday">                                      
                        </div>
                    </div>
                    <div class="form-group ">
                        <label for="name" class="col-md-3 control-label">Total Hrs</label>
                        <div class="col-md-7 col-sm-12 required">
                 <input type="text" name="total_hrs" class="form-control" placeholder="Total Hrs">                                        
                        </div>
                    </div>
                    <div class="form-group ">
                        <label for="name" class="col-md-3 control-label">Total</label>
                        <div class="col-md-7 col-sm-12 required">
                 <input type="text" name="total" class="form-control" placeholder="Total">                                      
                        </div>
                    </div>
                    <div class="box-footer text-right">
                        <a class="btn btn-link text-left" href="{{ route('staff_roasters.index') }}">Cancel</a>
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

