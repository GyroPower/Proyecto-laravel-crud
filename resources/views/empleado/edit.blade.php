@extends('layouts.app')

@if(Session::has('mensaje'))
<div class="alert alert-success alert-dismissible" role="alert">
    {{Session::get('mensaje')}}
    <button type="buttom" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
    </button>
</div>
    @endif


@section('content')
<div class="container">
<form action="{{url('/empleado/'.$empleado->id)}}" method="post" enctype="multipart/form-data">
@csrf
{{method_field('PATCH')}}
@include('empleado.form',['modo'=>'Editar'])
</form>
</div>
@endsection