@extends('frontend.layouts.app')

@section('title', 'Shop' . ' | '.__('navs.general.home'))

@section('content')
    <main role="main">
        <div class="container">
            <!-- START THE FEATURETTES -->
            <h2 class="featurette-heading"><u>iBenefits Cart</u></h2>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb bg-white">
                    <li class="breadcrumb-item"><a href="/">Home</a></li>
                    <li class="breadcrumb-item"><a href="/shop">Shop</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Cart</li>
                </ol>
            </nav>
        </div>

        <div class="container">
            <div class="row">
                <div class="col-sm-12 col-md-12 col-md-offset-1 table-responsive">
                    <table class="table">
                        <thead>
                        <tr>
                            <th><h3>My Cart</h3></th>
                            <th></th>
                            <th>Quantity</th>
                            <th class="text-center">Price</th>
                            <th class="text-center">Sub Total</th>
                        </tr>
                        </thead>
                        <tbody>

                        @foreach(Cart::content() as $row)
                        <tr>
                            <td class="col-sm-8 col-md-6 pb-5">
                                <div class="media">
                                        <a class="thumbnail pull-left" href="/shop/product/{{ $row->options->product_id }}">
                                            <img class="media-object" src="{{ $row->options->image_url }}" style="width: 100px; height: 100px;"> </a>
                                        <div class="media-body ml-5">
                                            <a href="/shop/product/{{ $row->options->product_id }}">{{ $row->name }}</a>
                                            <div class="col-sm-12 col-md-12 col-lg-12">
                                                <button onclick="update({{ $row->options->product_id }})" class="btn btn-primary">Update</button>
                                                <a class="btn btn-danger" href="/shop/cart/remove/{{ $row->rowId }}">Remove</a>
                                            </div>
                                        </div>
                                </div>
                            </td>
                            <td></td>
                            <td class="col-sm-1 col-md-1" style="text-align: center">
                                {{ Form::open(['route' => 'frontend.updateCart', 'method' => 'post', 'id' => $row->options->product_id ]) }}
                                    <input type="text" class="form-control" name="qty" value="{{ $row->qty }}">
                                    <input type="text" name="rowId" value="{{ $row->rowId }}" hidden>
                                {{ Form::close() }}
                            </td>
                            <td class="col-sm-1 col-md-1 text-center">£{{ $row->price }}</td>
                            <td class="col-sm-1 col-md-1 text-center">£{{ $row->total }}</td>
                        </tr>
                        @endforeach
                        <tr>

                        </tr>
                        <tr>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td><h3>Total</h3></td>
                            <td class="text-right"><h3><strong>£{{ Cart::total() }}</strong></h3></td>
                        </tr>
                        <tr>
                            <td>   </td>
                            <td>   </td>
                            <td>   </td>
                            <td colspan="2">
                                {{ Form::open(['route' => 'frontend.checkout', 'method' => 'post', 'id' => '']) }}
                                    <button type="submit" class="btn btn-secondary btn-lg pl-5 pr-5 w-100">Checkout</button>
                                {{ Form::close() }}
                            </td>
                            <td></td>
                        </tr>
                        </tbody>

                    </table>
                </div>
            </div>
        </div>
    </main>
@endsection
