@extends('layout')
@section('content')
<h1>{{$article->title}}@if(!empty($article->user->name))===>{{$article->user->name}}@endif</h1>
<p>{{$article->intro}}</p>
<hr>
<p>{{$article->content}}</p>
    @stop
     