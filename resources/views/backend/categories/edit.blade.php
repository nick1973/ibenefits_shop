@extends('backend.layouts.app')

@section('title', app_name() . ' | ' . __('strings.backend.dashboard.title'))

@section('content')
    <h3>Edit {{ $product->name }}</h3>
    {{--<form method="patch" enctype="multipart/form-data" action="{{ route('admin.products.update', $product->id) }}">--}}
        {{ Form::model($product, ['route' => ['admin.categories.update', $product->id], 'class' => '',
         'method' => 'PATCH', 'files' => true]) }}
        {{ csrf_field() }}
        <input name="id" type="text" id="id" hidden>
        <div class="form-group row">
            <label for="name" class="col-sm-2 col-form-label">Category</label>
            <div class="col-sm-6">
                {{ Form::text('category', null, ['class' => 'form-control', 'required']) }}
            </div>
        </div>

        <div class="form-group row">
            <div class="col-sm-10">
                <button type="submit" class="btn btn-primary">Save Category</button>
            </div>
        </div>
    </form>
@endsection