@extends('layouts.layout')
@section('title')
	Product List
@stop

@section('body')
	@foreach($products as $p)
		<p>{{$p->name}}</p>
		<p>{{$p->price}}</p>
	@endforeach
@stop
