@extends('layout')
@section('content')
    @if($name=='hhxx')
        <h1>    {{$name}}</h1>
        @else
    {{$name}}
    @endif
    <ul>
        @foreach($data as  $d)
        <li>{{$d}}</li>
            @endforeach
    </ul>
@stop