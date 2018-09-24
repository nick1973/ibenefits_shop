@extends('backend.layouts.app')

@section('title', app_name() . ' | ' . __('strings.backend.dashboard.title'))

@section('content')
    <h3>Edit {{ $product->name }}</h3>
    {{--<form method="patch" enctype="multipart/form-data" action="{{ route('admin.products.update', $product->id) }}">--}}
        {{ Form::model($product, ['route' => ['admin.reward.update', $product->id], 'class' => '',
         'method' => 'PATCH', 'files' => true]) }}
        {{ csrf_field() }}
        <input name="id" type="text" id="id" hidden>
        <div class="form-group row">
            <label for="name" class="col-sm-2 col-form-label">Product Name</label>
            <div class="col-sm-10">
                {{ Form::text('name', null, ['class' => 'form-control', 'required']) }}
            </div>
        </div>
        <div class="form-group row">
            <label for="price" class="col-sm-2 col-form-label">Product Price</label>
            <div class="col-sm-10">
                {{ Form::text('price', null, ['class' => 'form-control', 'required']) }}
            </div>
        </div>
        <div class="form-group row">
            <div class="col-md-2">Description</div>
            <div class="col-md-4">
                {{ Form::textarea('description', null, ['class' => 'form-control', 'required']) }}
            </div>
            <div class="col-md-1">Product Information</div>
            <div class="col-md-5">
                {{ Form::textarea('product_info', null, ['class' => 'form-control', 'required']) }}
            </div>
        </div>
        <div class="form-group row">
            <div class="col-sm-2">Visible on Page</div>
            <div class="col-sm-10">
                <div class="form-check">
                    {{ Form::radio('visible', 1) }}
                </div>
            </div>
            <div class="col-sm-2">Not Visible on Page</div>
            <div class="col-sm-10">
                <div class="form-check">
                    {{ Form::radio('visible', 0) }}
                </div>
            </div>
        </div>
        <div class="form-group row">
            <div class="col-sm-2">New In</div>
            <div class="col-sm-10">
                <div class="form-check">
                    {{ Form::radio('new_in', 1) }}
                </div>
            </div>
            <div class="col-sm-2">Remove New In</div>
            <div class="col-sm-10">
                <div class="form-check">
                    {{ Form::radio('new_in', 0) }}
                </div>
            </div>
        </div>
        <div class="form-group row">
            <div class="col-sm-2">Uploaded Image</div>
            <img src="{{ $product->image_url }}" height="40">
            <div class="col-sm-10">
                <input name="image_url" type="file" class="form-control-file" id="image">
            </div>
        </div>

        <div class="form-group row">
            <div class="col-sm-2">Link URL</div>
            <div class="col-sm-4">
                {{ Form::text('link_1', null, ['class' => 'form-control']) }}
            </div>
            <div class="col-sm-1">Link Display</div>
            <div class="col-sm-5">
                {{ Form::text('link_1_display', null, ['class' => 'form-control']) }}
            </div>
        </div>
        <div class="form-group row">
            <div class="col-sm-2">Link URL</div>
            <div class="col-sm-4">
                {{ Form::text('link_2', null, ['class' => 'form-control']) }}
            </div>
            <div class="col-sm-1">Link Display</div>
            <div class="col-sm-5">
                {{ Form::text('link_2_display', null, ['class' => 'form-control']) }}
            </div>
        </div>
        <div class="form-group row">
            <div class="col-sm-2">Link URL</div>
            <div class="col-sm-4">
                {{ Form::text('link_3', null, ['class' => 'form-control']) }}
            </div>
            <div class="col-sm-1">Link Display</div>
            <div class="col-sm-5">
                {{ Form::text('link_3_display', null, ['class' => 'form-control']) }}
            </div>
        </div>

        <div class="form-group row">
            <div class="col-sm-10">
                <button type="submit" class="btn btn-primary">Save Product</button>
            </div>
        </div>
    </form>
@endsection