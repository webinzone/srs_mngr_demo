
@extends('layouts/default')

{{-- Page title --}}
@section('title')
Update TransferRecords
@parent
@stop
@section('header_right')
  <a href="{{ route('transfer_records.index') }}" class="btn btn-primary pull-right" style="border-color: #23536f;background-color: #307095;"> Back</a>
@stop

{{-- Page content --}}
@section('content')
<div id="webui">
  
    <div class="row">
        <!-- col-md-8 -->
        <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1 col-sm-12 col-sm-offset-0">

          
         <form id="create-form" class="form-horizontal" method="post" action = "{{ route ('transfer_records.update', $transfer_record->id) }}" autocomplete="off" role="form" >
            @method('PATCH') 

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
                                <a class="btn btn-link text-left" href="{{ route('transfer_records.index') }}">
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
                        <label for="name" class="col-md-3 control-label">Resident Name</label>
                        <div class="col-md-7 col-sm-12 required">
                 <input type="text" name="user_name" class="form-control" value="{{ $transfer_record->user_name}}">
        
                        </div>
                    </div>
                    <div class="form-group ">
                        <label for="name" class="col-md-3 control-label">Date of birth</label>
                        <div class="col-md-7 col-sm-12 required">
                 <input type="text" name="dob" class="form-control" value="{{ $transfer_record->dob}}">                                        
                        </div>
                    </div>
                    <div class="form-group ">
                        <label for="name" class="col-md-3 control-label">Gender</label>
                        <div class="col-md-7 col-sm-12 required">
                 <input type="text" name="gender" class="form-control" value="{{ $transfer_record->gender}}">                                       
                        </div>
                    </div>
                    <div class="form-group ">
                        <label for="name" class="col-md-3 control-label">Nationality</label>
                        <div class="col-md-7 col-sm-12 required">
                 <input type="text" name="nation" class="form-control" value="{{ $transfer_record->nation}}">                                       
                        </div>
                    </div>
                    <div class="form-group ">
                        <label for="name" class="col-md-3 control-label">Language Spoken</label>
                        <div class="col-md-7 col-sm-12 required">
                 <input type="text" name="lan" class="form-control" value="{{ $transfer_record->lan}}">                                       
                        </div>
                    </div>
                   <div class="form-group ">
                        <label for="name" class="col-md-3 control-label">Religion</label>
                        <div class="col-md-7 col-sm-12 required">
                 <input type="text" name="religion" class="form-control" value="{{ $transfer_record->religion}}">                                       
                        </div>
                    </div>
                    <div class="form-group ">
                        <label for="name" class="col-md-3 control-label">Medicare No</label>
                        <div class="col-md-7 col-sm-12 required">
                 <input type="text" name="medi_no" class="form-control" value="{{ $transfer_record->medi_no}}">                                       
                        </div>
                    </div>
                    <div class="form-group ">
                        <label for="name" class="col-md-3 control-label">Pension No</label>
                        <div class="col-md-7 col-sm-12 required">
                 <input type="text" name="pension_no" class="form-control" value="{{ $transfer_record->pension_no}}">                                       
                        </div>
                    </div>
                    <div class="form-group ">
                        <label for="name" class="col-md-3 control-label">Chemist Detail</label>
                        <div class="col-md-7 col-sm-12 required">
                 <input type="text" name="chemist" class="form-control" value="{{ $transfer_record->chemist}}">                                       
                        </div>
                    </div>
                    <div class="form-group ">
                        <label for="name" class="col-md-3 control-label">Date</label>
                        <div class="col-md-7 col-sm-12 required">
                 <input type="text" name="date" class="form-control" value="{{ $transfer_record->date}}">                                       
                        </div>
                    </div>
                    <div class="form-group ">
                        <label for="name" class="col-md-3 control-label">From</label>
                        <div class="col-md-7 col-sm-12 required">
                 <input type="text" name="from" class="form-control" class="form-control" value="{{ $transfer_record->from}}">                                       
                        </div>
                    </div>
                    <div class="form-group ">
                        <label for="name" class="col-md-3 control-label">Address</label>
                        <div class="col-md-7 col-sm-12 required">
                 <input type="text" name="address" class="form-control" class="form-control" value="{{ $transfer_record->address}}">                                       
                        </div>
                    </div>
                    <div class="form-group ">
                        <label for="name" class="col-md-3 control-label">Ph</label>
                        <div class="col-md-7 col-sm-12 required">
                 <input type="text" name="ph" class="form-control" class="form-control" value="{{ $transfer_record->ph}}">                                       
                        </div>
                    </div>
                    <div class="form-group ">
                        <label for="name" class="col-md-3 control-label">Fax</label>
                        <div class="col-md-7 col-sm-12 required">
                 <input type="text" name="fax" class="form-control" class="form-control" value="{{ $transfer_record->fax}}">                                       
                        </div>
                    </div>
                    <div class="form-group ">
                        <label for="name" class="col-md-3 control-label">To</label>
                        <div class="col-md-7 col-sm-12 required">
                 <input type="text" name="to" class="form-control" class="form-control" value="{{ $transfer_record->to}}">                                       
                        </div>
                    </div>
                    <div class="form-group ">
                        <label for="name" class="col-md-3 control-label">Reason For Transfer</label>
                        <div class="col-md-7 col-sm-12 required">
                 <input type="text" name="reason" class="form-control" class="form-control" value="{{ $transfer_record->reason}}">                                       
                        </div>
                    </div>
                    <div class="form-group ">
                        <label for="name" class="col-md-3 control-label">Current Medication Chart Attached?</label>
                        <div class="col-md-7 col-sm-12 required">
                 <input type="text" name="medi_chart" class="form-control" class="form-control" value="{{ $transfer_record->medi_chart}}">                                       
                        </div>
                    </div>
                    <div class="form-group ">
                        <label for="name" class="col-md-3 control-label">If no, list any medication the resident on</label>
                        <div class="col-md-7 col-sm-12 required">
                 <input type="text" name="medi_list" class="form-control" class="form-control" value="{{ $transfer_record->medi_list}}">                                       
                        </div>
                    </div>
                    <div class="form-group ">
                        <label for="name" class="col-md-3 control-label">Websterpak</label>
                        <div class="col-md-7 col-sm-12 required">
                 <input type="text" name="webst" class="form-control" class="form-control" value="{{ $transfer_record->webst}}">                                       
                        </div>
                    </div>
                    <div class="form-group ">
                        <label for="name" class="col-md-3 control-label">If no, list any medication sent with resident if any</label>
                        <div class="col-md-7 col-sm-12 required">
                 <input type="text" name="medi_sent" class="form-control" class="form-control" value="{{ $transfer_record->medi_sent}}">                                       
                        </div>
                    </div>
                    <div class="form-group ">
                        <label for="name" class="col-md-3 control-label">Last time Medication given</label>
                        <div class="col-md-7 col-sm-12 required">
                 <input type="text" name="last_time_medi" class="form-control" class="form-control" value="{{ $transfer_record->last_time_medi}}">                                       
                        </div>
                    </div>
                    <div class="form-group ">
                        <label for="name" class="col-md-3 control-label">Accompanying Reports</label>
                        <div class="col-md-7 col-sm-12 required">
                 <input type="text" name="accomp_rpt" class="form-control" class="form-control" value="{{ $transfer_record->accomp_rpt}}">                                       
                        </div>
                    </div>
                    <div class="form-group ">
                        <label for="name" class="col-md-3 control-label">Next</label>
                        <div class="col-md-7 col-sm-12 required">
                 <input type="text" name="next" class="form-control" class="form-control" value="{{ $transfer_record->next}}">                                       
                        </div>
                    </div>
                    <div class="form-group ">
                        <label for="name" class="col-md-3 control-label">Has been advised of the transfer</label>
                        <div class="col-md-7 col-sm-12 required">
                 <input type="text" name="advised" class="form-control" class="form-control" value="{{ $transfer_record->advised}}">                                       
                        </div>
                    </div>
                    <div class="form-group ">
                        <label for="name" class="col-md-3 control-label">Guardian</label>
                        <div class="col-md-7 col-sm-12 required">
                 <input type="text" name="guardian" class="form-control" class="form-control" value="{{ $transfer_record->guardian}}">                                       
                        </div>
                    </div>
                    <div class="form-group ">
                        <label for="name" class="col-md-3 control-label">Has been advised of the transfer</label>
                        <div class="col-md-7 col-sm-12 required">
                 <input type="text" name="guardian_adv" class="form-control" class="form-control" value="{{ $transfer_record->guardian_adv}}">                                       
                        </div>
                    </div>
                    <div class="form-group ">
                        <label for="name" class="col-md-3 control-label">Case Manager</label>
                        <div class="col-md-7 col-sm-12 required">
                 <input type="text" name="case_mngr" class="form-control" class="form-control" value="{{ $transfer_record->case_mngr}}">                                       
                        </div>
                    </div>
                    <div class="form-group ">
                        <label for="name" class="col-md-3 control-label">Has been advised of the transfer</label>
                        <div class="col-md-7 col-sm-12 required">
                 <input type="text" name="case_mngr_adv" class="form-control" class="form-control" value="{{ $transfer_record->case_mngr_adv}}">                                       
                        </div>
                    </div>
                    <div class="form-group ">
                        <label for="name" class="col-md-3 control-label">Person Nominated</label>
                        <div class="col-md-7 col-sm-12 required">
                 <input type="text" name="nomini" class="form-control" class="form-control" value="{{ $transfer_record->nomini}}">                                       
                        </div>
                    </div>
                    <div class="form-group ">
                        <label for="name" class="col-md-3 control-label">Has been advised of the transfer</label>
                        <div class="col-md-7 col-sm-12 required">
                 <input type="text" name="nomini_adv" class="form-control" class="form-control" value="{{ $transfer_record->nomini_adv}}">                                       
                        </div>
                    </div>
                    <div class="form-group ">
                        <label for="name" class="col-md-3 control-label">Administrator</label>
                        <div class="col-md-7 col-sm-12 required">
                 <input type="text" name="admin" class="form-control" class="form-control" value="{{ $transfer_record->admin}}">                                      
                        </div>
                    </div>
                    <div class="form-group ">
                        <label for="name" class="col-md-3 control-label">Has been advised of the transfer</label>
                        <div class="col-md-7 col-sm-12 required">
                 <input type="text" name="admin_adv" class="form-control" class="form-control" value="{{ $transfer_record->admin_adv}}">                                       
                        </div>
                    </div>
                    <div class="box-footer text-right">
                        <a class="btn btn-link text-left" href="{{ route('transfer_records.index') }}">Cancel</a>
                        <button type="submit" class="btn btn-primary"><i class="fa fa-check icon-white" aria-hidden="true"></i> Save</button>
                    </div>

                </div> <!-- ./box-body -->
                            <!-- col-md-8 -->

            </div><!-- ./row -->
        </form>
      </div>
    </div>
</div>
@stop

@section('moar_scripts')
@include ('partials.bootstrap-table')
@stop

