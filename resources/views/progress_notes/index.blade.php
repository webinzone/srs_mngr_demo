@extends('layouts/default')

{{-- Page title --}}
@section('title')
Progresse Notes
@parent
@stop

@section('header_right')
    @can('create', \App\Models\ProgressNote::class)
        <a href="{{ route('progress_notes.create') }}" class="btn btn-primary pull-right" style="border-color: #23536f;background-color: #307095;"> Create New</a>
    @endcan
@stop

{{-- Page content --}}
@section('content')

<div class="row">
  <div class="col-md-12">

    <div class="box box-default">
      <div class="box-body">
        <div class="table-responsive">

            <table
                data-columns="{{ \App\Presenters\ProgressNotePresenter::dataTableLayout() }}"
                data-cookie-id-table="progress_notesTable"
                data-toolbar="#toolbar"
                data-pagination="true"
                data-id-table="progress_notesTable"
                data-search="true"
                data-side-pagination="server"
                data-show-columns="true"
                data-show-export="true"
                data-show-refresh="true"
                data-show-footer="true"
                data-sort-order="asc"
                id="progress_notesTable"
                class="table table-striped snipe-table"
                data-url="{{ route('api.progress_notes.index') }}"
                data-export-options='{
                "fileName": "Progresses",
                "ignoreColumn": ["actions"]
                }'                
               >
            
          </table>
        </div>
      </div>
    </div>
  </div>
</div>

@stop

@section('moar_scripts')
@include ('partials.bootstrap-table', ['search' => true, 'showFooter' => true, 'columns' => \App\Presenters\ProgressNotePresenter::dataTableLayout()])
@stop
