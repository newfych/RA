@extends('master')

@section('content')
    <div><h2>{{$device -> name}}s components</h2></div>
    <br>
{{--<div class="row">--}}
    {{--@if(is_null($devices -> first()))--}}
    {{--<div class="col-md-4 col-md-offset-4">--}}
        {{--<h4>No devices</h4>--}}
    {{--</div>--}}

    {{--<div class="col-md-4 col-md-offset-4">--}}
        {{--<a href='devices/create'>--}}
            {{--<button class="btn btn-primary ">Create new device</button>--}}
        {{--</a>--}}
    {{--</div>--}}
    {{--@else--}}
    {{--@foreach($devices as $device)--}}
    {{--<div class="div-custom col-lg-2 col-md-3 col-sm-4 col-xs-6">--}}
        {{--<a href='devices/{{$device -> id}}'>--}}
            {{--<img src="/img/{{$device -> imageName}}" class="thumbnail img-responsive" height="150" width="150">--}}
        {{--</a>--}}
        {{--<h4>{{$device -> name}}</h4>--}}
    {{--</div>--}}
    {{--@endforeach--}}
    {{--@endif--}}
{{--</div>--}}

        <p class="col-lg-3 col-md-3 col-sm-4 col-xs-12 col-lg-offset-9 col-md-offset-9 col-sm-offset-8">
            <a href='/sensors'>
                <button type="button" class="btn btn-primary form-control">Add sensor</button>
            </a>
        </p>
    {{--<br>--}}
    <p>
        <p class="col-lg-3 col-md-3 col-sm-4 col-xs-12 col-lg-offset-9 col-md-offset-9 col-sm-offset-8">
            <a href='/'>
                <button type="button" class="btn btn-primary form-control">Add actuator</button>
            </a>
        </p>
    <p>
    <p class="col-lg-2 col-md-3 col-sm-4 col-xs-12 col-lg-offset-10 col-md-offset-9 col-sm-offset-8">
        <INPUT TYPE="Button" VALUE="Previous page" onClick="history.go(-1)" class="btn btn-primary form-control">
    </p>

@endsection