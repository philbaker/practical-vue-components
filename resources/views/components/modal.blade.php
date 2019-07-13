@extends('layouts.master')

@section('sidebar')
    @include('nav', ['examples' => $examples])
@stop

@section('content')
    <div id="app" class="p-4">
        <h1 class="font-bold text-2xl text-gray-900 ">Example Project</h1>
        <p class="mb-6">This is just a example text for my tutorial.</p>

        <button
            class="bg-blue-600 text-white px-4 py-2 text-sm uppercase tracking-wide font-bold rounded-lg"
            @click="exampleModalShowing = true"
        >
            Show Modal
        </button>

        <modal :showing="exampleModalShowing" @close="exampleModalShowing = false">
            <h2 class="text-xl font-bold text-gray-900">Example modal</h2>
            <p class="mb-6">This is example text passed through to the modal via a slot.</p>
            <button
                class="bg-blue-600 text-white px-4 py-2 text-sm uppercase tracking-wide font-bold rounded-lg"
                @click="exampleModalShowing = false"
            >
                Close
            </button>
        </modal>
    </div>
@stop
