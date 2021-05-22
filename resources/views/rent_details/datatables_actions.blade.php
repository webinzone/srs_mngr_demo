   <a class="btn btn-info" href="{{ route('rent_details.show',$rent_detail->id) }}"><i class="fa fa-file icon-white" aria-hidden="true"></i></a>
    <a class="btn btn-primary" href="{{ route('rent_details.edit',$rent_detail->id) }}"><i class="fa fa-edit icon-white" aria-hidden="true"></i></a>

    {!! Form::open(['method' => 'DELETE','route' => ['rent_details.destroy', $rent_detail->id],'style'=>'display:inline']) !!}
    	{!! Form::button('<i class="fa fa-trash icon-white"></i>', ['type' => 'submit', 'class' => 'btn btn-danger'] )  !!}
    {!! Form::close() !!}