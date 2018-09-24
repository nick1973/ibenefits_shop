@extends('frontend.layouts.app')

@section('title', 'Shop' . ' | '.__('navs.general.home'))

@section('content')
    <main role="main">
        <div style="margin-top: 75px" class="container pt-5">
            {{--<hr class="featurette-divider">--}}
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb bg-white">
                    <li class="breadcrumb-item"><a href="/">Home</a></li>
                    <li class="breadcrumb-item"><a href="javascript:history.back()">{{ $product->category }}</a></li>
                    <li class="breadcrumb-item active" aria-current="page">{{ $product->name }}</li>
                </ol>
            </nav>
            <div class="pt-2 row">
                <div class="col-sm-6 col-md-6">
                    <img src="{{ $product->image_url }}" width="400px">
                </div>
                <div class="col-sm-6 col-md-6">
                    {{ Form::open(['route' => 'frontend.addCart', 'method' => 'post']) }}
                    <input name="name" value="{{ $product->name }}" hidden>
                    <input name="price" value="{{ $product->price }}" hidden>
                    <h1 style="color: #2e3192" class="product title mb-1">{{ $product->name }}</h1>

                    <div class="product-price mt-3 mb-2"><b>£{{ $product->price }}</b></div>

                    <div class="mt-3 mb-3 pr-2"><b>Quantity</b>
                        <input class="input-group-field" type="number" name="quantity" value="1">
                    </div>

                    <button type="submit" class="btn btn-secondary w-100 btn-lg pl-5 pr-5">Add to Cart</button>
                    {{ Form::close() }}
                    <div class="card flex-md-row mt-3">
                        <div class="card-body d-flex flex-column">
                            <h3 style="color: #2e3192" class="mb-2">Product Description</h3>
                            <p class="card-text mb-auto">{{ $product->description }}</p>
                        </div>
                    </div>

                    <div class="pt-3">
                        @if(!empty($product->link_1) || !empty($product->link_2) || !empty($product->link_3))
                            {{--<h3>PDF Links</h3>--}}
                        @endif
                        @if(!empty($product->link_1))
                                @if(empty($product->link_1_display))
                                <a class="btn btn-dark" style="background-color: #2e3192" href="{{ $product->link_1 }}" target="_blank">{{ $product->link_1 }}</a>
                                <br>
                                @else
                                    <a class="btn btn-dark" style="background-color: #2e3192" href="{{ $product->link_1 }}">{{ $product->link_1_display }}</a>
                                    <br>
                                @endif
                        @endif
                            <br>
                        @if(!empty($product->link_2))
                                @if(empty($product->link_2_display))
                                    <a class="btn btn-dark" style="background-color: #2e3192" href="{{ $product->link_2 }}" target="_blank">{{ $product->link_2 }}</a>
                                    <br>
                                @else
                                    <a class="btn btn-dark" style="background-color: #2e3192" href="{{ $product->link_2 }}" target="_blank">{{ $product->link_2_display }}</a>
                                    <br>
                                @endif
                        @endif
                            <br>
                        @if(!empty($product->link_3))
                                @if(empty($product->link_3_display))
                                    <a class="btn btn-dark" style="background-color: #2e3192" href="{{ $product->link_3 }}" target="_blank">{{ $product->link_3_display }}</a>
                                    <br>
                                @else
                                    <a class="btn btn-dark" style="background-color: #2e3192" href="{{ $product->link_3 }}" target="_blank">{{ $product->link_3_display }}</a>
                                    <br>
                                @endif
                        @endif
                    </div>
                </div>
            </div>

            <div class="container mb-5">
                <ul class="nav nav-tabs">
                    <li class="active"><a class="nav-link active" data-toggle="tab" href="#product-info">PRODUCT INFO</a></li>
                    <li><a class="nav-link" data-toggle="tab" href="#returns">RETURN AND REFUND POLICY</a></li>
                </ul>

                <div class="tab-content">
                    <div id="product-info" class="pt-3 tab-pane fade show active">
                    <h3>PRODUCT INFO</h3>
                    <p>{{ $product->product_info }}</p>
                    </div>
                    <div id="returns" class="pt-3 tab-pane fade">
                    <h3>RETURN AND REFUND POLICY</h3>
                    <p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Nam iaculis bibendum est, nec interdum metus convallis vel. Etiam sit amet ipsum in ante lobortis consectetur vel eu nisi. Etiam porttitor risus vel porta laoreet. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Morbi viverra eu leo ut cursus. Donec convallis justo ut metus tristique tincidunt. Nunc id sagittis libero. Duis eu porta neque. Pellentesque eu rhoncus dolor. Nunc tempor molestie dolor, id ultricies ipsum condimentum non. Aenean non vehicula augue, vitae feugiat elit.</p>
                    </div>
                </div>
            </div>
        </div>
    </main>

@endsection
