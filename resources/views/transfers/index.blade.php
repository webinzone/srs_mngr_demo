@extends('layouts/default')

{{-- Page title --}}
@section('title')
Transfers Records
@parent
@stop

@section('header_right')
    <a href="{{ route('transfers.create') }}" class="btn btn-primary pull-right" style="border-color: #23536f;background-color: #307095;"> Create New</a>
@stop

{{-- Page content --}}
@section('content')

<div class="row">
  <div class="col-md-12">

    <div class="box box-default">
      <div class="box-body">
        <div class="table-responsive">

            <table
                data-columns="{{ \App\Presenters\TransferPresenter::dataTableLayout() }}"
                data-cookie-id-table="transfersTable"
                data-toolbar="#toolbar"
                data-pagination="true"
                data-id-table="transfersTable"
                data-search="true"
                data-side-pagination="server"
                data-show-columns="true"
                data-show-export="true"
                data-show-refresh="true"
                data-show-footer="true"
                data-sort-order="asc"
                id="transfersTable"
                class="table table-striped snipe-table"
                data-url="{{ route('api.transfers.index') }}"
                data-export-options='{
                "fileName": "Transfers",
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
@include ('partials.bootstrap-table', ['search' => true, 'showFooter' => true, 'columns' => \App\Presenters\TransferPresenter::dataTableLayout()])
@stop
