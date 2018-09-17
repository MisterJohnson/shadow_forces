@extends('layout.layout')

@section('title')
    A Shadowrunner's website | Login
@stop

@section('css')
    <link rel="stylesheet" href="{{ asset('css/login.css') }}">
@stop

@section('content')
    <div class="container">
        <div class="login">
           @include('includes.forms.login')
        </div>
    </div>
    <div class="promotion_footer">
        <div class="container">
            <div class="content">
                <h5>
                    Search
                </h5>
                <div class="clearfix">
                    <p>
                        You can do a research to find anything you might like on this website!
                    </p>
                    <input type="text" value="" placeholder="Search" name="s" id="s-2098193470">
                    <button type="submit"><i class="fas fa-search"></i></button>
                </div>
            </div>
            <div class="content">
                <h5>
                    Latest articles
                </h5>
                <div class="miniatures">
                    @foreach($articles as $article)
                        <a href="{{trans($article->link)}}">
                            <div class="miniature">
                                <div class="img">
                                    <img src="images/{{ $article->background_image }}" alt="{{ trans($article->title) }}" />
                                    <p>
                                        {{ trans($article->title) }}
                                    </p>
                                </div>
                            </div>
                        </a>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
    <div id="app"></div>
    <div class="clear"></div>
@stop
