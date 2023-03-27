@extends('layouts.master')
@section('title', 'Parrot')
@section('content')
<div class="toppage-backImage">
    <div>
        <div class="toppage-drawingContent-button">
            <a href="{{ route('drawing') }}">
                <button type="button" class="btn btn-primary btn-lg">Drawing Content</button>
            </a>
        </div>
    </div>
</div>
@endsection