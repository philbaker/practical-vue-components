@extends('layouts.master')

@section('sidebar')
    @include('nav')
@stop

@section('content')
    <div id="app">
        <carousel>
            <img src="https://placeimg.com/640/480/any">
            <img src="https://placeimg.com/640/480/any?2">
            <img src="https://placeimg.com/640/480/any?3">
            <img src="https://placeimg.com/640/480/any?4">
            <img src="https://placeimg.com/640/480/any?5">
        </carousel>
    </div>
@stop
