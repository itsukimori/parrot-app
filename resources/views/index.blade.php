@extends('layouts.master')
@section('title', 'Parrot')
@section('content')
<div class="container text-center">
    <div class="top-title">
        <div class="top-title-text">
            <h1>Parrot Drawing</h1>
            <p>部位、枚数、時間を選択して練習しよう！！</p>
        </div>
        <button class="btn btn-outline-secondary">
            <a href="{{ route('drawing') }}">START</a>
        </button>
    </div>
</div>
@endsection