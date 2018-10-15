@extends('auth.layout.auth')

@section('css')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bulma/0.7.1/css/bulma.min.css" />
@stop

@section('title')
    Character Creation
@stop

@section('banner')
    <div class="container">
        <div class="banner_area">
            <div class="parralax_wrapper">
                <div class="title_holder">
                    <div class="caption-wrapper">
                        <h1>Character Creation</h1>
                    </div>
                </div>
            </div>
        </div>
    </div>
@stop

@section('content')
    <div id="app">
        <character-creation></character-creation>
    </div>
@stop
