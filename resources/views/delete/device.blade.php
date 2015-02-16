@extends('master')

@section('content')
    <h2>{{$device -> name}}</h2>
    {!! Form::open(['url'=>'devices{{$device -> id}}', 'method'=>'delete']) !!}
        <button type="submit" class="btn btn-danger ">Delete</button>
    {!! Form::close() !!}
@endsection