@extends('layouts.master')
@section('title', 'Parrot')
@section('content')
<div class="toppage-backImage">
    <div>
        <h1 class="toppage-title text-center">ただ描くだけでは、<br>神にはなれない。クローンテスト</h1>
        <div class="toppage-drawingContent-button">
            <a href="{{ route('drawing') }}">
                <button type="button" class="btn btn-primary btn-lg">Drawing Content</button>
            </a>
        </div>
    </div>
</div>
@endsection