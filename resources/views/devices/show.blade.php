@extends('master')

@section('content')
    <div class="row">
    <div class="hidden-lg hidden-md col-sm-6 col-xs-6 col-sm-offset-3 col-xs-offset-3">
    <h1>{{$device -> name}}</h1>
    </div>
        </div>
    <div class="row">
        <div class="col-lg-2 col-md-2 col-sm-3 col-xs-6 col-lg-offset-1 col-md-offset-1">
            {{--<a href='devices/{{$device -> id}}'>--}}
                <img src="/img/{{$device -> imageName}}" class="img img-responsive" height="150" width="150">
                {{--<h4></h4>--}}
            </a>
        </div>
        <div class="col-lg-3 col-md-3 hidden-sm hidden-xs">
            <p></p>
            <h1></h1>
            <h1 class="centered-text">{{$device -> name}}</h1>
                {{--<h4>Created at: {{Carbon::parse($device -> created_at)->toFormattedDateString()}}</h4>--}}
                {{--<h4>Updated at: {{Carbon::parse($device -> updated_at)->toFormattedDateString()}}</h4>--}}

        </div>
        <div class="col-lg-2 col-md-2 col-sm-3 col-xs-6">
            <a href='devices/{{$device -> id}}'>
                <img src="/img/icons/Control.png" class="thumbnail img-responsive" height="150" width="150">
                <h4>Controls</h4>
            </a>
        </div>


        <div class="col-lg-2 col-md-2 col-sm-3 col-xs-6">
            <a href='/delete/device/{{$device -> id}}'>
                <img src="/img/icons/Diagram.png" class="thumbnail img-responsive" height="150" width="150">
                <h4>Diagram</h4>
            </a>
        </div>


        <div class="col-lg-2 col-md-2 col-sm-3 col-xs-6">
            <a href='/structure/{{$device -> id}}'>
                <img src="/img/icons/Component.png" class="thumbnail img-responsive" height="150" width="150">
                <h4>Components</h4>
            </a>
        </div>

        <div class="col-lg-2 col-md-2 col-sm-3 col-xs-6">
                <a href='/delete/device/{{$device -> id}}'>
                <img src="/img/icons/Logic.png" class="thumbnail img-responsive" height="150" width="150">
                <h4>Logic</h4>
            </a>
        </div>

        <div class="col-lg-2 col-md-2 col-sm-3 col-xs-6">
            <a href='/delete/device/{{$device -> id}}'>
                <img src="/img/icons/Image.png" class="thumbnail img-responsive" height="150" width="150">
                <h4>Change image</h4>
            </a>
        </div>

        <div class="col-lg-2 col-md-2 col-sm-3 col-xs-6">
            <a href='/delete/device/{{$device -> id}}'>
                <img src="/img/icons/Name.png" class="thumbnail img-responsive" height="150" width="150">
                <h4>Edit name</h4>
            </a>
        </div>

        <div class="col-lg-2 col-md-2 col-sm-3 col-xs-6">
            <a href='/delete/device/{{$device -> id}}'>
                <img src="/img/icons/Delete.png" class="thumbnail img-responsive" height="150" width="150">
                <h4>Delete device</h4>
            </a>
        </div>

    </div>
    <p>
    <div class="col-lg-2 col-md-3 col-sm-4 col-xs-12 col-lg-offset-10 col-md-offset-9 col-sm-offset-8">
        <a href='/devices'>
            <button type="button" class="btn btn-primary form-control">Device list</button>
        </a>
    </div>
    </p>
@endsection