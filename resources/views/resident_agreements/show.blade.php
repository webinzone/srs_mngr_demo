@extends('layouts/default')

{{-- Page title --}}
@section('title')
ResidentAgreements
@parent
@stop

@section('header_right')
    @can('create', \App\Models\ResidentAgreement::class)
        <a href="{{ route('resident_agreements.index') }}" class="btn btn-primary pull-right" style="border-color: #23536f;background-color: #307095;"> Back</a>
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
                <h2 class="box-title"> ResidentAgreement</h2>
            </div>

            <div class="box-body">

                <!-- Asset name -->
                <div class="form-group">
                    <label class="col-sm-3 control-label">Resident Name:</label>
                    <div class="col-md-6">
                        <p class="form-control-static">{{ $resident_agreement->r_name}}</p>
                    </div>
                </div>
               <div class="form-group">
                    <label class="col-sm-3 control-label">Room No:</label>
                    <div class="col-md-6">
                        <p class="form-control-static">{{ $resident_agreement->room_no}}</p>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-3 control-label">Bed:</label>
                    <div class="col-md-6">
                        <p class="form-control-static">{{ $resident_agreement->bed}}</p>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-3 control-label">Date of Birth:</label>
                    <div class="col-md-6">
                        <p class="form-control-static">{{ $resident_agreement->dob}}</p>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-3 control-label">Guardian:</label>
                    <div class="col-md-6">
                        <p class="form-control-static">{{ $resident_agreement->guardian}}</p>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-3 control-label">Administrator:</label>
                    <div class="col-md-6">
                        <p class="form-control-static">{{ $resident_agreement->admin}}</p>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-3 control-label">Person Nominated:</label>
                    <div class="col-md-6">
                        <p class="form-control-static">{{ $resident_agreement->p_nomini}}</p>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-3 control-label">Indefinite period of stay form:</label>
                    <div class="col-md-6">
                        <p class="form-control-static">{{ $resident_agreement->i_period}}</p>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-3 control-label">Fixed period stay form:</label>
                    <div class="col-md-6">
                        <p class="form-control-static">{{ $resident_agreement->f_period}}</p>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-3 control-label">Ending on:</label>
                    <div class="col-md-6">
                        <p class="form-control-static">{{ $resident_agreement->ending_on}}</p>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-3 control-label">Fee for accommodation and personal support:</label>
                    <div class="col-md-6">
                        <p class="form-control-static">{{ $resident_agreement->acc_fee}}</p>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-3 control-label">How to pay:</label>
                    <div class="col-md-6">
                        <p class="form-control-static">{{ $resident_agreement->pay_method}}</p>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-3 control-label">Frequency of payment:</label>
                    <div class="col-md-6">
                        <p class="form-control-static">{{ $resident_agreement->freq_pay}}</p>
                    </div>
                </div>     
                <div class="form-group">
                    <label class="col-sm-3 control-label">Fee in advance charged for other items/service provide by SRS:</label>
                    <div class="col-md-6">
                        <p class="form-control-static">{{ $resident_agreement->advnc_fee}}</p>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-3 control-label">Security deposite charged:</label>
                    <div class="col-md-6">
                        <p class="form-control-static">{{ $resident_agreement->secu_depo}}</p>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-3 control-label">Reservation for charged:</label>
                    <div class="col-md-6">
                        <p class="form-control-static">{{ $resident_agreement->reserv_fee}}</p>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-3 control-label">Condition report provided to the resident?:</label>
                    <div class="col-md-6">
                        <p class="form-control-static">{{ $resident_agreement->condition_rep}}</p>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-3 control-label">Specify items and services provided to the resident:</label>
                    <div class="col-md-6">
                        <p class="form-control-static">{{ $resident_agreement->res_service}}</p>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-3 control-label">Any special items that may apply to the resident:</label>
                    <div class="col-md-6">
                        <p class="form-control-static">{{ $resident_agreement->spl_item}}</p>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-3 control-label">Personal properties belonging resident brought into SRS:</label>
                    <div class="col-md-6">
                        <p class="form-control-static">{{ $resident_agreement->pers_prop}}</p>
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
