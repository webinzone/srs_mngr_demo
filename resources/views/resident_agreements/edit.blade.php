
@extends('layouts/default')

{{-- Page title --}}
@section('title')
Update ResidentAgreements
@parent
@stop
@section('header_right')
  <a href="{{ route('resident_agreements.index') }}" class="btn btn-primary pull-right" style="border-color: #23536f;background-color: #307095;"> Back</a>
@stop

{{-- Page content --}}
@section('content')
<div id="webui">
  
    <div class="row">
        <!-- col-md-8 -->
        <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1 col-sm-12 col-sm-offset-0">

          
         <form id="create-form" class="form-horizontal" method="post" action = "{{ route ('resident_agreements.update', $resident_agreement->id) }}" autocomplete="off" role="form" >
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
                                <a class="btn btn-link text-left" href="{{ route('resident_agreements.index') }}">
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
                 <input type="text" name="r_name" class="form-control" value="{{ $resident_agreement->r_name}}">
        
                        </div>
                    </div>
                    <div class="form-group ">
                        <label for="name" class="col-md-3 control-label">Room No</label>
                        <div class="col-md-7 col-sm-12 required">
                 <input type="text" name="room_no" class="form-control" value="{{ $resident_agreement->room_no}}">                                        
                        </div>
                    </div>
                    <div class="form-group ">
                        <label for="name" class="col-md-3 control-label">Bed</label>
                        <div class="col-md-7 col-sm-12 required">
                 <input type="text" name="bed" class="form-control" value="{{ $resident_agreement->bed}}">                                       
                        </div>
                    </div>
                    <div class="form-group ">
                        <label for="name" class="col-md-3 control-label">Date of Birth</label>
                        <div class="col-md-7 col-sm-12 required">
                 <input type="text" name="dob" class="form-control" value="{{ $resident_agreement->dob}}">                                       
                        </div>
                    </div>
                    <div class="form-group ">
                        <label for="name" class="col-md-3 control-label">Guardian</label>
                        <div class="col-md-7 col-sm-12 required">
                 <input type="text" name="guardian" class="form-control" value="{{ $resident_agreement->guardian}}">                                       
                        </div>
                    </div>
                    <div class="form-group ">
                        <label for="name" class="col-md-3 control-label">Administrator</label>
                        <div class="col-md-7 col-sm-12 required">
                 <input type="text" name="admin" class="form-control" value="{{ $resident_agreement->admin}}">                                       
                        </div>
                    </div>
                    <div class="form-group ">
                        <label for="name" class="col-md-3 control-label">Person Nominated</label>
                        <div class="col-md-7 col-sm-12 required">
                 <input type="text" name="p_nomini" class="form-control" value="{{ $resident_agreement->p_nomini}}">                                       
                        </div>
                    </div>
                    <div class="form-group ">
                        <label for="name" class="col-md-3 control-label">Indefinite period of stay form</label>
                        <div class="col-md-7 col-sm-12 required">
                 <input type="text" name="i_period" class="form-control" value="{{ $resident_agreement->i_period}}">                                       
                        </div>
                    </div>
                    <div class="form-group ">
                        <label for="name" class="col-md-3 control-label">Fixed period stay form</label>
                        <div class="col-md-7 col-sm-12 required">
                 <input type="text" name="f_period" class="form-control" value="{{ $resident_agreement->f_period}}">                                       
                        </div>
                    </div>
                    <div class="form-group ">
                        <label for="name" class="col-md-3 control-label">Ending on</label>
                        <div class="col-md-7 col-sm-12 required">
                 <input type="text" name="ending_on" class="form-control" class="form-control" value="{{ $resident_agreement->ending_on}}">                                       
                        </div>
                    </div>
                    <div class="form-group ">
                        <label for="name" class="col-md-3 control-label">Fee for accommodation and personal support</label>
                        <div class="col-md-7 col-sm-12 required">
                 <input type="text" name="acc_fee" class="form-control" value="{{ $resident_agreement->acc_fee}}">                                       
                        </div>
                    </div>
                    <div class="form-group ">
                        <label for="name" class="col-md-3 control-label">How to pay</label>
                        <div class="col-md-7 col-sm-12 required">
                 <input type="text" name="pay_method" class="form-control" class="form-control" value="{{ $resident_agreement->pay_method}}">                                       
                        </div>
                    </div>
                    <div class="form-group ">
                        <label for="name" class="col-md-3 control-label">Frequency of payment</label>
                        <div class="col-md-7 col-sm-12 required">
                 <input type="text" name="freq_pay" class="form-control" class="form-control" value="{{ $resident_agreement->freq_pay}}">                                       
                        </div>
                    </div>
                    <div class="form-group ">
                        <label for="name" class="col-md-3 control-label">Fee in advance charged for other items/service provide by SRS</label>
                        <div class="col-md-7 col-sm-12 required">
                 <input type="text" name="advnc_fee" class="form-control" class="form-control" value="{{ $resident_agreement->advnc_fee}}">                                       
                        </div>
                    </div>
                    <div class="form-group ">
                        <label for="name" class="col-md-3 control-label">Security deposite charged</label>
                        <div class="col-md-7 col-sm-12 required">
                 <input type="text" name="secu_depo" class="form-control" class="form-control" value="{{ $resident_agreement->secu_depo}}">                                       
                        </div>
                    </div>
                    <div class="form-group ">
                        <label for="name" class="col-md-3 control-label">Reservation for charged</label>
                        <div class="col-md-7 col-sm-12 required">
                 <input type="text" name="reserv_fee" class="form-control"class="form-control" value="{{ $resident_agreement->reserv_fee}}">                                       
                        </div>
                    </div>
                    <div class="form-group ">
                        <label for="name" class="col-md-3 control-label">Condition report provided to the resident?</label>
                        <div class="col-md-7 col-sm-12 required">
                 <input type="text" name="condition_rep" class="form-control" class="form-control" value="{{ $resident_agreement->condition_rep}}">                                       
                        </div>
                    </div>
                    <div class="form-group ">
                        <label for="name" class="col-md-3 control-label">Specify items and services provided to the resident</label>
                        <div class="col-md-7 col-sm-12 required">
                 <input type="text" name="res_service" class="form-control" class="form-control" value="{{ $resident_agreement->res_service}}">                                       
                        </div>
                    </div>
                    <div class="form-group ">
                        <label for="name" class="col-md-3 control-label">Any special items that may apply to the resident</label>
                        <div class="col-md-7 col-sm-12 required">
                 <input type="text" name="spl_item" class="form-control" class="form-control" value="{{ $resident_agreement->spl_item}}">                                       
                        </div>
                    </div>
                    <div class="form-group ">
                        <label for="name" class="col-md-3 control-label">Personal properties belonging resident brought into SRS</label>
                        <div class="col-md-7 col-sm-12 required">
                 <input type="text" name="pers_prop" class="form-control" class="form-control" value="{{ $resident_agreement->pers_prop}}">                                       
                        </div>
                    </div>
                    <div class="box-footer text-right">
                        <a class="btn btn-link text-left" href="{{ route('resident_agreements.index') }}">Cancel</a>
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

