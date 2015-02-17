@extends('master')

@section('content')
    <h2>Devices</h2>
    <br>
    <div class="row">
        @if(is_null($devices -> first()))
            <div class="col-md-4 col-md-offset-4">
                <h4>No devices</h4>
            </div>

            <div class="col-md-4 col-md-offset-4">
                <a href='devices/create'>
                    <button class="btn btn-primary ">Create new device</button>
                </a>
            </div>
        @else
            @foreach($devices as $device)
                <div class="div-custom col-lg-2 col-md-3 col-sm-4 col-xs-6">
                    <a href='devices/{{$device -> id}}'>
                        <img src="/img/{{$device -> imageName}}" class="thumbnail img-responsive" height="150" width="150">
                    </a>
                    <h4>{{$device -> name}}</h4>
                </div>
            @endforeach
        @endif
    </div>
    <p>
    <div class="col-md-2 col-md-offset-10">
        <a href='devices/create'>
            <button type="button" class="btn btn-primary btn-lg ">Create device</button>
        </a>
    </div>
@stop