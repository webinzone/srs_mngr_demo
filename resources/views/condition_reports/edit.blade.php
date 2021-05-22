
@extends('layouts/default')

{{-- Page title --}}
@section('title')
Update ConditionReports
@parent
@stop
@section('header_right')
  <a href="{{ route('condition_reports.index') }}" class="btn btn-primary pull-right" style="border-color: #23536f;background-color: #307095;"> Back</a>
@stop

{{-- Page content --}}
@section('content')
<div id="webui">
  
    <div class="row">
        <!-- col-md-8 -->
        <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1 col-sm-12 col-sm-offset-0">

          
         <form id="create-form" class="form-horizontal" method="post" action = "{{ route ('condition_reports.update', $condition_report->id) }}" autocomplete="off" role="form" >
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
                                <a class="btn btn-link text-left" href="{{ route('condition_reports.index') }}">
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
                        <label for="name" class="col-md-3 control-label">Room</label>
                        <div class="col-md-7 col-sm-12 required">
                 <input type="text" name="room" class="form-control" value="{{ $condition_report->room}}">
        
                        </div>
                    </div>
                    <div class="form-group ">
                        <label for="name" class="col-md-3 control-label">Items</label>
                        <div class="col-md-7 col-sm-12 required">
                 <input type="text" name="items" class="form-control" value="{{ $condition_report->items}}">                                        
                        </div>
                    </div>
                    <div class="form-group ">
                        <label for="name" class="col-md-3 control-label">Clean</label>
                        <div class="col-md-7 col-sm-12 required">
                 <input type="text" name="clean" class="form-control" value="{{ $condition_report->clean}}">                                       
                        </div>
                    </div>
                    <div class="form-group ">
                        <label for="name" class="col-md-3 control-label">Undamaged</label>
                        <div class="col-md-7 col-sm-12 required">
                 <input type="text" name="undamaged" class="form-control" value="{{ $condition_report->undamaged}}">                                       
                        </div>
                    </div>
                        <label for="name" class="col-md-3 control-label">Working</label>
                        <div class="col-md-7 col-sm-12 required">
                 <input type="text" name="working" class="form-control" value="{{ $condition_report->working}}">                                       
                        </div>
                    </div>
                   <div class="form-group ">
                        <label for="name" class="col-md-3 control-label">Landlord/Proprietor Comments</label>
                        <div class="col-md-7 col-sm-12 required">
                 <input type="text" name="prop_comments" class="form-control" value="{{ $condition_report->prop_comments}}">                                       
                        </div>
                    </div>
                    <div class="form-group ">
                        <label for="name" class="col-md-3 control-label">Resident Comments</label>
                        <div class="col-md-7 col-sm-12 required">
                 <input type="text" name="res_comments" class="form-control" value="{{ $condition_report->res_comments}}">                                       
                        </div>
                    </div>
                    <div class="box-footer text-right">
                        <a class="btn btn-link text-left" href="{{ route('condition_reports.index') }}">Cancel</a>
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

