@extends('layouts/default')

{{-- Page title --}}
@section('title')
ConditionReports
@parent
@stop

@section('header_right')
    @can('create', \App\Models\ConditionReport::class)
        <a href="{{ route('condition_reports.index') }}" class="btn btn-primary pull-right" style="border-color: #23536f;background-color: #307095;"> Back</a>
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
                <h2 class="box-title"> ConditionReport</h2>
            </div>

            <div class="box-body">

                <!-- Asset name -->
                <div class="form-group">
                    <label class="col-sm-3 control-label">Room:</label>
                    <div class="col-md-6">
                        <p class="form-control-static">{{ $condition_report->room}}</p>
                    </div>
                </div>
               <div class="form-group">
                    <label class="col-sm-3 control-label">Items:</label>
                    <div class="col-md-6">
                        <p class="form-control-static">{{ $condition_report->items}}</p>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-3 control-label">Clean:</label>
                    <div class="col-md-6">
                        <p class="form-control-static">{{ $condition_report->clean}}</p>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-3 control-label">Undamaged:</label>
                    <div class="col-md-6">
                        <p class="form-control-static">{{ $condition_report->undamaged}}</p>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-3 control-label">Working:</label>
                    <div class="col-md-6">
                        <p class="form-control-static">{{ $condition_report->working}}</p>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-3 control-label">Landlord/Proprietor Comments:</label>
                    <div class="col-md-6">
                        <p class="form-control-static">{{ $condition_report->prop_comments}}</p>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-3 control-label">Resident Comments:</label>
                    <div class="col-md-6">
                        <p class="form-control-static">{{ $condition_report->res_comments}}</p>
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
