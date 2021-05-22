
@extends('layouts/default')

{{-- Page title --}}
@section('title')
Create Transfer
@parent
@stop
@section('header_right')
    @can('create', \App\Models\Transfer::class)
        <a href="{{ route('transfers.index') }}" class="btn btn-primary pull-right" style="border-color: #23536f;background-color: #307095;"> Back</a>
    @endcan
@stop

@section('inputFields')

{{-- Page content --}}
@section('content')
<div id="webui">
  
    <div class="row">
        <!-- col-md-8 -->
        <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1 col-sm-12 col-sm-offset-0">

          <form id="create-form" class="form-horizontal" method="post" action="{{ route('transfers.store') }}" autocomplete="off" role="form" >
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
                                <a class="btn btn-link text-left" href="{{ route('transfers.index') }}">
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
                 <input type="text" name="user_name" class="form-control" placeholder="Resident Name">
        
                        </div>
                    </div>
                    <div class="form-group ">
                        <label for="name" class="col-md-3 control-label">Date of birth</label>
                        <div class="col-md-7 col-sm-12 required">
                 <input type="text" name="dob" class="form-control" placeholder="Date of birth">                                      
                        </div>
                    </div>
                    <div class="form-group ">
                        <label for="name" class="col-md-3 control-label">Gender</label>
                        <div class="col-md-7 col-sm-12 required">
                 <input type="text" name="gender" class="form-control" placeholder="Gender">                                        
                        </div>
                    </div>
                    <div class="form-group ">
                        <label for="name" class="col-md-3 control-label">Nationality</label>
                        <div class="col-md-7 col-sm-12 required">
                 <input type="text" name="nationality" class="form-control" placeholder="Nationality">                                        
                        </div>
                    </div>
                    <div class="form-group ">
                        <label for="name" class="col-md-3 control-label">Languages Spoken</label>
                        <div class="col-md-7 col-sm-12 required">
                 <input type="text" name="languages" class="form-control" placeholder="Languages Spoken">                                       
                        </div>
                    </div>
                    <div class="form-group ">
                        <label for="name" class="col-md-3 control-label">Religion</label>
                        <div class="col-md-7 col-sm-12 required">
                 <input type="text" name="religion" class="form-control" placeholder="Religion">                                     
                        </div>
                    </div>
                    <div class="form-group ">
                        <label for="name" class="col-md-3 control-label">Medicare no</label>
                        <div class="col-md-7 col-sm-12 required">
                 <input type="text" name="medicare_no" class="form-control" placeholder="Medicare no">                                      
                        </div>
                    </div>
                    <div class="form-group ">
                        <label for="name" class="col-md-3 control-label">Pension no</label>
                        <div class="col-md-7 col-sm-12 required">
                 <input type="text" name="pension_no" class="form-control" placeholder="Pension no">                                        
                        </div>
                    </div>
                    <div class="form-group ">
                        <label for="name" class="col-md-3 control-label">Chemist Details</label>
                        <div class="col-md-7 col-sm-12 required">
                 <input type="text" name="chemist" class="form-control" placeholder="Chemist Details">                                      
                        </div>
                    </div>
                    <div class="form-group ">
                        <label for="name" class="col-md-3 control-label">Date</label>
                        <div class="col-md-7 col-sm-12 required">
                 <input type="text" name="date" class="form-control" placeholder="Date">                                        
                        </div>
                    </div>
                    <div class="form-group ">
                        <label for="name" class="col-md-3 control-label">From</label>
                        <div class="col-md-7 col-sm-12 required">
                 <input type="text" name="from" class="form-control" placeholder="From">                                      
                        </div>
                    </div>
                    <div class="form-group ">
                        <label for="name" class="col-md-3 control-label">Address</label>
                        <div class="col-md-7 col-sm-12 required">
                 <input type="text" name="address" class="form-control" placeholder="Address">                                      
                        </div>
                    </div>
                    <div class="form-group ">
                        <label for="name" class="col-md-3 control-label">Phone</label>
                        <div class="col-md-7 col-sm-12 required">
                 <input type="text" name="ph" class="form-control" placeholder="Phone">                                      
                        </div>
                    </div>
                    <div class="form-group ">
                        <label for="name" class="col-md-3 control-label">Fax</label>
                        <div class="col-md-7 col-sm-12 required">
                 <input type="text" name="fax" class="form-control" placeholder="Fax">                                      
                        </div>
                    </div>
                    <div class="form-group ">
                        <label for="name" class="col-md-3 control-label">To</label>
                        <div class="col-md-7 col-sm-12 required">
                 <input type="text" name="to" class="form-control" placeholder="To">                                      
                        </div>
                    </div>
                    <div class="form-group ">
                        <label for="name" class="col-md-3 control-label">Reason for transfer</label>
                        <div class="col-md-7 col-sm-12 required">
                 <input type="text" name="reason" class="form-control" placeholder="Reason for transfer">                                      
                        </div>
                    </div>
                    <div class="form-group ">
                        <label for="name" class="col-md-3 control-label">Current Medication chart attached?</label>
                        <div class="col-md-7 col-sm-12 required">
                 <input type="text" name="medication_chart" class="form-control" placeholder="Current Medication chart attached?">                                      
                        </div>
                    </div>
                    <div class="form-group ">
                        <label for="name" class="col-md-3 control-label">Medication List</label>
                        <div class="col-md-7 col-sm-12 required">
                 <input type="text" name="medication_list" class="form-control" placeholder="Medication List">                                      
                        </div>
                    </div>
                    <div class="form-group ">
                        <label for="name" class="col-md-3 control-label">Websterpak</label>
                        <div class="col-md-7 col-sm-12 required">
                 <input type="text" name="websterpak" class="form-control" placeholder="Websterpak">                                      
                        </div>
                    </div>
                    <div class="form-group ">
                        <label for="name" class="col-md-3 control-label">Medication Sent</label>
                        <div class="col-md-7 col-sm-12 required">
                 <input type="text" name="medication_sent" class="form-control" placeholder="Medication Sent">                                      
                        </div>
                    </div>
                    <div class="form-group ">
                        <label for="name" class="col-md-3 control-label">Last Time Medication Given</label>
                        <div class="col-md-7 col-sm-12 required">
                 <input type="text" name="last_time_medication" class="form-control" placeholder="Last Time Medication Given">                                      
                        </div>
                    </div>
                    <div class="form-group ">
                        <label for="name" class="col-md-3 control-label">Accompanying Reports</label>
                        <div class="col-md-7 col-sm-12 required">
                 <input type="text" name="accompanying_reports" class="form-control" placeholder="Accompanying Reports">                                      
                        </div>
                    </div>
                    <div class="form-group ">
                        <label for="name" class="col-md-3 control-label">Next</label>
                        <div class="col-md-7 col-sm-12 required">
                 <input type="text" name="next" class="form-control" placeholder="Next">                                      
                        </div>
                    </div>
                    <div class="form-group ">
                        <label for="name" class="col-md-3 control-label">Has been advised of the transfer</label>
                        <div class="col-md-7 col-sm-12 required">
                 <input type="text" name="advised" class="form-control" placeholder="Has been advised of the transfer">                                      
                        </div>
                    </div>
                    <div class="form-group ">
                        <label for="name" class="col-md-3 control-label">Guardian</label>
                        <div class="col-md-7 col-sm-12 required">
                 <input type="text" name="guardian" class="form-control" placeholder="Guardian">                                      
                        </div>
                    </div>
                    <div class="form-group ">
                        <label for="name" class="col-md-3 control-label">Has been advised of the transfer</label>
                        <div class="col-md-7 col-sm-12 required">
                 <input type="text" name="guardian_advised" class="form-control" placeholder="Has been advised of the transfer">                                      
                        </div>
                    </div>
                    <div class="form-group ">
                        <label for="name" class="col-md-3 control-label">Case Manager</label>
                        <div class="col-md-7 col-sm-12 required">
                 <input type="text" name="case_manager" class="form-control" placeholder="Case Manager">                                      
                        </div>
                    </div>
                    <div class="form-group ">
                        <label for="name" class="col-md-3 control-label">Has been advised of the transfer</label>
                        <div class="col-md-7 col-sm-12 required">
                 <input type="text" name="case_manager_advised" class="form-control" placeholder="Has been advised of the transfer">                                      
                        </div>
                    </div>
                    <div class="form-group ">
                        <label for="name" class="col-md-3 control-label">Person Nominated</label>
                        <div class="col-md-7 col-sm-12 required">
                 <input type="text" name="nomini" class="form-control" placeholder="Person Nominated">                                      
                        </div>
                    </div>
                    <div class="form-group ">
                        <label for="name" class="col-md-3 control-label">Has been advised of the transfer</label>
                        <div class="col-md-7 col-sm-12 required">
                 <input type="text" name="nomini_advised" class="form-control" placeholder="Has been advised of the transfer">                                      
                        </div>
                    </div>
                    <div class="form-group ">
                        <label for="name" class="col-md-3 control-label">Administrator</label>
                        <div class="col-md-7 col-sm-12 required">
                 <input type="text" name="admin" class="form-control" placeholder="Administrator">                                      
                        </div>
                    </div>
                    <div class="form-group ">
                        <label for="name" class="col-md-3 control-label">Has been advised of the transfer</label>
                        <div class="col-md-7 col-sm-12 required">
                 <input type="text" name="admin_advised" class="form-control" placeholder="Has been advised of the transfer">                                      
                        </div>
                    </div>

                    <div class="box-footer text-right">
                        <a class="btn btn-link text-left" href="{{ route('transfers.index') }}">Cancel</a>
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

