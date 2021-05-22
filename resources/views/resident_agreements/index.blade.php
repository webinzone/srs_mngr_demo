@extends('layouts/default')

{{-- Page title --}}
@section('title')
ResidentAgreements
@parent
@stop

@section('header_right')
    @can('create', \App\Models\ResidentAgreement::class)
        <a href="{{ route('resident_agreements.create') }}" class="btn btn-primary pull-right" style="border-color: #23536f;background-color: #307095;"> Create New</a>
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
                data-columns="{{ \App\Presenters\ResidentAgreementPresenter::dataTableLayout() }}"
                data-cookie-id-table="resident_agreementsTable"
                data-toolbar="#toolbar"
                data-pagination="true"
                data-id-table="resident_agreementsTable"
                data-search="true"
                data-side-pagination="server"
                data-show-columns="true"
                data-show-export="true"
                data-show-refresh="true"
                data-show-footer="true"
                data-sort-order="asc"
                id="resident_agreementsTable"
                class="table table-striped snipe-table"
                data-url="{{ route('api.resident_agreements.index') }}"
                data-export-options='{
                "fileName": "ResidentAgreements",
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
@include ('partials.bootstrap-table', ['search' => true, 'showFooter' => true, 'columns' => \App\Presenters\ResidentAgreementPresenter::dataTableLayout()])
@stop
