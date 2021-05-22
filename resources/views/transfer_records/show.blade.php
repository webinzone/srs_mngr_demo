@extends('layouts/default')

{{-- Page title --}}
@section('title')
TransferRecords
@parent
@stop

@section('header_right')
    @can('create', \App\Models\TransferRecord::class)
        <a href="{{ route('transfer_records.index') }}" class="btn btn-primary pull-right" style="border-color: #23536f;background-color: #307095;"> Back</a>
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
                <h2 class="box-title"> TransferRecord</h2>
            </div>

            <div class="box-body">

                <!-- Asset name -->
                <div class="form-group">
                    <label class="col-sm-3 control-label">Resident Name:</label>
                    <div class="col-md-6">
                        <p class="form-control-static">{{ $transfer_record->user_name}}</p>
                    </div>
                </div>
               <div class="form-group">
                    <label class="col-sm-3 control-label">Date of birth:</label>
                    <div class="col-md-6">
                        <p class="form-control-static">{{ $transfer_record->dob}}</p>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-3 control-label">Gender:</label>
                    <div class="col-md-6">
                        <p class="form-control-static">{{ $transfer_record->gender}}</p>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-3 control-label">Nationality:</label>
                    <div class="col-md-6">
                        <p class="form-control-static">{{ $transfer_record->nation}}</p>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-3 control-label">Language Spoken:</label>
                    <div class="col-md-6">
                        <p class="form-control-static">{{ $transfer_record->lan}}</p>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-3 control-label">Religion:</label>
                    <div class="col-md-6">
                        <p class="form-control-static">{{ $transfer_record->religion}}</p>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-3 control-label">Medicare No:</label>
                    <div class="col-md-6">
                        <p class="form-control-static">{{ $transfer_record->medi_no}}</p>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-3 control-label">Pension No:</label>
                    <div class="col-md-6">
                        <p class="form-control-static">{{ $transfer_record->pension_no}}</p>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-3 control-label">Chemist Detail:</label>
                    <div class="col-md-6">
                        <p class="form-control-static">{{ $transfer_record->chemist}}</p>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-3 control-label">Date:</label>
                    <div class="col-md-6">
                        <p class="form-control-static">{{ $transfer_record->date}}</p>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-3 control-label">From:</label>
                    <div class="col-md-6">
                        <p class="form-control-static">{{ $transfer_record->from}}</p>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-3 control-label">Address:</label>
                    <div class="col-md-6">
                        <p class="form-control-static">{{ $transfer_record->address}}</p>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-3 control-label">Ph:</label>
                    <div class="col-md-6">
                        <p class="form-control-static">{{ $transfer_record->ph}}</p>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-3 control-label">Fax:</label>
                    <div class="col-md-6">
                        <p class="form-control-static">{{ $transfer_record->fax}}</p>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-3 control-label">To:</label>
                    <div class="col-md-6">
                        <p class="form-control-static">{{ $transfer_record->to}}</p>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-3 control-label">Reason For Transfer:</label>
                    <div class="col-md-6">
                        <p class="form-control-static">{{ $transfer_record->reason}}</p>
                    </div>
                </div>    
                <div class="form-group">
                    <label class="col-sm-3 control-label">Current Medication Chart Attached?:</label>
                    <div class="col-md-6">
                        <p class="form-control-static">{{ $transfer_record->medi_chart}}</p>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-3 control-label">If no, list any medication the resident on:</label>
                    <div class="col-md-6">
                        <p class="form-control-static">{{ $transfer_record->medi_list}}</p>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-3 control-label">Websterpak:</label>
                    <div class="col-md-6">
                        <p class="form-control-static">{{ $transfer_record->webst}}</p>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-3 control-label">If no, list any medication sent with resident if any:</label>
                    <div class="col-md-6">
                        <p class="form-control-static">{{ $transfer_record->medi_sent}}</p>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-3 control-label">Last time Medication given:</label>
                    <div class="col-md-6">
                        <p class="form-control-static">{{ $transfer_record->last_time_medi}}</p>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-3 control-label">Accompanying Reports:</label>
                    <div class="col-md-6">
                        <p class="form-control-static">{{ $transfer_record->accomp_rpt}}</p>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-3 control-label">Next:</label>
                    <div class="col-md-6">
                        <p class="form-control-static">{{ $transfer_record->next}}</p>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-3 control-label">Has been advised of the transfer:</label>
                    <div class="col-md-6">
                        <p class="form-control-static">{{ $transfer_record->advised}}</p>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-3 control-label">Guardian:</label>
                    <div class="col-md-6">
                        <p class="form-control-static">{{ $transfer_record->guardian}}</p>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-3 control-label">Has been advised of the transfer:</label>
                    <div class="col-md-6">
                        <p class="form-control-static">{{ $transfer_record->guardian_adv}}</p>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-3 control-label">Case Manager:</label>
                    <div class="col-md-6">
                        <p class="form-control-static">{{ $transfer_record->case_mngr}}</p>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-3 control-label">Has been advised of the transfer:</label>
                    <div class="col-md-6">
                        <p class="form-control-static">{{ $transfer_record->case_mngr_adv}}</p>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-3 control-label">Person Nominated:</label>
                    <div class="col-md-6">
                        <p class="form-control-static">{{ $transfer_record->nomini}}</p>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-3 control-label">Has been advised of the transfer:</label>
                    <div class="col-md-6">
                        <p class="form-control-static">{{ $transfer_record->nomini_adv}}</p>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-3 control-label">Administrator:</label>
                    <div class="col-md-6">
                        <p class="form-control-static">{{ $transfer_record->admin}}</p>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-3 control-label">Has been advised of the transfer:</label>
                    <div class="col-md-6">
                        <p class="form-control-static">{{ $transfer_record->admin_adv}}</p>
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
