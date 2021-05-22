@extends('layouts/default')

{{-- Page title --}}
@section('title')
StaffRoasters
@parent
@stop

@section('header_right')
    @can('create', \App\Models\StaffRoaster::class)
        <a href="{{ route('staff_roasters.create') }}" class="btn btn-primary pull-right" style="border-color: #23536f;background-color: #307095;"> Create New</a>
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
                data-columns="{{ \App\Presenters\StaffRoasterPresenter::dataTableLayout() }}"
                data-cookie-id-table="staff_roastersTable"
                data-toolbar="#toolbar"
                data-pagination="true"
                data-id-table="staff_roastersTable"
                data-search="true"
                data-side-pagination="server"
                data-show-columns="true"
                data-show-export="true"
                data-show-refresh="true"
                data-show-footer="true"
                data-sort-order="asc"
                id="staff_roastersTable"
                class="table table-striped snipe-table"
                data-url="{{ route('api.staff_roasters.index') }}"
                data-export-options='{
                "fileName": "StaffRoasters",
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
@include ('partials.bootstrap-table', ['search' => true, 'showFooter' => true, 'columns' => \App\Presenters\StaffRoasterPresenter::dataTableLayout()])
@stop
