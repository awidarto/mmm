@extends('layout.front')

@section('content')
    {{ HTML::script('js/jscroll/jquery.jscroll.js')}}
    {{ print_r($feed) }}
@stop