@extends('default')
@section('title')
	{{"Bengkel Koding"}}
@stop
@section('content')
 {{route(Route::currentRouteName())}}
@stop