@extends('layouts.app')
@section('content')

    <div class="container">

        <h1 style="color:gainsboro">My Matches</h1>
        <table class="table table-bordered table-hover">
            <tbody style="background-color: darkseagreen">
            <tr class="bg-info">
                @foreach ($referee->matches as $match)
                    <td>{{ $match->id}}</td>
            @endforeach

            
            </tbody>
        </table>
    </div>






@stop
