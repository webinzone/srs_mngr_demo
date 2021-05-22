<a class="btn btn-info" href="{{ route('handovers.show',$handover->id) }}"><i class="fa fa-file icon-white" aria-hidden="true"></i></a>
<a class="btn btn-primary" href="{{ route('handovers.edit',$handover->id) }}"><i class="fa fa-edit icon-white" aria-hidden="true"></i></a>

{!! Form::open(['method' => 'DELETE','route' => ['handovers.destroy', $handover->id],'style'=>'display:inline']) !!}
{!! Form::button('<i class="fa fa-trash icon-white"></i>', ['type' => 'submit', 'class' => 'btn btn-danger'] )  !!}
{!! Form::close() !!}