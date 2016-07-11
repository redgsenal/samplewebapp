@extends('layouts.base')
@section('title') Home @stop
@section('body')
    <h1>Home</h1>
    {{ Common::listitems(array('1','2','3'), 'This is a list') }}
    {{ Common::image(URL::asset('images/sample.jpg')) }}
    {{ Common::dummytext(20) }}
@stop
