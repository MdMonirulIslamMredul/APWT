@extends('layouts.app')

@section('content')




	<form action="{{route('login.submit')}}" method="post" >
	{{@csrf_field()}}
		<input type="text" name="uname" value="{{old('uname')}}" placeholder="Username" >
		@error('uname')
		<span>{{$message}}</span>
		@enderror
		<br>
		<input type="password" name="password" placeholder="password" >
		@error('password')
		<span>{{$message}}</span>
		@enderror
		<br>
		<input type="submit"  ><br>
	</form>


	<div>
	<a href ="/Student"> Student login </a>
	</div>	


	<div>
	<a href ="/Admin"> Admin Login </a>
	</div>	







@endsection