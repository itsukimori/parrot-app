@extends('layouts.drawing-content-layout')
@section('title', 'hand')
@section('content')
<div class="container text-center">
    <h1 style="margin-top: 10px;"><img src="/images/hello.png" alt="" style="height:34px; width:34px;"> HAND</h1>
    <p>{{ $countImages }}枚</p>
        <div class="row">
            @foreach ($handPaths as $handPath)
            <div class="col-xxl-1 col-md-3 col-3">
                <img src="{{ $handPath }}" alt="" class="img-fluid">
            </div>
            @endforeach
        </div>
</div>
@endsection