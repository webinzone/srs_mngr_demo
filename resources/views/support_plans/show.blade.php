@extends('layouts/default')

{{-- Page title --}}
@section('title')
SupportPlans
@parent
@stop

@section('header_right')
    @can('create', \App\Models\SupportPlan::class)
        <a href="{{ route('support_plans.index') }}" class="btn btn-primary pull-right" style="border-color: #23536f;background-color: #307095;"> Back</a>
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
                <h2 class="box-title"> SupportPlan</h2>
            </div>

            <div class="box-body">

                <!-- Asset name -->
                <div class="form-group">
                    <label class="col-sm-3 control-label">Name:</label>
                    <div class="col-md-6">
                        <p class="form-control-static">{{ $support_plan->user_name}}</p>
                    </div>
                </div>
               <div class="form-group">
                    <label class="col-sm-3 control-label">Personal Hygiene:</label>
                    <div class="col-md-6">
                        <p class="form-control-static">{{ $support_plan->hygiene}}</p>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-3 control-label">Eating ana Nutrition:</label>
                    <div class="col-md-6">
                        <p class="form-control-static">{{ $support_plan->nutrition}}</p>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-3 control-label">Health Care:</label>
                    <div class="col-md-6">
                        <p class="form-control-static">{{ $support_plan->health_care}}</p>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-3 control-label">Medication:</label>
                    <div class="col-md-6">
                        <p class="form-control-static">{{ $support_plan->medication}}</p>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-3 control-label">Social Contact and Emotional Wellbeing:</label>
                    <div class="col-md-6">
                        <p class="form-control-static">{{ $support_plan->social_contact}}</p>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-3 control-label">Behaviour:</label>
                    <div class="col-md-6">
                        <p class="form-control-static">{{ $support_plan->behaviour}}</p>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-3 control-label">Goals/Finances/Other:</label>
                    <div class="col-md-6">
                        <p class="form-control-static">{{ $support_plan->goals}}</p>
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
