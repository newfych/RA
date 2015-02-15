@extends('master')

@section('content')

    <h2>Devices</h2>
        <table width="90%" border="1px" align="center">
            @foreach($devices as $device)
                <tr>
                    <td width="20%">
                        <a href='devices/{{$device -> id}}'>
                            <img src="img/{{$device -> imageName}}" class="img-thumbnail img-responsive" height="150" width="150">
                        </a>
                    </td>
                    <td width="60%">
                        <h4>{{$device -> name}}</h4>
                    </td>
                    <td width="20%">
                        {{Carbon::parse($device -> crated_at)->toFormattedDateString()}}
                    </td>
                </tr>
            @endforeach
        </table>

@endsection