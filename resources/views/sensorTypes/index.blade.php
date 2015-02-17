@extends('master')

@section('content')
    <h2>Sensors types</h2>
    <br>
    <div class="row">
        @if(is_null($sensorTypes -> first()))
            <div class="col-md-4 col-md-offset-4">
                <h4>No devices</h4>
            </div>

            <div class="col-md-4 col-md-offset-4">
                <a href='devices/create'>
                    <button class="btn btn-primary ">Create new device</button>
                </a>
            </div>
        @else
            @foreach($sensorTypes as $sensorType)
                <div class="div-custom col-lg-2 col-md-3 col-sm-4 col-xs-6">
                    <a href='devices/{{$sensorType -> id}}'>
                        {{--<img src="/img/sensorsTypes/{{$sensorType -> imageName}}" class="thumbnail img-responsive" height="150" width="150">--}}
                        <img src="/img/sensorTypes/{{$sensorType -> name}}.png" class="thumbnail img-responsive" height="150" width="150">
                    </a>
                    <h4>{{$sensorType -> name}}</h4>

                </div>
            @endforeach
        @endif
    </div>
    <p>
        <p class="col-lg-2 col-md-3 col-sm-4 col-xs-12 col-lg-offset-10 col-md-offset-9 col-sm-offset-8">
            <INPUT TYPE="Button" VALUE="Previous Page" onClick="history.go(-1)" class="btn btn-primary form-control">
        </p>
@stop