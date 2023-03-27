@extends('layouts.master')
@section('title', 'Drawing')
@section('content')
    <div id="app" >
        <drawing-content v-bind:image-data="{{ $imageData }}"></drawing-content>
    </div>
@endsection