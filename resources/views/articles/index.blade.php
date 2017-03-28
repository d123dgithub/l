@extends('layout')
@section('content')
<h1>Articles  </h1>
<hr>

@foreach($articles as $a)
<a href="{{url('article',['id'=>$a->id])}}"><h3>{{$a->title}}@if(!empty($a->user->name))==>{{$a->user->name}}@endif</h3></a><span>{{$a->published_at->diffForHumans()}}</span>
    <article> {{$a->intro}}</article>
<a href="{{url("article/$a->id/edit")}}">编辑</a>
@endforeach
@stop