@extends('product/layouts.app')

@section('productcontent')




	<form action="{{route('product/add_product.submit')}}" method="post" >
	{{@csrf_field()}}
		<input type="text" name="name" value="{{old('name')}}" placeholder="Product name" >
		@error('name')
		<span>{{$message}}</span>
		@enderror
		<br>
		<input type="text" name="price" value="{{old('price')}}" placeholder="price" >
		@error('price')
		<span>{{$message}}</span>
		@enderror
		<br>
		<input type="text" name="quality" value="{{old('quality')}}" placeholder="quality" >
		@error('quality')
		<span>{{$message}}</span>
		@enderror
		<br>
		<input type="text" name="description" value="{{old('description')}}" placeholder="description" >
		@error('description')
		<span>{{$message}}</span>
		@enderror
		<br>
		<input type="submit"  ><br>
	</form>






@endsection