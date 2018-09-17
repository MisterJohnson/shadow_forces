<header>
    <div class="wrap-no-bg">
        <div class="container-fluid">
            <div class="row">
                <div class="col-3">
                    <a class="site-branding" href="{{ route('home') }}">
                        <img src="{{ asset('images/logo.png') }}" alt="logo" />
                    </a><!-- .site-branding -->
                </div>
                <div class="col-9">
                    @include('includes.navigation')
                </div>
            </div>
        </div>
    </div>
    <div class="clear"></div>
</header>


