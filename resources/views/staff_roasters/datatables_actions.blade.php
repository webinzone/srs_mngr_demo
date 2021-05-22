<a class="btn btn-info" href="{{ route('staff_roasters.show',$staff_roaster->id) }}"><i class="fa fa-file icon-white" aria-hidden="true"></i></a>
<a class="btn btn-primary" href="{{ route('staff_roasters.edit',$staff_roaster->id) }}"><i class="fa fa-edit icon-white" aria-hidden="true"></i></a>

{!! Form::open(['method' => 'DELETE','route' => ['staff_roasters.destroy', $staff_roaster->id],'style'=>'display:inline']) !!}
{!! Form::button('<i class="fa fa-trash icon-white"></i>', ['type' => 'submit', 'class' => 'btn btn-danger'] )  !!}
{!! Form::close() !!}