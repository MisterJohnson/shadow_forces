@extends('layout.layout')

@section('title')
    A Shadowrunner's website
@stop

@section('content')
    <div class="banner_area">
        <div class="parralax_wrapper">
            <div class="loop-wrap">
                <div class="caption-wrap">
                    <p>Welcome to&nbsp;</p>
                    <h1>The Sixth World</h1>
                </div>
                <div class="images-wrap">
                    <img src="{{ asset('images/painting_1.jpg') }}" alt="1" style="vertical-align:middle" />
                </div>
            </div>
        </div>
    </div>
    <div>
        <p>Title {{ $article->title }}</p>
    </div>
@stop
