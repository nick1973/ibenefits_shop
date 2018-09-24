@extends('frontend.layouts.app')

@section('title', app_name() . ' | '.__('navs.general.home'))

@section('content')
    <main role="main">
        <div id="myCarousel" class=" carousel slide  mb-4" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                <li data-target="#myCarousel" data-slide-to="1"></li>
                <li data-target="#myCarousel" data-slide-to="2"></li>
                <li data-target="#myCarousel" data-slide-to="3"></li>
            </ol>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img class="d-block w-100" src="/img/frontend/carousel/healthcareb.jpg" alt="First slide">
                    <div class="container">
                        <div class="carousel-caption">
                            <h1>HEALTHCARE</h1>
                            <p>From The Best Providers</p>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <img class="d-block w-100" src="/img/frontend/carousel/HRsoftware.jpg" alt="Second slide">
                    <div class="container">
                        <div class="carousel-caption">
                            <h1>HR SOFTWARE</h1>
                            <p>The Best Software Ever</p>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <img class="d-block w-100" src="/img/frontend/carousel/training.jpg" alt="Third slide">
                    <div class="container">
                        <div class="carousel-caption">
                            <h1>ONLINE TRAINING COURSES</h1>
                            <p>Insert Text</p>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <img class="d-block w-100" src="/img/frontend/carousel/personal_development.jpg" alt="Fourth slide">
                    <div class="container">
                        <div class="carousel-caption">
                            <h1>PERSONAL DEVELOPMENT</h1>
                            <p>Insert Text</p>
                        </div>
                    </div>
                </div>
            </div>
            <a class="carousel-control-prev" href="#myCarousel" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#myCarousel" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>

        <!-- Marketing messaging and featurettes
        ================================================== -->
        <!-- Wrap the rest of the page in another container to center all the content. -->

        <div class="container marketing font-weight-light">

            <!-- Three columns of text below the carousel -->
            <div class="row">
                <div class="col-lg-4 col-md-4 col-sm-4 col-4">
                    <a href="/shop">
                        <img class="rounded-circle float-left img-fluid"
                         src="/img/frontend/all.svg"
                         alt="Generic placeholder image" width="180" height="180">
                    </a>
                </div><!-- /.col-lg-4 -->
                <div class="col-lg-4 col-md-4 col-sm-4 col-4">
                    <img class="rounded-circle img-fluid" src="/img/frontend/training.svg" alt="Generic placeholder image" width="180" height="180">
                </div><!-- /.col-lg-4 -->
                <div class="col-lg-4 col-md-4 col-sm-4 col-4">
                    <img class="rounded-circle float-right img-fluid" src="/img/frontend/concierge.svg" alt="Generic placeholder image" width="180" height="180">
                </div><!-- /.col-lg-4 -->
            </div><!-- /.row -->

            <!-- START OF FEATURE OPTION LISTS 1 -->

            <div class="card-group">

                <div class="card">
                    <a href="{{ route('frontend.insuranceIndex') }}" style="text-decoration: none">
                        <div class="card-header text-center bg-dark text-white">
                           INSURANCE
                        </div>
                        {{--<img class="card-img-top" src=".../100px180/" alt="Card image cap">--}}
                        <img class="card-img-top" alt="Image cap [100%x180]" src="/img/frontend/musicapps.jpg" data-holder-rendered="true" style="height: 180px; width: 100%; display: block;">
                    </a>
                </div>

                <div class="card">
                    <a href="{{ route('frontend.rewardIndex') }}" style="text-decoration: none">
                        <div class="card-header text-center bg-dark text-white">
                            REWARD & RECOGNITION
                        </div>
                        {{--<img class="card-img-top" src=".../100px180/" alt="Card image cap">--}}
                        <img class="card-img-top" alt="Image cap [100%x180]" src="/img/frontend/rewards.jpg" data-holder-rendered="true" style="height: 180px; width: 100%; display: block;">
                    </a>
                </div>

                <div class="card">
                    <a href="{{ route('frontend.employeeIndex') }}" style="text-decoration: none">
                        <div class="card-header text-center bg-dark text-white">
                            EMPLOYEE BENEFITS
                        </div>
                        {{--<img class="card-img-top" src=".../100px180/" alt="Card image cap">--}}
                        <img class="card-img-top" alt="Image cap [100%x180]" src="/img/frontend/salessoftware.jpg" data-holder-rendered="true" style="height: 180px; width: 100%; display: block;">
                    </a>
                </div>

                <div class="card">
                    <a href="{{ route('frontend.superTreatsIndex') }}" style="text-decoration: none">
                        <div class="card-header text-center bg-dark text-white">
                            SUPER TREATS
                        </div>
                        {{--<img class="card-img-top" src=".../100px180/" alt="Card image cap">--}}
                        <img class="card-img-top" alt="Image cap [100%x180]" src="/img/frontend/healthcare.jpg" data-holder-rendered="true" style="height: 180px; width: 100%; display: block;">
                    </a>
                </div>

            </div>

            <!-- END OF FEATURE OPTION LISTS 1 -->

            <!-- START OF FEATURE OPTION LISTS 2 -->

            <div class="card-group pt-4 pb-5">
                <div class="card">
                    <a href="{{ $most_popular->url . $most_popular->id }}">
                        <div class="card-header text-center bg-dark text-white">
                            MOST POPULAR
                        </div>
                        <img class="card-img-top" alt="Image cap [100%x180]" src="{{ $most_popular->image_url }}" data-holder-rendered="true" style="height: 180px; width: 100%; display: block;">
                    </a>
                </div>

                <div class="card">
                    <a href="{{ $new_in->url . $new_in->id }}">
                        <div class="card-header text-center bg-dark text-white">
                            NEW THIS MONTH
                        </div>
                        <img class="card-img-top" alt="Image cap [100%x180]" src="{{ $new_in->image_url }}" data-holder-rendered="true" style="height: 180px; width: 100%; display: block;">
                    </a>
                </div>
            </div>


            <!-- END OF FEATURE OPTION LISTS 2 -->


            <!-- START THE FEATURETTES -->

            {{--<hr class="featurette-divider">--}}

            {{--<div class="row featurette">--}}
                {{--<div class="col-md-7">--}}
                    {{--<h2 class="featurette-heading">First featurette heading. <span class="text-muted">It'll blow your mind.</span></h2>--}}
                    {{--<p class="lead">Donec ullamcorper nulla non metus auctor fringilla. Vestibulum id ligula porta felis euismod semper. Praesent commodo cursus magna, vel scelerisque nisl consectetur. Fusce dapibus, tellus ac cursus commodo.</p>--}}
                {{--</div>--}}
                {{--<div class="col-md-5">--}}
                    {{--<img class="featurette-image img-fluid mx-auto" data-src="holder.js/500x500/auto" alt="500x500" style="width: 500px; height: 500px;" src="data:image/svg+xml;charset=UTF-8,%3Csvg%20width%3D%22500%22%20height%3D%22500%22%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20viewBox%3D%220%200%20500%20500%22%20preserveAspectRatio%3D%22none%22%3E%3Cdefs%3E%3Cstyle%20type%3D%22text%2Fcss%22%3E%23holder_163dad36013%20text%20%7B%20fill%3A%23AAAAAA%3Bfont-weight%3Abold%3Bfont-family%3AArial%2C%20Helvetica%2C%20Open%20Sans%2C%20sans-serif%2C%20monospace%3Bfont-size%3A25pt%20%7D%20%3C%2Fstyle%3E%3C%2Fdefs%3E%3Cg%20id%3D%22holder_163dad36013%22%3E%3Crect%20width%3D%22500%22%20height%3D%22500%22%20fill%3D%22%23EEEEEE%22%3E%3C%2Frect%3E%3Cg%3E%3Ctext%20x%3D%22185.125%22%20y%3D%22261.1%22%3E500x500%3C%2Ftext%3E%3C%2Fg%3E%3C%2Fg%3E%3C%2Fsvg%3E" data-holder-rendered="true">--}}
                {{--</div>--}}
            {{--</div>--}}

            {{--<hr class="featurette-divider">--}}

            {{--<div class="row featurette">--}}
                {{--<div class="col-md-7 order-md-2">--}}
                    {{--<h2 class="featurette-heading">Oh yeah, it's that good. <span class="text-muted">See for yourself.</span></h2>--}}
                    {{--<p class="lead">Donec ullamcorper nulla non metus auctor fringilla. Vestibulum id ligula porta felis euismod semper. Praesent commodo cursus magna, vel scelerisque nisl consectetur. Fusce dapibus, tellus ac cursus commodo.</p>--}}
                {{--</div>--}}
                {{--<div class="col-md-5 order-md-1">--}}
                    {{--<img class="featurette-image img-fluid mx-auto" data-src="holder.js/500x500/auto" alt="500x500" style="width: 500px; height: 500px;" src="data:image/svg+xml;charset=UTF-8,%3Csvg%20width%3D%22500%22%20height%3D%22500%22%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20viewBox%3D%220%200%20500%20500%22%20preserveAspectRatio%3D%22none%22%3E%3Cdefs%3E%3Cstyle%20type%3D%22text%2Fcss%22%3E%23holder_163dad36013%20text%20%7B%20fill%3A%23AAAAAA%3Bfont-weight%3Abold%3Bfont-family%3AArial%2C%20Helvetica%2C%20Open%20Sans%2C%20sans-serif%2C%20monospace%3Bfont-size%3A25pt%20%7D%20%3C%2Fstyle%3E%3C%2Fdefs%3E%3Cg%20id%3D%22holder_163dad36013%22%3E%3Crect%20width%3D%22500%22%20height%3D%22500%22%20fill%3D%22%23EEEEEE%22%3E%3C%2Frect%3E%3Cg%3E%3Ctext%20x%3D%22185.125%22%20y%3D%22261.1%22%3E500x500%3C%2Ftext%3E%3C%2Fg%3E%3C%2Fg%3E%3C%2Fsvg%3E" data-holder-rendered="true">--}}
                {{--</div>--}}
            {{--</div>--}}

            {{--<hr class="featurette-divider">--}}

            {{--<div class="row featurette">--}}
                {{--<div class="col-md-7">--}}
                    {{--<h2 class="featurette-heading">And lastly, this one. <span class="text-muted">Checkmate.</span></h2>--}}
                    {{--<p class="lead">Donec ullamcorper nulla non metus auctor fringilla. Vestibulum id ligula porta felis euismod semper. Praesent commodo cursus magna, vel scelerisque nisl consectetur. Fusce dapibus, tellus ac cursus commodo.</p>--}}
                {{--</div>--}}
                {{--<div class="col-md-5">--}}
                    {{--<img class="featurette-image img-fluid mx-auto" data-src="holder.js/500x500/auto" alt="500x500" style="width: 500px; height: 500px;" src="data:image/svg+xml;charset=UTF-8,%3Csvg%20width%3D%22500%22%20height%3D%22500%22%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20viewBox%3D%220%200%20500%20500%22%20preserveAspectRatio%3D%22none%22%3E%3Cdefs%3E%3Cstyle%20type%3D%22text%2Fcss%22%3E%23holder_163dad36013%20text%20%7B%20fill%3A%23AAAAAA%3Bfont-weight%3Abold%3Bfont-family%3AArial%2C%20Helvetica%2C%20Open%20Sans%2C%20sans-serif%2C%20monospace%3Bfont-size%3A25pt%20%7D%20%3C%2Fstyle%3E%3C%2Fdefs%3E%3Cg%20id%3D%22holder_163dad36013%22%3E%3Crect%20width%3D%22500%22%20height%3D%22500%22%20fill%3D%22%23EEEEEE%22%3E%3C%2Frect%3E%3Cg%3E%3Ctext%20x%3D%22185.125%22%20y%3D%22261.1%22%3E500x500%3C%2Ftext%3E%3C%2Fg%3E%3C%2Fg%3E%3C%2Fsvg%3E" data-holder-rendered="true">--}}
                    {{--<img class="featurette-image img-fluid mx-auto" data-src="holder.js/500x500/auto" alt="Generic placeholder image">--}}
                {{--</div>--}}
            {{--</div>--}}

            {{--<hr class="featurette-divider">--}}

            <!-- /END THE FEATURETTES -->

        </div><!-- /.container -->

    </main>

@endsection
