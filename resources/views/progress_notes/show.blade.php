@extends('layouts/default')

{{-- Page title --}}
@section('title')
Complaints
@parent
@stop

@section('header_right')
    @can('create', \App\Models\ProgressNote::class)
        <a href="{{ route('progress_notes.index') }}" class="btn btn-primary pull-right" style="border-color: #23536f;background-color: #307095;"> Back</a>
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
                    <label class="col-sm-3 control-label">Progress Note:</label>
                    <div class="col-md-6">
                        <p class="form-control-static">{{ $progress_note->prg_note}}</p>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-3 control-label">Staff:</label>
                    <div class="col-md-6">
                        <p class="form-control-static">{{ $progress_note->staff}}</p>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-3 control-label">Career:</label>
                    <div class="col-md-6">
                        <p class="form-control-static">{{ $progress_note->career}}</p>
                    </div>
                </div>
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
