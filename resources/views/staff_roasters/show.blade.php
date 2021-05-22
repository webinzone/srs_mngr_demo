@extends('layouts/default')

{{-- Page title --}}
@section('title')
StaffRoasters
@parent
@stop

@section('header_right')
    @can('create', \App\Models\StaffRoaster::class)
        <a href="{{ route('staff_roasters.index') }}" class="btn btn-primary pull-right" style="border-color: #23536f;background-color: #307095;"> Back</a>
    @endcan
@stop

{{-- Page content --}}
@section('content')

  <div id="webui">
    <div class="row">
        <!-- left column -->
      <div class="col-md-7">
        <form class="form-horizontal" method="" action="" autocomplete="off">
          <div class="box box-default">
            <div class="box-header with-border">
                <h2 class="box-title"> StaffRoaster</h2>
            </div>

            <div class="box-body">

                <!-- Asset name -->
                <div class="form-group">
                    <label class="col-sm-3 control-label">Date:</label>
                    <div class="col-md-6">
                        <p class="form-control-static">{{ $staff_roaster->s_date}}</p>
                    </div>
                </div>
               <div class="form-group">
                    <label class="col-sm-3 control-label">Staff Member:</label>
                    <div class="col-md-6">
                        <p class="form-control-static">{{ $staff_roaster->s_name}}</p>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-3 control-label">Position:</label>
                    <div class="col-md-6">
                        <p class="form-control-static">{{ $staff_roaster->position}}</p>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-3 control-label">Monday:</label>
                    <div class="col-md-6">
                        <p class="form-control-static">{{ $staff_roaster->mon}}</p>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-3 control-label">Tuesday:</label>
                    <div class="col-md-6">
                        <p class="form-control-static">{{ $staff_roaster->tues}}</p>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-3 control-label">Wednsday:</label>
                    <div class="col-md-6">
                        <p class="form-control-static">{{ $staff_roaster->wed}}</p>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-3 control-label">Thursday:</label>
                    <div class="col-md-6">
                        <p class="form-control-static">{{ $staff_roaster->thurs}}</p>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-3 control-label">Friday:</label>
                    <div class="col-md-6">
                        <p class="form-control-static">{{ $staff_roaster->fri}}</p>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-3 control-label">Saturday:</label>
                    <div class="col-md-6">
                        <p class="form-control-static">{{ $staff_roaster->sat}}</p>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-3 control-label">Sunday:</label>
                    <div class="col-md-6">
                        <p class="form-control-static">{{ $staff_roaster->sun}}</p>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-3 control-label">Total Hrs:</label>
                    <div class="col-md-6">
                        <p class="form-control-static">{{ $staff_roaster->total_hrs}}</p>
                    </div>
                </div> 
                 <div class="form-group">
                    <label class="col-sm-3 control-label">Total:</label>
                    <div class="col-md-6">
                        <p class="form-control-static">{{ $staff_roaster->total}}</p>
                    </div>
                </div>     
          
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>

@stop

@section('moar_scripts')
@include ('partials.bootstrap-table')
@stop
