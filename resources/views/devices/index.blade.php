@extends('master')

@section('content')
    <h2>Devices</h2>
    <div class="row">
        @foreach($devices as $device)
            <div class="div-custom col-lg-2 col-md-3 col-sm-4 col-xs-6">
                <a href='devices/{{$device -> id}}'>
                    <img src="/img/{{$device -> imageName}}" class="thumbnail img-responsive" height="150" width="150">
                    <h4 class="centered-text">Edit device</h4>
                </a>
            </div>
        @endforeach
    </div>
@endsection