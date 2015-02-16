@extends('master')

@section('content')
    <div>
<h2>{{$device -> name}}</h2></div>
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

<div class="row">
    <div class="col-md-3 col-md-offset-7">
        <a href='/sensors'>
            <button type="button" class="btn btn-primary form-control">Add sensor</button>
        </a>
    </div>
</div>
    {{--<br>--}}
    <p>
<div class="row">
    <div class="col-md-3 col-md-offset-7">
        <a href='/'>
            <button type="button" class="btn btn-primary form-control">Add actuator</button>
        </a>
    </div>
</div>


@endsection