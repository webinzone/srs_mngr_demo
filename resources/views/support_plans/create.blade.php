
@extends('layouts/default')

{{-- Page title --}}
@section('title')
Create SupportPlan
@parent
@stop
@section('header_right')
    @can('create', \App\Models\SupportPlan::class)
        <a href="{{ route('support_plans.index') }}" class="btn btn-primary pull-right" style="border-color: #23536f;background-color: #307095;"> Back</a>
    @endcan
@stop

@section('inputFields')

{{-- Page content --}}
@section('content')
<div id="webui">
  
    <div class="row">
        <!-- col-md-8 -->
        <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1 col-sm-12 col-sm-offset-0">

          <form id="create-form" class="form-horizontal" method="post" action="{{ route('support_plans.store') }}" autocomplete="off" role="form" >
                 {{ csrf_field() }}

            <!-- box -->
            <div class="box box-default">
                <!-- box-header -->
                <div class="box-header with-border text-right">

                    <div class="col-md-12 box-title text-right" style="padding: 0px; margin: 0px;">

                        <div class="col-md-12" style="padding: 0px; margin: 0px;">
                            <div class="col-md-9 text-left">
                                                        </div>
                            <div class="col-md-3 text-right" style="padding-right: 10px;">
                                <a class="btn btn-link text-left" href="{{ route('support_plans.index') }}">
                                    Cancel
                                </a>
                                <button type="submit" class="btn btn-primary">
                                    <i class="fa fa-check icon-white" aria-hidden="true"></i>
                                    Save
                                </button>
                            </div>
                        </div>
                    </div>

                </div><!-- /.box-header -->

                <!-- box-body -->
                <div class="box-body">                          
                    <div class="form-group ">
                        <label for="name" class="col-md-3 control-label">Name</label>
                        <div class="col-md-7 col-sm-12 required">
                 <input type="text" name="user_name" class="form-control" placeholder="Name">
        
                        </div>
                    </div>
                    <div class="form-group ">
                        <label for="name" class="col-md-3 control-label">Personal Hygiene</label>
                        <div class="col-md-7 col-sm-12 required">
                 <input type="text" name="hygiene" class="form-control" placeholder="Personal Hygiene">                                      
                        </div>
                    </div>
                    <div class="form-group ">
                        <label for="name" class="col-md-3 control-label">Eating ana Nutrition</label>
                        <div class="col-md-7 col-sm-12 required">
                 <input type="text" name="nutrition" class="form-control" placeholder="Eating ana Nutrition">                                        
                        </div>
                    </div>
                    <div class="form-group ">
                        <label for="name" class="col-md-3 control-label">Health Care</label>
                        <div class="col-md-7 col-sm-12 required">
                 <input type="text" name="health_care" class="form-control" placeholder="Health Care">                                        
                        </div>
                    </div>
                    <div class="form-group ">
                        <label for="name" class="col-md-3 control-label">Medication</label>
                        <div class="col-md-7 col-sm-12 required">
                 <input type="text" name="medication" class="form-control" placeholder="Medication">                                       
                        </div>
                    </div>
                    <div class="form-group ">
                        <label for="name" class="col-md-3 control-label">Social Contact and Emotional Wellbeing</label>
                        <div class="col-md-7 col-sm-12 required">
                 <input type="text" name="social_contact" class="form-control" placeholder="Social Contact and Emotional Wellbeing">                                     
                        </div>
                    </div>
                    <div class="form-group ">
                        <label for="name" class="col-md-3 control-label">Behaviour</label>
                        <div class="col-md-7 col-sm-12 required">
                 <input type="text" name="behaviour" class="form-control" placeholder="Behaviour">                                      
                        </div>
                    </div>
                    <div class="form-group ">
                        <label for="name" class="col-md-3 control-label">Goals/Finances/Other</label>
                        <div class="col-md-7 col-sm-12 required">
                 <input type="text" name="goals" class="form-control" placeholder="Goals/Finances/Other">                                        
                        </div>
                    </div>
                    <div class="box-footer text-right">
                        <a class="btn btn-link text-left" href="{{ route('support_plans.index') }}">Cancel</a>
                        <button type="submit" class="btn btn-primary"><i class="fa fa-check icon-white" aria-hidden="true"></i> Save</button>
                    </div>

                </div> <!-- ./box-body -->
                            <!-- col-md-8 -->

                </div><!-- ./row -->
     </form>
</div>
@stop

@section('moar_scripts')
@include ('partials.bootstrap-table')
@stop

