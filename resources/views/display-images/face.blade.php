@extends('layouts.drawing-content-layout')
@section('title', 'face')
@section('content')
<div class="container text-center">
    <h1 style="margin-top: 10px;"><img src="/images/head.png" alt="" style="height:34px; width:34px;"> FACE</h1>
    <p>{{ $countImages }}枚</p>
        <div class="row">
            @foreach ($facePaths as $facePath)
            <div class="col-xxl-1 col-md-3 col-3">
                <img src="{{ $facePath }}" alt="" class="img-fluid">
            </div>
            @endforeach
        </div>
</div>
@endsection