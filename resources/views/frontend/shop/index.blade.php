@extends('frontend.layouts.app')

@section('title', 'Shop' . ' | '.__('navs.general.home'))

@section('content')
    <main role="main">
        <div class="container">
            <!-- START THE FEATURETTES -->
            <h2 class="featurette-heading"><u>{{ $category }}</u></h2>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb bg-white">
                    <li class="breadcrumb-item"><a href="/">Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page">{{ $category }}</li>
                </ol>
            </nav>
            <div class="row mb-4">

            @foreach($products as $value=>$product)
                <?php
                    $sumOdd = 0;
                    if ($value % 2 == 0){ ?>

                        <div class="col-md-4 mt-4">
                            <a href="{{ $product->url }}{{ $product->id }}" style="text-decoration: none">
                                <div class="card bg-light h-100" style="max-width: 24rem">
                                    <div class="card-header text-center" style="background-color:#2e3192; color: #FFFFFF"><b>{{ $product->name }}</b></div>
                                    <div class="card-body">
                                        @if(empty($product->image_url))
                                            <img src="data:image/svg+xml;charset=UTF-8,%3Csvg%20width%3D%22240%22%20height%3D%22200%22%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20viewBox%3D%220%200%20240%20200%22%20preserveAspectRatio%3D%22none%22%3E%3Cdefs%3E%3Cstyle%20type%3D%22text%2Fcss%22%3E%23holder_164fffcdda6%20text%20%7B%20fill%3Argba(255%2C255%2C255%2C.75)%3Bfont-weight%3Anormal%3Bfont-family%3AHelvetica%2C%20monospace%3Bfont-size%3A12pt%20%7D%20%3C%2Fstyle%3E%3C%2Fdefs%3E%3Cg%20id%3D%22holder_164fffcdda6%22%3E%3Crect%20width%3D%22240%22%20height%3D%22200%22%20fill%3D%22%23777%22%3E%3C%2Frect%3E%3Cg%3E%3Ctext%20x%3D%2289.2578125%22%20y%3D%22105.1%22%3E300x150%3C%2Ftext%3E%3C%2Fg%3E%3C%2Fg%3E%3C%2Fsvg%3E" alt="{{ $product->name }}" width="300" height="150">
                                            @else
                                            <img src="{{ $product->image_url }}" alt="{{ $product->name }}" width="300" height="150">
                                        @endif
                                        <p class="card-text pt-2">{{ str_limit($product->description, 100) }}</p>
                                    </div>
                                </div>
                            </a>
                        </div>

                    <?php } else { ?>

                    <div class="col-md-4 mt-4">
                        <a href="{{ $product->url }}{{ $product->id }}" style="text-decoration: none">
                            <div class="card bg-light h-100" style="max-width: 24rem">
                                <div class="card-header text-center" style="background-color:#2e3192; color: #FFFFFF"><b>{{ $product->name }}</b></div>
                                <div class="card-body">
                                    @if(empty($product->image_url))
                                        <img src="data:image/svg+xml;charset=UTF-8,%3Csvg%20width%3D%22240%22%20height%3D%22200%22%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20viewBox%3D%220%200%20240%20200%22%20preserveAspectRatio%3D%22none%22%3E%3Cdefs%3E%3Cstyle%20type%3D%22text%2Fcss%22%3E%23holder_164fffcdda6%20text%20%7B%20fill%3Argba(255%2C255%2C255%2C.75)%3Bfont-weight%3Anormal%3Bfont-family%3AHelvetica%2C%20monospace%3Bfont-size%3A12pt%20%7D%20%3C%2Fstyle%3E%3C%2Fdefs%3E%3Cg%20id%3D%22holder_164fffcdda6%22%3E%3Crect%20width%3D%22240%22%20height%3D%22200%22%20fill%3D%22%23777%22%3E%3C%2Frect%3E%3Cg%3E%3Ctext%20x%3D%2289.2578125%22%20y%3D%22105.1%22%3E300x150%3C%2Ftext%3E%3C%2Fg%3E%3C%2Fg%3E%3C%2Fsvg%3E" alt="{{ $product->name }}" width="300" height="150">
                                    @else
                                        <img src="{{ $product->image_url }}" alt="{{ $product->name }}" width="300" height="150">
                                    @endif
                                        <p class="card-text pt-2">{{ str_limit($product->description, 100) }}</p>
                                </div>
                            </div>
                        </a>
                    </div>

                <?php
                    $sumOdd += $value;
                    }
                ?>
            @endforeach
            </div>


        </div><!-- /.container -->
    </main>
@endsection
