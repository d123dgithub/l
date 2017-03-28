@extends('layout')
@section('content')
    <h1>添加文章</h1>
    <form action="{{url('article')}}" method="post">
        <div class="form-group">
            <input type="hidden" name="_token"  value="{{csrf_token()}}"/>
            <label>Title</label>
            <input type="text" name="title" class="form-control" value="{{old('title')}}">
                <div class="text-danger">{{$errors->first('title')}}</div>
        </div>
        <div class="form-group">
            <label>Intro</label>
            <input type="text" name="intro" class="form-control" value="{{old('intro')}}">
            <div class="text-danger">{{$errors->first('intro')}}</div>
        </div>
        <div class="form-group">
            <label>Content</label>
            <input type="text" name="content" class="form-control" value="{{old('content')}}">
            <div class="text-danger">{{$errors->first('content')}}</div>
        </div>
        <div class="form-group">
            <label>Published_at</label>
            <input type="date" name="published_at" value="{{date('Y-m-d')}}" class="form-control">
        </div>
        <input type="submit" value="发表文章" class="btn btn-primary form-control">
    </form>

@stop
