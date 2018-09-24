<!DOCTYPE html>
@langrtl
    <html lang="{{ app()->getLocale() }}" dir="rtl">
@else
    <html lang="{{ app()->getLocale() }}">
@endlangrtl
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <title>@yield('title', app_name())</title>
        <meta name="description" content="@yield('meta_description', 'Laravel 5 Boilerplate')">
        <meta name="author" content="@yield('meta_author', 'Anthony Rappa')">
        <link rel="shortcut icon" type="image/png" href="/img/frontend/favicon.ico"/>
        @yield('meta')

        {{-- See https://laravel.com/docs/5.5/blade#stacks for usage --}}
        @stack('before-styles')

        <!-- Check if the language is set to RTL, so apply the RTL layouts -->
        <!-- Otherwise apply the normal LTR layouts -->
        {{ style(mix('css/frontend.css')) }}

        @stack('after-styles')
        <!-- Custom styles for this template -->
        <link href="/css/carousel.css" rel="stylesheet">

        <style>
            .carousel-inner{
                margin-top: 120px;
                width:100%;
                max-height: 300px !important;
            }
            .carousel-item > img {
                position: absolute;
                top: 0;
                left: 0;
                min-width: 100%;
                height: 300px;
            }
            .carousel-caption {
                color: #2e3192;
                /*font-size: 12px;*/
                bottom: 14rem;
                z-index: 10;
            }

            /* Smaller than standard 960 (devices and browsers) */
            @media only screen and (max-width: 959px) {
                .carousel-inner{
                    margin-top: 120px;
                    width:100%;
                    max-height: 150px !important;
                }
                .carousel-item > img {
                    position: absolute;
                    top: 0;
                    left: 0;
                    min-width: 100%;
                    height: 150px;
                }
                .carousel-caption {
                    color: #2e3192;
                    /*font-size: 12px;*/
                    bottom: 14rem;
                    z-index: 10;
                }
            }

            /* Tablet Portrait size to standard 960 (devices and browsers) */
            @media only screen and (min-width: 768px) and (max-width: 959px) {}

            /* All Mobile Sizes (devices and browser) */
            @media only screen and (max-width: 767px) {
                .carousel-inner{
                    margin-top: 120px;
                    width:100%;
                    max-height: 100px !important;
                }
                .carousel-item > img {
                    position: absolute;
                    top: 0;
                    left: 0;
                    min-width: 100%;
                    height: 100px;
                }
                .carousel-caption {
                    color: #2e3192;
                    /*font-size: 8px;*/
                    bottom: 18rem;
                    z-index: 10;
                }
                .carousel-caption > h1{
                    font-size: 12px;
                }
            }

            /* Mobile Landscape Size to Tablet Portrait (devices and browsers) */
            @media only screen and (min-width: 480px) and (max-width: 767px) {
                .carousel-inner{
                    margin-top: 120px;
                    width:100%;
                    max-height: 100px !important;
                }
                .carousel-item > img {
                    position: absolute;
                    top: 0;
                    left: 0;
                    min-width: 100%;
                    height: 100px;
                }
                .carousel-caption {
                    color: #2e3192;
                    /*font-size: 8px;*/
                    bottom: 18rem;
                    z-index: 10;
                }
                .carousel-caption > h1 {
                    font-size: 18px;
                }
            }

            /* Mobile Portrait Size to Mobile Landscape Size (devices and browsers) */
            @media only screen and (max-width: 479px) {
                .carousel-inner{
                    margin-top: 120px;
                    width:100%;
                    max-height: 100px !important;
                }
                .carousel-item > img {
                    position: absolute;
                    top: 0;
                    left: 0;
                    min-width: 100%;
                    height: 100px;
                }
                .carousel-caption {
                    color: #2e3192;
                    /*font-size: 8px;*/
                    bottom: 18rem;
                    z-index: 10;
                }
                .carousel-caption > h1 {
                    font-size: 18px;
                }
            }

            #footer_colour {
                background-color: #5d686e!important;
             }

            .nav-tabs{
                /*background-color:#161616;*/
            }
            .tab-content{
                /*background-color:#303136;*/
                /*color:#fff;*/
                /*padding:5px*/
            }
            .nav-tabs > li > a{
                background-color: #fff !important;
                /*border: medium none;*/
            }
            .nav-tabs > li > a:hover, .nav-tabs > li > a:focus{
                background-color: #2e3192 !important;
                color:#fff !important;
            }

        </style>

    </head>
    <body class="mb-0 pb-0">
        <div id="app">
            @include('includes.partials.logged-in-as')
            @include('frontend.includes.nav')

            <div class="container" style="padding-top: 10px">
                @include('includes.partials.messages')
                @yield('content')
            </div><!-- container -->
        </div><!-- #app -->

        <!-- Scripts -->
        @stack('before-scripts')
        {!! script(mix('js/frontend.js')) !!}
        @stack('after-scripts')
        <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/all.js" integrity="sha384-xymdQtn1n3lH2wcu0qhcdaOpQwyoarkgLVxC/wZ5q7h9gHtxICrpcaSUfygqZGOe" crossorigin="anonymous"></script>
        <script>

            // $("a[data-toggle='tab']").click(function (ev) {
            //     $(ev.currentTarget).css('background-color', 'red');
            //     $("a .nav-link:not('.active.show')").css('background-color', 'black')
            //     console.log($("a .nav-link:not('.active.show')"))
            // });

            function update(id) {
                console.log('help')
                $("#"+id).submit()
            }
            function cashout() {
                console.log('cashout')
                $("#cashout_form").submit()
            }
        </script>
        @include('includes.partials.ga')
        @include('frontend.includes.footer')

        <!-- Modal -->
        <div class="modal fade" id="cashOut" tabindex="-1" role="dialog" aria-labelledby="cashOutTitle" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="cashOutTitle">Cash Out</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        @auth
                        {{ Form::open(['route' => 'frontend.cashOut', 'method' => 'post', 'id' => 'cashout_form']) }}
                            <div class="form-group">
                                <label for="amount" class="col-form-label">Amount to Cash Out:</label>
                                <input max="{{ $logged_in_user->balance }}" type="number" class="form-control" name="cashout">
                            </div>
                            {{--<div class="form-group">--}}
                                {{--<label for="message-text" class="col-form-label">Message:</label>--}}
                                {{--<textarea class="form-control" id="message-text"></textarea>--}}
                            {{--</div>--}}
                        {{ Form::close() }}
                        @endauth
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button onclick="cashout()" type="button" class="btn btn-primary">Cash Out</button>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>
