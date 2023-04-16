@extends('layouts.master')
@section('title', 'Drawing')
@section('content')
    <style>
        html, body {
        margin: 0;
        padding: 0;
        width: 100%;
        height: 100%;
        }
        body {
            background-color: #ffffff;
        }
    </style>
    <div id="app" >
        <drawing-content v-bind:image-data="{{ $imageData }}"></drawing-content>
    </div>
@endsection