@extends('layouts/default')

{{-- Page title --}}
@section('title')
SupportPlans
@parent
@stop

@section('header_right')
    @can('create', \App\Models\SupportPlan::class)
        <a href="{{ route('support_plans.create') }}" class="btn btn-primary pull-right" style="border-color: #23536f;background-color: #307095;"> Create New</a>
    @endcan
@stop

{{-- Page content --}}
@section('content')

<div class="row">@extends('layouts/default')

{{-- Page title --}}
@section('title')
SupportPlans
@parent
@stop

@section('header_right')
    @can('create', \App\Models\SupportPlan::class)
        <a href="{{ route('support_plans.create') }}" class="btn btn-primary pull-right" style="border-color: #23536f;background-color: #307095;"> Create New</a>
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
                data-columns="{{ \App\Presenters\SupportPlanPresenter::dataTableLayout() }}"
                data-cookie-id-table="support_plansTable"
                data-toolbar="#toolbar"
                data-pagination="true"
                data-id-table="support_plansTable"
                data-search="true"
                data-side-pagination="server"
                data-show-columns="true"
                data-show-export="true"
                data-show-refresh="true"
                data-show-footer="true"
                data-sort-order="asc"
                id="support_plansTable"
                class="table table-striped snipe-table"
                data-url="{{ route('api.support_plans.index') }}"
                data-export-options='{
                "fileName": "SupportPlans",
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
@include ('partials.bootstrap-table', ['search' => true, 'showFooter' => true, 'columns' => \App\Presenters\SupportPlanPresenter::dataTableLayout()])
@stop

  <div class="col-md-12">

    <div class="box box-default">
      <div class="box-body">
        <div class="table-responsive">

            <table
                data-columns="{{ \App\Presenters\SupportPlanPresenter::dataTableLayout() }}"
                data-cookie-id-table="support_plansTable"
                data-toolbar="#toolbar"
                data-pagination="true"
                data-id-table="support_plansTable"
                data-search="true"
                data-side-pagination="server"
                data-show-columns="true"
                data-show-export="true"
                data-show-refresh="true"
                data-show-footer="true"
                data-sort-order="asc"
                id="support_plansTable"
                class="table table-striped snipe-table"
                data-url="{{ route('api.support_plans.index') }}"
                data-export-options='{
                "fileName": "SupportPlans",
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
@include ('partials.bootstrap-table', ['search' => true, 'showFooter' => true, 'columns' => \App\Presenters\SupportPlanPresenter::dataTableLayout()])
@stop
