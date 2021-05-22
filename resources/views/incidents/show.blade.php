@extends('layouts/default')

{{-- Page title --}}
@section('title')
Incidents
@parent
@stop

@section('header_right')
    @can('create', \App\Models\Incident::class)
        <a href="{{ route('incidents.index') }}" class="btn btn-primary pull-right" style="border-color: #23536f;background-color: #307095;"> Back</a>
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
                <h2 class="box-title"> Incident</h2>
            </div>

            <div class="box-body">

                <!-- Asset name -->
                <div class="form-group">
                    <label class="col-sm-3 control-label">Incident Date:</label>
                    <div class="col-md-6">
                        <p class="form-control-static">{{ $incident->i_dat}}</p>
                    </div>
                </div>
               <div class="form-group">
                    <label class="col-sm-3 control-label">Incident Time:</label>
                    <div class="col-md-6">
                        <p class="form-control-static">{{ $incident->i_time}}</p>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-3 control-label">Staff Name:</label>
                    <div class="col-md-6">
                        <p class="form-control-static">{{ $incident->s_name}}</p>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-3 control-label">Staff Sign:</label>
                    <div class="col-md-6">
                        <p class="form-control-static">{{ $incident->s_sign}}</p>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-3 control-label">Person/involved effected in incident:</label>
                    <div class="col-md-6">
                        <p class="form-control-static">{{ $incident->p_name}}</p>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-3 control-label">Location:</label>
                    <div class="col-md-6">
                        <p class="form-control-static">{{ $incident->place}}</p>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-3 control-label">Doctor:</label>
                    <div class="col-md-6">
                        <p class="form-control-static">{{ $incident->doctor}}</p>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-3 control-label">NOK:</label>
                    <div class="col-md-6">
                        <p class="form-control-static">{{ $incident->nok}}</p>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-3 control-label">Case Mgr:</label>
                    <div class="col-md-6">
                        <p class="form-control-static">{{ $incident->case_mgr}}</p>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-3 control-label">Management:</label>
                    <div class="col-md-6">
                        <p class="form-control-static">{{ $incident->management}}</p>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-3 control-label">DHSS:</label>
                    <div class="col-md-6">
                        <p class="form-control-static">{{ $incident->dhss}}</p>
                    </div>
                </div> 
                <div class="form-group">
                    <label class="col-sm-3 control-label">Notified Date:</label>
                    <div class="col-md-6">
                        <p class="form-control-static">{{ $incident->n_date}}</p>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-3 control-label">Notified Time:</label>
                    <div class="col-md-6">
                        <p class="form-control-static">{{ $incident->n_time}}</p>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-3 control-label">Resident transfferd to the hospital:</label>
                    <div class="col-md-6">
                        <p class="form-control-static">{{ $incident->res_hos}}</p>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-3 control-label">Incident Details:</label>
                    <div class="col-md-6">
                        <p class="form-control-static">{{ $incident->i_details}}</p>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-3 control-label">Action Taken:</label>
                    <div class="col-md-6">
                        <p class="form-control-static">{{ $incident->actions}}</p>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-3 control-label">Action Date:</label>
                    <div class="col-md-6">
                        <p class="form-control-static">{{ $incident->action_date}}</p>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-3 control-label">Other Details:</label>
                    <div class="col-md-6">
                        <p class="form-control-static">{{ $incident->o_det}}</p>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-3 control-label">Prescribed reportable incident:</label>
                    <div class="col-md-6">
                        <p class="form-control-static">{{ $incident->i_prescribed}}</p>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-3 control-label">Police notified:</label>
                    <div class="col-md-6">
                        <p class="form-control-static">{{ $incident->police_noti}}</p>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-3 control-label">Does the resident’s support plan need updating:</label>
                    <div class="col-md-6">
                        <p class="form-control-static">{{ $incident->sp_update}}</p>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-3 control-label">Reported to the Department:</label>
                    <div class="col-md-6">
                        <p class="form-control-static">{{ $incident->reported}}</p>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-3 control-label">Authorized Officer’s Name:</label>
                    <div class="col-md-6">
                        <p class="form-control-static">{{ $incident->auth_name}}</p>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-3 control-label">Reported Date:</label>
                    <div class="col-md-6">
                        <p class="form-control-static">{{ $incident->rep_date}}</p>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-3 control-label">Reported Time:</label>
                    <div class="col-md-6">
                        <p class="form-control-static">{{ $incident->rep_time}}</p>
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
