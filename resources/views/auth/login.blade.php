@extends('layout')
@section('content')
    <div class="col-md-4 col-md-offset-4">
        <form action="{{url('auth/login')}}" method="post">
            <input type="hidden" name="_token" value="{{csrf_token()}}">
            <div class="form-group">
                <label>Email</label>
                <input name="email" type="text" class="form-control">
            </div>
            <div class="form-group">
                <label>Password</label>
                <input name="password" type="password" class="form-control">
            </div>
            <input type="submit" class="btn btn-primary form-control"  value="Login">
        </form>
    </div>
    @stop