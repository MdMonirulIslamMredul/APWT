@extends('layouts.student')
@section('content')
<form action="{{route('register.submit')}}" method="post">
    {{@csrf_field()}}
    <input type="text" name="name" value="{{old('name')}}" placeholder="Name">
        @error('name')
        <span>{{$message}}</span>
        @enderror
        <br>
        <input type="text" name="id" value="{{old('id')}}" placeholder="Id">
        @error('id')
        <span>{{$message}}</span>
        @enderror
        <br>
        <input type="text" name="uname" value="{{old('uname')}}" placeholder="Username">
        @error('uname')
        <span>{{$message}}</span>
        @enderror
        <br>
        <input type="password" name="password"  placeholder="Password">
        @error('password')
        <span>{{$message}}</span>
        @enderror
        <br>
        <input type="password" name="conf_password"  placeholder="Confirm Password">
        @error('conf_password')
        <span>{{$message}}</span>
        @enderror
        <br>
        <input type="submit" >
    </form>
@endsection