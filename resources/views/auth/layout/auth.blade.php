<!doctype html>
<html lang="{{ app()->getLocale() }}">
@include('includes.head')
    <body>
        <div class="global_wrapper">
            <div class="container-fluid">
                @include('includes.notifications')
                @include('includes.header_transparent')
            </div>
            <div class="image_wrapper">
                <div class="container-fluid">
                    @yield('banner')
                </div>
            </div>
            <div class="content">
                @yield('content')
                @include('includes.footer')
            </div>
        </div>
    </body>
</html>
