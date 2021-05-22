@extends('layouts/default')

{{-- Page title --}}
@section('title')
{{ trans('general.dashboard') }}
@parent
@stop


{{-- Page content --}}
@section('content')

@if ($snipeSettings->dashboard_message!='')
<div class="row">
    <div class="col-md-12">
        <div class="box">
            <!-- /.box-header -->
            <div class="box-body">
                <div class="row">
                    <div class="col-md-12">
                       
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endif

<div class="row">
  <!-- panel -->
  <div class="col-lg-3 col-xs-6">
      <a href="{{ route('complaints.index') }}">
    <!-- small box -->
    <div class="small-box bg-teal">
      <div class="inner">
        <h3>{{ number_format($counts['complaint']) }}</h3>
        <p>Total Complaints</p>
      </div>
      <div class="icon" aria-hidden="true">
        <i class="fa fa-comments" aria-hidden="true"></i>
      </div>
     
        <a href="{{ route('complaints.index') }}" class="small-box-footer">{{ trans('general.moreinfo') }} <i class="fa fa-arrow-circle-right" aria-hidden="true"></i></a>
    </div>
      </a>
  </div><!-- ./col -->

  <div class="col-lg-3 col-xs-6">
     <a href="{{ route('rent_details.index') }}">
    <!-- small box -->
    <div class="small-box bg-maroon">
      <div class="inner">
        <h3>{{ number_format($counts['rent_details']) }}</h3>
        <p>Total Rent Details</p>
      </div>
      <div class="icon" aria-hidden="true">
        <i class="fa fa-file"></i>
      </div>
       <a href="{{ route('rent_details.index') }}" class="small-box-footer">{{ trans('general.moreinfo') }} <i class="fa fa-arrow-circle-right" aria-hidden="true"></i></a>
    </div>
     </a>
  </div><!-- ./col -->


  <div class="col-lg-3 col-xs-6">
    <!-- small box -->
      <a href="{{ route('bookings.index') }}">
    <div class="small-box bg-orange">
      <div class="inner">
        <h3> {{ number_format($counts['bookings']) }}</h3>
          <p>Total Bookings</p>
      </div>
      <div class="icon" aria-hidden="true">
        <i class="fa fa-list-alt" ></i>
      </div>
      <a href="{{ route('bookings.index') }}" class="small-box-footer">{{ trans('general.moreinfo') }} <i class="fa fa-arrow-circle-right" aria-hidden="true"></i></a>
    </div>
      </a>
  </div><!-- ./col -->

  <div class="col-lg-3 col-xs-6">
    <!-- small box -->

      <a href="{{ route('staff_roasters.index') }}">
    <div class="small-box bg-purple">
      <div class="inner">
        <h3> {{ number_format($counts['staff_roaster']) }}</h3>
          <p>total Staff Roaster</p>
      </div>
      <div class="icon" aria-hidden="true">
        <i class="fa fa-users"></i>
      </div>
      <a href="{{ route('staff_roasters.index') }}" class="small-box-footer">{{ trans('general.moreinfo') }} <i class="fa fa-arrow-circle-right" aria-hidden="true"></i></a>
    </div>
  </div><!-- ./col -->
</div>


<!-- Recent Activity -->
<div class="row">
  <div class="col-md-12">
    <div class="box">
      <div class="box-header with-border">
        <h2 class="box-title">Recent Activity</h2>
        <div class="box-tools pull-right">
            <button type="button" class="btn btn-box-tool" data-widget="collapse" aria-hidden="true">
                <i class="fa fa-minus" aria-hidden="true"></i>
                <span class="sr-only">Collapse</span>
            </button>
        </div>
      </div><!-- /.box-header -->
      <div class="box-body">
        <div class="row">
          <div class="col-md-12">
            <div class="table-responsive">

                <table
                    data-columns="{{ \App\Presenters\ActivityLogPresenter::dataTableLayout() }}"
                    data-cookie-id-table="activity_logsTable"
                    data-height="400"
                    data-pagination="false"
                    data-id-table="activity_logsTable"
                    data-side-pagination="server"
                    data-sort-order="desc"
                    data-sort-name="created_at"
                    id="dashActivityReport"
                    class="table table-striped snipe-table"
                    data-url="{{ route('api.activity_logs.index', ['limit' => 25]) }}">
                    
                </table>



            </div><!-- /.responsive -->
          </div><!-- /.col -->
          <div class="col-md-12 text-center" style="padding-top: 10px;">
            <a href="" class="btn btn-primary btn-sm" style="width: 100%"></a>
          </div>
        </div><!-- /.row -->
      </div><!-- ./box-body -->
    </div><!-- /.box -->
  </div>

</div>

<div class="row">
    <div class="col-md-6">
        <div class="box box-default">
            <div class="box-header with-border">
                <h2 class="box-title">Reports by Status</h2>
                <div class="box-tools pull-right">
                    <button type="button" class="btn btn-box-tool" data-widget="collapse" aria-hidden="true">
                        <i class="fa fa-minus" aria-hidden="true"></i>
                        <span class="sr-only">Collapse</span>
                    </button>
                </div>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
                <div class="row">
                    <div class="col-md-12">
                        <div class="chart-responsive">
                            <canvas id="statusPieChart" height="216"></canvas>
                        </div> <!-- ./chart-responsive -->
                    </div> <!-- /.col -->
                </div> <!-- /.row -->
            </div><!-- /.box-body -->
        </div> <!-- /.box -->
    </div>
    <div class="col-md-6">

        <!-- Categories -->
        <div class="box box-default">
            <div class="box-header with-border">
                <h2 class="box-title">Bookings Report </h2>
                <div class="box-tools pull-right">
                    <button type="button" class="btn btn-box-tool" data-widget="collapse">
                        <i class="fa fa-minus" aria-hidden="true"></i>
                        <span class="sr-only">Collapse</span>
                    </button>
                </div>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
                <div class="row">
                    <div class="col-md-12">
                        <div class="table-responsive">
                        <table
                                data-columns=""
                                data-cookie-id-table="dashCategorySummary"
                                data-height="400"
                                data-pagination="true"
                                data-side-pagination="server"
                                data-sort-order="desc"
                                data-sort-field="assets_count"
                                id="dashCategorySummary"
                                class="table table-striped snipe-table"
                                data-url="">

                          <thead>
                            <tr>
                                <th class="col-sm-3" data-visible="true" data-field="name" data-formatter="categoriesLinkFormatter" data-sortable="true">Client Name </th>
                                <th class="col-sm-3" data-visible="true" data-field="name" data-formatter="categoriesLinkFormatter" data-sortable="true">Book From </th>
                                <th class="col-sm-3" data-visible="true" data-field="name" data-formatter="categoriesLinkFormatter" data-sortable="true">Book To </th>
                                <th class="col-sm-3" data-visible="true" data-field="name" data-formatter="categoriesLinkFormatter" data-sortable="true">Created Date </th>
                            </tr>
                          </thead>
                          <tbody>
                            @foreach ($bookings as $booking)
                              <tr>
                                <td>{{ $booking->c_name}}</td>
                                <td>{{ $booking->b_from}}</td>
                                <td>{{ $booking->b_to}}</td>
                                <td>{{ $booking->created_at}}</td>                           
                              </tr>
                            @endforeach
                          </tbody>
                          


                            
                        </table>
                        </div>
                    </div> <!-- /.col -->
                    <div class="col-md-12 text-center" style="padding-top: 10px;">
                        <a href="{{ route('bookings.index') }}" class="btn btn-primary btn-sm" style="width: 100%">view all</a>
                    </div>
                </div> <!-- /.row -->

            </div><!-- /.box-body -->
        </div> <!-- /.box -->
    </div>
</div>
 <!--/row-->



@stop

@section('moar_scripts')
@include ('partials.bootstrap-table', ['simple_view' => true, 'nopages' => true])
@stop

@push('js')



<script nonce="{{ csrf_token() }}">
     var pieChartCanvas = $("#statusPieChart").get(0).getContext("2d");
      var pieChart = new Chart(pieChartCanvas);
      var ctx = document.getElementById("statusPieChart");
      var pieOptions = {
              legend: {
                  position: 'top',
                  responsive: true, 
                  maintainAspectRatio: true,
              }
          };

      $.ajax({
          type: 'GET',
          url: '{{  route('api.echart.index') }}',
          headers: {
              "X-Requested-With": 'XMLHttpRequest',
              "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr('content')
          },
          dataType: 'json',
          success: function (data) {
              var myPieChart = new Chart(ctx,{
                  type   : 'doughnut',
                  data   : data,
                  options: pieOptions
              });
          },
          error: function (data) {
             // window.location.reload(true);
          }
      });
   
</script>
@endpush
