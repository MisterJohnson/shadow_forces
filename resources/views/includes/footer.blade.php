<footer>
    <script>
        window.App = {!! json_encode([
            'locale' => app()->getLocale(),
            'flash' => session()->has('flash') ? session('flash') : '',
        ]) !!};
    </script>
    <script src="{{asset('js/jquery.slim.min.js')}}"></script>
    <script src="{{asset('js/popper.min.js')}}"></script>
    <script src="{{asset('js/bootstrap.min.js')}}"></script>
    <script type="text/javascript" src="{{mix('js/app.js')}}"></script>
</footer>

