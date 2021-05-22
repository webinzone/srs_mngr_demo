@extends('layouts/default')

{{-- Page title --}}
@section('title')
Files
@parent
@stop

@section('header_right')
    @can('create', \App\Models\File::class)
        <a href="{{ route('files.index') }}" class="btn btn-primary pull-right" style="border-color: #23536f;background-color: #307095;"> Back</a>
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
                <h2 class="box-title"> File</h2>
            </div>

            <div class="box-body">

                <!-- Asset name -->
                <div class="form-group">
                    <label class="col-sm-3 control-label">User Name:</label>
                    <div class="col-md-6">
                        <p class="form-control-static">{{ $file->user_name}}</p>
                    </div>
                </div>
               <div class="form-group">
                    <label class="col-sm-3 control-label">Title:</label>
                    <div class="col-md-6">
                        <p class="form-control-static">{{ $file->title}}</p>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-3 control-label">Description:</label>
                    <div class="col-md-6">
                        <p class="form-control-static">{{ $file->desc}}</p>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-3 control-label">Choose File:</label>
                    <div class="col-md-6">
                        <p class="form-control-static">{{ $file->file_name}}</p>
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
