@extends('auth.layout.auth')

@section('title')
    Your Shadowrunner's
@stop

@section('banner')
    <div class="container">
        <div class="banner_area">
            <div class="parralax_wrapper">
                <div class="title_holder">
                    <div class="caption-wrapper">
                        <h1>Characters Lab</h1>
                    </div>
                </div>
            </div>
        </div>
    </div>
@stop

@section('content')
    <div class="container-fluid information">
        <div class="outer">
            <div class="container wrapper">
                <div class="inner-row left">
                    <h2>
                        Create a new character
                    </h2>
                    <p>
                        You can now create a character for shadowrun, be able to export it in order to use in roll 20.
                        This idea came to me 2 years ago, I am a huge fan of the 5th edition, I like crunching data, optimising a character
                        depending on how he came to survive this sixth world. I hope you enjoy it as much as I did!
                    </p>
                </div>
                <div class="inner-row right">
                    <h2>
                        Main Features
                    </h2>
                    <ul>
                        <li><i class="fas fa-atom"></i>&nbsp;&nbsp;Online character creation : Yes you can even download a pdf to keep the character on your device!</li>
                        <li><i class="far fa-newspaper"></i>&nbsp;&nbsp;Latest News: This site intend to keep an up-to-date list of the latest shadowrun news!</li>
                        <li><i class="fas fa-archive"></i>&nbsp;&nbsp;Seeing the coolest Stories: Check out the blog for some of the coolest stories wrote by GM</li>
                        <li><i class="fas fa-chart-line"></i>&nbsp;&nbsp;A character creation tips optimiser</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <!-- this will be the default placeholder if there is no character created yet -->
    @if($characters->isEmpty())
        <div class="container-fluid">
            <div class="full-container">
                <div class="half-container">
                    <div class="image-left">
                        <img src="{{ asset('images/koller.jpg') }}" alt="" width="100%" height="100%" style="object-fit: cover;">
                    </div>
                </div>
                <div class="half-container">
                    <div class="text right">
                        <h3>
                            No character Yet?
                        </h3>
                        <div class="can_see">
                            <img src="{{ asset('images/eye.png') }}" alt="" width="25%">
                        </div>
                        <p>
                            You can create one <a href="{{ route('character.add') }}">here</a> <br /><br />
                            or you can see tips and tricks on how to create a good shadowrunner <a href="/articles/shadowrun-tips" target="blank">here</a>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    @endif
    <div class="clear"></div>
    <div id="app"></div>
@stop
