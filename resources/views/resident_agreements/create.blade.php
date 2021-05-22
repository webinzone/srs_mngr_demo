
@extends('layouts/default')

{{-- Page title --}}
@section('title')
Create ResidentAgreement
@parent
@stop
@section('header_right')
    @can('create', \App\Models\ResidentAgreement::class)
        <a href="{{ route('resident_agreements.index') }}" class="btn btn-primary pull-right" style="border-color: #23536f;background-color: #307095;"> Back</a>
    @endcan
@stop

@section('inputFields')

{{-- Page content --}}
@section('content')
<div id="webui">
  
    <div class="row">
        <!-- col-md-8 -->
        <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1 col-sm-12 col-sm-offset-0">

          <form id="create-form" class="form-horizontal" method="post" action="{{ route('resident_agreements.store') }}" autocomplete="off" role="form" >
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
                 <input type="text" name="r_name" class="form-control" placeholder="Resident Name">                                        
                        </div>
                    </div>
                    <div class="form-group ">
                        <label for="name" class="col-md-3 control-label">Room No</label>
                        <div class="col-md-7 col-sm-12 required">
                 <input type="text" name="room_no" class="form-control" placeholder="Room No">                                        
                        </div>
                    </div>
                    <div class="form-group ">
                        <label for="name" class="col-md-3 control-label">Bed</label>
                        <div class="col-md-7 col-sm-12 required">
                 <input type="text" name="bed" class="form-control" placeholder="Bed">                                       
                        </div>
                    </div>
                    <div class="form-group ">
                        <label for="name" class="col-md-3 control-label">Date of Birth</label>
                        <div class="col-md-7 col-sm-12 required">
                 <input type="text" name="dob" class="form-control" placeholder="Date of Birth">                                     
                        </div>
                    </div>
                    <div class="form-group ">
                        <label for="name" class="col-md-3 control-label">Guardian</label>
                        <div class="col-md-7 col-sm-12 required">
                 <input type="text" name="guardian" class="form-control" placeholder="Guardian">                                      
                        </div>
                    </div>
                    <div class="form-group ">
                        <label for="name" class="col-md-3 control-label">Administrator</label>
                        <div class="col-md-7 col-sm-12 required">
                 <input type="text" name="admin" class="form-control" placeholder="Administrator">                                        
                        </div>
                    </div>
                    <div class="form-group ">
                        <label for="name" class="col-md-3 control-label">Person Nominated</label>
                        <div class="col-md-7 col-sm-12 required">
                 <input type="text" name="p_nomini" class="form-control" placeholder="Person Nominated">                                      
                        </div>
                    </div>
                    <div class="form-group ">
                        <label for="name" class="col-md-3 control-label">Indefinite period of stay form</label>
                        <div class="col-md-7 col-sm-12 required">
                 <input type="text" name="i_period" class="form-control" placeholder="Indefinite period of stay form">                                        
                        </div>
                    </div>
                    <div class="form-group ">
                        <label for="name" class="col-md-3 control-label">Fixed period stay form</label>
                        <div class="col-md-7 col-sm-12 required">
                 <input type="text" name="f_period" class="form-control" placeholder="Fixed period stay form">                                      
                        </div>
                    </div>
                    <div class="form-group ">
                        <label for="name" class="col-md-3 control-label">Ending on</label>
                        <div class="col-md-7 col-sm-12 required">
                 <input type="text" name="ending_on" class="form-control" placeholder="Ending on">                                       
                        </div>
                    </div>
                    <div class="form-group ">
                        <label for="name" class="col-md-3 control-label">Fee for accommodation and personal support</label>
                        <div class="col-md-7 col-sm-12 required">
                 <input type="text" name="acc_fee" class="form-control" placeholder="Fee for accommodation and personal support">                                       
                        </div>
                    </div>
                    <div class="form-group ">
                        <label for="name" class="col-md-3 control-label">How to pay</label>
                        <div class="col-md-7 col-sm-12 required">
                 <input type="text" name="pay_method" class="form-control" placeholder="How to pay">                                       
                        </div>
                    </div>
                    <div class="form-group ">
                        <label for="name" class="col-md-3 control-label">Frequency of payment</label>
                        <div class="col-md-7 col-sm-12 required">
                 <input type="text" name="freq_pay" class="form-control" placeholder="Frequency of payment">                                       
                        </div>
                    </div>
                    <div class="form-group ">
                        <label for="name" class="col-md-3 control-label">Fee in advance charged for other items/service provide by SRS</label>
                        <div class="col-md-7 col-sm-12 required">
                 <input type="text" name="advnc_fee" class="form-control" placeholder="Fee in advance charged for other items/service provide by SRS">                                       
                        </div>
                    </div>
                    <div class="form-group ">
                        <label for="name" class="col-md-3 control-label">Security deposite charged</label>
                        <div class="col-md-7 col-sm-12 required">
                 <input type="text" name="secu_depo" class="form-control" placeholder="Security deposite charged">                                       
                        </div>
                    </div>
                    <div class="form-group ">
                        <label for="name" class="col-md-3 control-label">Reservation for charged</label>
                        <div class="col-md-7 col-sm-12 required">
                 <input type="text" name="reserv_fee" class="form-control" placeholder="Reservation for charged">                                       
                        </div>
                    </div>
                    <div class="form-group ">
                        <label for="name" class="col-md-3 control-label">Condition report provided to the resident?</label>
                        <div class="col-md-7 col-sm-12 required">
                 <input type="text" name="condition_rep" class="form-control" placeholder="Condition report provided to the resident?">                                       
                        </div>
                    </div>
                    <div class="form-group ">
                        <label for="name" class="col-md-3 control-label">Specify items and services provided to the resident</label>
                        <div class="col-md-7 col-sm-12 required">
                 <input type="text" name="res_service" class="form-control" placeholder="Specify items and services provided to the resident">                                       
                        </div>
                    </div>
                    <div class="form-group ">
                        <label for="name" class="col-md-3 control-label">Any special items that may apply to the resident</label>
                        <div class="col-md-7 col-sm-12 required">
                 <input type="text" name="spl_item" class="form-control" placeholder="Any special items that may apply to the resident">                                       
                        </div>
                    </div>
                    <div class="form-group ">
                        <label for="name" class="col-md-3 control-label">Personal properties belonging resident brought into SRS</label>
                        <div class="col-md-7 col-sm-12 required">
                 <input type="text" name="pers_prop" class="form-control" placeholder="Personal properties belonging resident brought into SRS">                                       
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
@stop

@section('moar_scripts')
@include ('partials.bootstrap-table')
@stop

