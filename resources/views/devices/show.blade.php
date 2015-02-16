@extends('master')

@section('content')
    <h2>{{$device -> name}}</h2>
    <div class="row">
        <div class="col-lg-2 col-md-2 col-sm-2 col-xs-6">
            <a href='devices/{{$device -> id}}'>
                <img src="/img/{{$device -> imageName}}" class="thumbnail img-responsive" height="200" width="200">
                <h4>Edit configuration</h4>
            </a>
        </div>
        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-6">
                <h4>Created at: {{Carbon::parse($device -> created_at)->toFormattedDateString()}}</h4>
                <h4>Updated at: {{Carbon::parse($device -> updated_at)->toFormattedDateString()}}</h4>
        </div>
        <div class="col-lg-2 col-md-2 col-sm-2 col-xs-6">
            <a href='devices/{{$device -> id}}'>
                <h4>Change image</h4>
            </a>
        </div>
        <div class="col-lg-2 col-md-2 col-sm-2 col-xs-6">
            <a href='devices/{{$device -> id}}'>
                <h4>Change name</h4>
            </a>
        </div>
        <div class="col-lg-2 col-md-2 col-sm-2 col-xs-6">
                <a href='/delete/device/{{$device -> id}}'>
                <h4>Delete device</h4>
            </a>
        </div>
    </div>
@endsection