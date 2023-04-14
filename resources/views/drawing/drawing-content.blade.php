@extends('layouts.master')
@section('title', 'Drawing')
@section('content')
    <style>
        body {
            background-color: #ffffff;
        }
    </style>
    <div id="app" >
        <drawing-content v-bind:image-data="{{ $imageData }}"></drawing-content>
    </div>
@endsection