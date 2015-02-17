@extends('master')

@section('content')
    <?php
    if ($device == null){
        return redirect('devices');
    }
    ?>
    <h2>{{$device -> name}}</h2>
    {!! Form::open(['method'=>'delete','action'=>['DevicesController@destroy',$device->id]]) !!}
        <button type="submit" class="btn btn-danger ">Delete</button>
    {!! Form::close() !!}
@stop