@extends('layouts.drawing-content-layout')
@section('title', 'foot')
@section('content')
<div class="container text-center">
    <h1 style="margin-top: 10px;"><img src="/images/footicon.png" alt="" style="height:34px; width:34px;"> FOOT</h1>
    <p>{{ $countImages }}枚</p>
        <div class="row">
            @foreach ($footPaths as $footPath)
            <div class="col-xxl-1 col-md-3 col-3">
                <img src="{{ $footPath }}" alt="" class="img-fluid">
            </div>
            @endforeach
        </div>
</div>
@endsection