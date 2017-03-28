@extends('layout')
@section('content')
    <h1>编辑文章</h1>
    <form action="{{url('article',$article['id'])}}" method="post">
        <input type="hidden" name="_method" value="PATCH">
        <input type="hidden" name="_token"  value="{{csrf_token()}}"/>
        <div class="form-group">

            <label>Title</label>
            <input type="text" name="title" class="form-control" value="@if($article){{$article['title']}}@else{{old('title')}}@endif">
            <div class="text-danger">{{$errors->first('title')}}</div>
        </div>
        <div class="form-group">
            <label>Intro</label>
            <input type="text" name="intro" class="form-control" value="@if($article){{$article['intro']}}@else{{old('intro')}}@endif">
            <div class="text-danger">{{$errors->first('intro')}}</div>
        </div>
        <div class="form-group">
            <label>Content</label>
            <input type="text" name="content" class="form-control" value="@if($article){{$article['content']}}@else{{old('content')}}@endif">
            <div class="text-danger">{{$errors->first('content')}}</div>
        </div>
        <div class="form-group">
            <label>Published_at</label>
            <input type="date" name="published_at" value="{{date('Y-m-d')}}" class="form-control">
        </div>
        <input type="submit" value="保存文章" class="btn btn-primary form-control">
    </form>

@stop