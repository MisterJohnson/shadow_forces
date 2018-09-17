<footer>
    <div class="container">
        <div class="footer_bottom">
            <div class="holder-outer">
                <div class="edgt-container">
                    <div class="holder-inner">
                        <div class="grid-row">
                            <div class="edgt-left">
                                <div id="text-8" class="widget_text">
                                    <div class="textwidget">
                                        <p>Made with pride by a Shadowrunner</p>
                                    </div>
                                </div>
                            </div>

                            <div class="edgt-right">
                                <div id="facebook" class="social_icon">
                                    <a class="edgt-social-icon-widget-holder" data-hover-color="#928e75" style="color: rgb(255, 255, 255);
                                font-size: 17px; margin: 0px;" href="https://sr-rs.facebook.com/" target="_blank">
                                        <i class="fab fa-facebook-square"></i>
                                    </a>
                                </div>
                                <div id="youtube" class="social_icon">
                                    <a class="edgt-social-icon-widget-holder" data-hover-color="#928e75" style="color: rgb(255, 255, 255);
                                font-size: 17px; margin: 0px;" href="https://www.youtube.com/" target="_blank">
                                        <i class="fab fa-youtube-square"></i>
                                    </a>

                                </div>
                                <div id="edgt_social_icon_widget-6" class="social_icon">
                                    <a class="edgt-social-icon-widget-holder" data-hover-color="#928e75" style="color: rgb(255, 255, 255);
                                font-size: 17px; margin: 0px;" href="https://twitter.com/?lang=sr" target="_blank">
                                        <i class="fab fa-twitter-square"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>
        window.App = {!! json_encode([
            'locale' => app()->getLocale(),
            'flash' => session()->has('flash') ? session('flash') : '',
        ]) !!};
    </script>
    <script src="{{ asset('js/jquery.slim.min.js') }}"></script>
    <script src="{{ asset('js/popper.min.js') }}"></script>
    <script src="{{ asset('js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('js/menu.js') }}" type="text/javascript"></script>
    <script type="text/javascript" src="{{mix('js/app.js')}}"></script>
</footer>

