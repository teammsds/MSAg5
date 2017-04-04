@extends('layouts.app')
@section('content')
    <div class="container" style="color:lightblue">
        {!! Form::open(['url' => 'matches']) !!}
        <table class="table table-bordered table-hover">
            <tbody>
            <tr>
            @foreach ($match->teams as $team)
            <thead>
            <th>
             <h2 style="color:blue"> {{ $team->tm_name}}</th></thead>

                    @foreach ($team->players as $player)
                <td><h2 style="color:blue"><a href="{{url('/players/detail',$player->id)}}">{{ $player->p_fname}} </a></h2></td>
                    @endforeach

            <td> <h2 style="color:blue"> {{ $team->tm_coach}}</td>

            @endforeach
            </tr>
            @foreach ($match->referees as $referee)
                <td><h4 style="color:blue"><a href="#">{{ $referee->r_fname}} </a></h4></td>
            @endforeach

            </tbody>
        </table>


    </div>






@stop
