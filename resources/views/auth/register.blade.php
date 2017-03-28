@extends('layout')
@section('content')
    <div class="col-md-4 col-md-offset-4">
        <form action="{{url('auth/register')}}" method="post">
            <input type="hidden" name="_token" value="{{csrf_token()}}">
            <div class="form-group">
                <label>Name</label>
                <input name="name" type="text" class="form-control" value="{{old('name')}}">
                <div class="text-danger">{{$errors->first('name')}}</div>
            </div>
            <div class="form-group">
                <label>Email</label>
                <input name="email" type="text" class="form-control" value="{{old('email')}}">
                <div class="text-danger">{{$errors->first('email')}}</div>
            </div>
            <div class="form-group">
                <label>Password</label>
                <input name="password" type="password" class="form-control" value="{{old('password')}}">
                <div class="text-danger">{{$errors->first('password')}}</div>
            </div>
            <div class="form-group">
                <label>Password-comfirmation</label>
                <input name="password_confirmation" type="password" class="form-control" value="{{old('password_confirmation')}}">
                <div class="text-danger">{{$errors->first('password_confirmation')}}</div>
            </div>
            <input type="submit" class="btn btn-primary form-control"  value="Register">
        </form>
    </div>
@stop