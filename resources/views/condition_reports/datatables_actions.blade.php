<a class="btn btn-info" href="{{ route('condition_reports.show',$condition_report->id) }}"><i class="fa fa-file icon-white" aria-hidden="true"></i></a>
<a class="btn btn-primary" href="{{ route('condition_reports.edit',$condition_report->id) }}"><i class="fa fa-edit icon-white" aria-hidden="true"></i></a>

{!! Form::open(['method' => 'DELETE','route' => ['condition_reports.destroy', $condition_report->id],'style'=>'display:inline']) !!}
{!! Form::button('<i class="fa fa-trash icon-white"></i>', ['type' => 'submit', 'class' => 'btn btn-danger'] )  !!}
{!! Form::close() !!}