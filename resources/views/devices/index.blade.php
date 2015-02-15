@extends('master')

@section('content')

    <h2>Devices</h2>
        <table width="90%">
            @foreach($devices as $device)
                <tr>
                    <td width="60%">
                        <a href='devices/{{$device -> id}}'>
                            <h4>{{$device -> imageName}}</h4>
                            <img src="../resources/img/{{$device -> imageName}}" class="img-thumbnail img-responsive">
                            <img src="../resources/img/{{$device -> imageName}}" class="img-thumbnail img-responsive">
                        </a>
                    </td>
                    <td width="20%">
                        <h4>{{$device -> name}}</h4>
                    </td>
                    <td width="20%">
                        {{Carbon::parse($device -> crated_at)->toFormattedDateString()}}
                    </td>
                </tr>
            @endforeach
        </table>

@endsection