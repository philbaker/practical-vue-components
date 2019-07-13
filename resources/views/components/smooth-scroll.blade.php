@extends('layouts.master')

@section('sidebar')
    @include('nav', ['examples' => $examples])
@stop

@section('content')
    <div id="app" class="p-8">
        <h1 class="text-2xl font-bold">Smooth Scroll</h1>
        <scroll-link class="text-blue-400" href="#categories">Testimonials</scroll-link>
        <div style="height: 2000px"></div>
        <div id="categories">
            <h2 class="font-bold mb-6">Testimonials</h2>
            <div class="flex">
                <div class="w-1/3 h-48 bg-gray-200 p-4">
                    <scroll-link class="text-blue-400" href="#app">Back to top</scroll-link>
                </div>
                <div class="w-1/3 h-48 bg-gray-400 p-4">Item</div>
                <div class="w-1/3 h-48 bg-gray-200 p-4">Item</div>
            </div>
        </div>
    </div>
@stop
