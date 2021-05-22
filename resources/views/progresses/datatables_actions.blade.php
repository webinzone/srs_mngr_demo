<a class="btn btn-info" href="{{ route('progresses.show',$progress->id) }}"><i class="fa fa-file icon-white" aria-hidden="true"></i></a>
<a class="btn btn-primary" href="{{ route('progresses.edit',$progress->id) }}"><i class="fa fa-edit icon-white" aria-hidden="true"></i></a>

{!! Form::open(['method' => 'DELETE','route' => ['progresses.destroy', $progress->id],'style'=>'display:inline']) !!}
{!! Form::button('<i class="fa fa-trash icon-white"></i>', ['type' => 'submit', 'class' => 'btn btn-danger'] )  !!}
{!! Form::close() !!}