@extends('layouts/default')

{{-- Page title --}}
@section('title')
Progress Report
@parent
@stop

@section('header_right')
    @can('create', \App\Models\Progress::class)
        <a href="{{ route('progresses.index') }}" class="btn btn-primary pull-right" style="border-color: #23536f;background-color: #307095;"> Back</a>
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
                <h2 class="box-title"> Progress</h2>
            </div>

            <div class="box-body">

                <!-- Asset name -->
                <div class="form-group">
                    <label class="col-sm-3 control-label">Name:</label>
                    <div class="col-md-6">
                        <p class="form-control-static">{{ $progress->name}}</p>
                    </div>
                </div>
               <div class="form-group">
                    <label class="col-sm-3 control-label">Age:</label>
                    <div class="col-md-6">
                        <p class="form-control-static">{{ $progress->age}}</p>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-3 control-label">Gender:</label>
                    <div class="col-md-6">
                        <p class="form-control-static">{{ $progress->gender}}</p>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-3 control-label">Room_no:</label>
                    <div class="col-md-6">
                        <p class="form-control-static">{{ $progress->room_no}}</p>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-3 control-label">Progress Note:</label>
                    <div class="col-md-6">
                        <p class="form-control-static">{{ $progress->p_note}}</p>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-3 control-label">Sign:</label>
                    <div class="col-md-6">
                        <p class="form-control-static">{{ $progress->sign}}</p>
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
