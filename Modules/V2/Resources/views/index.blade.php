@extends('v2::layouts.master')

@section('content')
    <h1>Hello World</h1>

    <p>
        This view is loaded from module: {!! config('v2.name') !!}
    </p>
@stop
