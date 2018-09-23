<!doctype html>
<html lang="{{ app()->getLocale() }}">
    @include('includes.head')
    <body>
        <div class="container-fluid">
            <div class="global_wrapper">
                <div class="image_wrapper">
                    @include('includes.header')
                    <div class="container">
                        @include('includes.notifications')
                    </div>
                    <div class="container-fluid">
                        @yield('content')
                        @include('includes.footer')
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>
