@extends('layouts/default')

{{-- Page title --}}
@section('title')
Transfers
@parent
@stop

@section('header_right')
    @can('create', \App\Models\Transfer::class)
        <a href="{{ route('transfers.index') }}" class="btn btn-primary pull-right" style="border-color: #23536f;background-color: #307095;"> Back</a>
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
                <h2 class="box-title"> Transfer</h2>
            </div>

            <div class="box-body">

                <!-- Asset name -->
                <div class="form-group">
                    <label class="col-sm-3 control-label">Resident Name:</label>
                    <div class="col-md-6">
                        <p class="form-control-static">{{ $transfer->user_name}}</p>
                    </div>
                </div>
               <div class="form-group">
                    <label class="col-sm-3 control-label">Date of birth:</label>
                    <div class="col-md-6">
                        <p class="form-control-static">{{ $transfer->dob}}</p>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-3 control-label">Gender:</label>
                    <div class="col-md-6">
                        <p class="form-control-static">{{ $transfer->gender}}</p>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-3 control-label">Nationality:</label>
                    <div class="col-md-6">
                        <p class="form-control-static">{{ $transfer->nationality}}</p>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-3 control-label">Languages Spoken:</label>
                    <div class="col-md-6">
                        <p class="form-control-static">{{ $transfer->languages}}</p>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-3 control-label">Religion:</label>
                    <div class="col-md-6">
                        <p class="form-control-static">{{ $transfer->religion}}</p>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-3 control-label">Medicare no:</label>
                    <div class="col-md-6">
                        <p class="form-control-static">{{ $transfer->medicare_no}}</p>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-3 control-label">Pension no:</label>
                    <div class="col-md-6">
                        <p class="form-control-static">{{ $transfer->pension_no}}</p>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-3 control-label">Chemist Details:</label>
                    <div class="col-md-6">
                        <p class="form-control-static">{{ $transfer->chemist}}</p>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-3 control-label">Date:</label>
                    <div class="col-md-6">
                        <p class="form-control-static">{{ $transfer->date}}</p>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-3 control-label">From:</label>
                    <div class="col-md-6">
                        <p class="form-control-static">{{ $transfer->from}}</p>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-3 control-label">Address:</label>
                    <div class="col-md-6">
                        <p class="form-control-static">{{ $transfer->address}}</p>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-3 control-label">Phone:</label>
                    <div class="col-md-6">
                        <p class="form-control-static">{{ $transfer->ph}}</p>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-3 control-label">Fax:</label>
                    <div class="col-md-6">
                        <p class="form-control-static">{{ $transfer->fax}}</p>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-3 control-label">To:</label>
                    <div class="col-md-6">
                        <p class="form-control-static">{{ $transfer->to}}</p>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-3 control-label">Reason for transfer:</label>
                    <div class="col-md-6">
                        <p class="form-control-static">{{ $transfer->reason}}</p>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-3 control-label">Current Medication chart attached?:</label>
                    <div class="col-md-6">
                        <p class="form-control-static">{{ $transfer->medication_chart}}</p>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-3 control-label">Medication List:</label>
                    <div class="col-md-6">
                        <p class="form-control-static">{{ $transfer->medication_list}}</p>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-3 control-label">Websterpak:</label>
                    <div class="col-md-6">
                        <p class="form-control-static">{{ $transfer->websterpak}}</p>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-3 control-label">Medication Sent:</label>
                    <div class="col-md-6">
                        <p class="form-control-static">{{ $transfer->medication_sent}}</p>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-3 control-label">Last Time Medication Given:</label>
                    <div class="col-md-6">
                        <p class="form-control-static">{{ $transfer->last_time_medication}}</p>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-3 control-label">Accompanying Reports:</label>
                    <div class="col-md-6">
                        <p class="form-control-static">{{ $transfer->accompanying_reports}}</p>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-3 control-label">Next:</label>
                    <div class="col-md-6">
                        <p class="form-control-static">{{ $transfer->next}}</p>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-3 control-label">Has been advised of the transfer:</label>
                    <div class="col-md-6">
                        <p class="form-control-static">{{ $transfer->advised}}</p>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-3 control-label">Guardian:</label>
                    <div class="col-md-6">
                        <p class="form-control-static">{{ $transfer->guardian}}</p>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-3 control-label">Has been advised of the transfer:</label>
                    <div class="col-md-6">
                        <p class="form-control-static">{{ $transfer->guardian_advised}}</p>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-3 control-label">Case Manager:</label>
                    <div class="col-md-6">
                        <p class="form-control-static">{{ $transfer->case_manager}}</p>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-3 control-label">Has been advised of the transfer:</label>
                    <div class="col-md-6">
                        <p class="form-control-static">{{ $transfer->case_manager_advised}}</p>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-3 control-label">Person Nominated:</label>
                    <div class="col-md-6">
                        <p class="form-control-static">{{ $transfer->nomini}}</p>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-3 control-label">Has been advised of the transfer:</label>
                    <div class="col-md-6">
                        <p class="form-control-static">{{ $transfer->nomini_advised}}</p>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-3 control-label">Administrator:</label>
                    <div class="col-md-6">
                        <p class="form-control-static">{{ $transfer->admin}}</p>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-3 control-label">Has been advised of the transfer:</label>
                    <div class="col-md-6">
                        <p class="form-control-static">{{ $transfer->admin_advised}}</p>
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
