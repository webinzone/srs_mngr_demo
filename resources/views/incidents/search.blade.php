@extends('layouts/default')

{{-- Page title --}}
@section('title')
Incident Reports
@parent
@stop

@section('header_right')
    @can('create', \App\Models\Incident::class)
        <a href="{{ route('incidents.create') }}" class="btn btn-primary pull-right" style="border-color: #23536f;background-color: #307095;"> Create New</a>
    @endcan
@stop

{{-- Page content --}}
@section('content')

<div class="row">
  <div class="col-md-12">

    <div class="box box-default">
      <div class="box-body">
        <div class="table-responsive">

            <table
                
                data-cookie-id-table="incidentsTable"
                data-toolbar="#toolbar"
                data-pagination="true"
                data-id-table="incidentsTable"
                data-search="true"
                data-side-pagination="server"
                data-show-columns="true"
                data-show-export="true"
                data-show-refresh="true"
                data-show-footer="true"
                data-sort-order="asc"
                id="incidentsTable"
                class="table table-striped snipe-table"
                
               >
               <thead>
                            <tr>
                                <th class="col-sm-3" data-visible="true" data-field="name" data-formatter="categoriesLinkFormatter" data-sortable="true">Incident Date</th>
                                <th class="col-sm-3" data-visible="true" data-field="name" data-formatter="categoriesLinkFormatter" data-sortable="true">Staff Name</th>
                                <th class="col-sm-3" data-visible="true" data-field="name" data-formatter="categoriesLinkFormatter" data-sortable="true">Person Effected</th>
                                <th class="col-sm-3" data-visible="true" data-field="name" data-formatter="categoriesLinkFormatter" data-sortable="true">Location </th>
                            </tr>
                          </thead>
                          <tbody>
                            @if($incidents->isNotEmpty())
                                @foreach ($incidents as $incident)
                                  <tr>
                                    <td>{{ $incident->i_date}}</td>
                                    <td>{{ $incident->s_name}}</td>
                                    <td>{{ $incident->p_name}}</td>
                                    <td>{{ $incident->place}}</td>                           
                                  </tr>
                            @endforeach
                            @else 
                                <tr>
                                    No posts found
                                </tr>
                            @endif
                          </tbody>
                          
            
          </table>
        </div>
      </div>
    </div>
  </div>
</div>

@stop

@section('moar_scripts')

@stop
