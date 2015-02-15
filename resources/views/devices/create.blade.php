@extends('master')

@section('content')
    <div class="col-md-4 col-md-offset-4"><h2>Create new device</h2></div>

    {!! Form::open(['url' => 'devices']) !!}

        <div class="form-group">
            <div class="col-md-4 col-md-offset-4">
                {!! Form::text('name', null, ['class'=>'form-control', 'placeholder'=>'Device name']) !!}
            </div>
        </div>

        <div class="form-group">
            <div class="col-md-4 col-md-offset-4">
                {!! Form::text('imageName', null, ['class'=>'form-control', 'placeholder'=>'Image name']) !!}
            </div>
        </div>

        <div class="form-group">
            <div class="col-md-2 col-md-offset-5">
                {!! Form::submit('Create', ['class'=>'btn btn-primary form-control']) !!}
            </div>
        </div>

    {!! Form::close() !!}

@endsection