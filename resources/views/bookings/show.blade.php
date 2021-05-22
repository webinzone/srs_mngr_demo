@extends('layouts/default')

{{-- Page title --}}
@section('title')
Bookings
@parent
@stop

@section('header_right')
    @can('create', \App\Models\Booking::class)
        <a href="{{ route('bookings.index') }}" class="btn btn-primary pull-right" style="border-color: #23536f;background-color: #307095;"> Back</a>
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
                <h2 class="box-title"> Booking</h2>
            </div>

            <div class="box-body">

                <!-- Asset name -->
                <div class="form-group">
                    <label class="col-sm-3 control-label">Client Name:</label>
                    <div class="col-md-6">
                        <p class="form-control-static">{{ $booking->c_name}}</p>
                    </div>
                </div>
               <div class="form-group">
                    <label class="col-sm-3 control-label">BookFrom:</label>
                    <div class="col-md-6">
                        <p class="form-control-static">{{ $booking->b_from}}</p>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-3 control-label">BookTo:</label>
                    <div class="col-md-6">
                        <p class="form-control-static">{{ $booking->b_to}}</p>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-3 control-label">Bed:</label>
                    <div class="col-md-6">
                        <p class="form-control-static">{{ $booking->bed}}</p>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-3 control-label">Paying Via:</label>
                    <div class="col-md-6">
                        <p class="form-control-static">{{ $booking->pay_via}}</p>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-3 control-label">Quated Fee:</label>
                    <div class="col-md-6">
                        <p class="form-control-static">{{ $booking->quated_fee}}</p>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-3 control-label">Freq Fee:</label>
                    <div class="col-md-6">
                        <p class="form-control-static">{{ $booking->freq_fee}}</p>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-3 control-label">DOB:</label>
                    <div class="col-md-6">
                        <p class="form-control-static">{{ $booking->dob}}</p>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-3 control-label">Age:</label>
                    <div class="col-md-6">
                        <p class="form-control-static">{{ $booking->age}}</p>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-3 control-label">Reffering Contact Information:</label>
                    <div class="col-md-6">
                        <p class="form-control-static">{{ $booking->reffer_ph}}</p>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-3 control-label">Former Address:</label>
                    <div class="col-md-6">
                        <p class="form-control-static">{{ $booking->f_address}}</p>
                    </div>
                </div> 
                <div class="form-group">
                    <label class="col-sm-3 control-label">Reason or referral-details of discharge:</label>
                    <div class="col-md-6">
                        <p class="form-control-static">{{ $booking->reason}}</p>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-3 control-label">Personal car needs:</label>
                    <div class="col-md-6">
                        <p class="form-control-static">{{ $booking->p_car}}</p>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-3 control-label">Diagnosis History:</label>
                    <div class="col-md-6">
                        <p class="form-control-static">{{ $booking->d_history}}</p>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-3 control-label">Behaviours-wandering/agression:</label>
                    <div class="col-md-6">
                        <p class="form-control-static">{{ $booking->behav}}</p>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-3 control-label">History of or current substance abuse:</label>
                    <div class="col-md-6">
                        <p class="form-control-static">{{ $booking->substances}}</p>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-3 control-label">Current meds/assistance requierd:</label>
                    <div class="col-md-6">
                        <p class="form-control-static">{{ $booking->c_meds}}</p>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-3 control-label">Casemanager:</label>
                    <div class="col-md-6">
                        <p class="form-control-static">{{ $booking->case_mngr}}</p>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-3 control-label">Social Workers:</label>
                    <div class="col-md-6">
                        <p class="form-control-static">{{ $booking->social_wrkr}}</p>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-3 control-label">Forensichistory:</label>
                    <div class="col-md-6">
                        <p class="form-control-static">{{ $booking->forensic_history}}</p>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-3 control-label">Notes:</label>
                    <div class="col-md-6">
                        <p class="form-control-static">{{ $booking->notes}}</p>
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
