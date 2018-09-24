@extends('backend.layouts.app')

@section('title', app_name() . ' | ' . __('strings.backend.dashboard.title'))

@section('content')
    <h3>Add a product</h3>
    {{ Form::open(['route' => 'admin.products.store', 'method' => 'post', 'files' => true]) }}
        {{ csrf_field() }}
        <div class="form-group row">
            <label for="name" class="col-sm-2 col-form-label">Category</label>
            <div class="col-sm-6">
                {{--<input name="name" type="text" class="form-control" id="name" placeholder="Product Name" required>--}}
                <select class="form-control" name="category" required>
                    @foreach($categories as $category)
                        <option>{{ $category->category }}</option>
                    @endforeach
                </select>
            </div>
        </div>
        <div class="form-group row">
            <label for="name" class="col-sm-2 col-form-label">Product Name</label>
            <div class="col-sm-10">
                <input name="name" type="text" class="form-control" id="name" placeholder="Product Name" required>
            </div>
        </div>
        <div class="form-group row">
            <label for="price" class="col-sm-2 col-form-label">Product Price</label>
            <div class="col-sm-10">
                <input name="price" type="text" class="form-control" id="price" placeholder="Product Price" required>
            </div>
        </div>
        <div class="form-group row">
            <label for="description" class="col-sm-2 col-form-label">Description</label>
            <div class="col-sm-10">
                <textarea class="form-control" rows="10" cols="100" name="description" required></textarea>
            </div>
        </div>
        <div class="form-group row">
            <label for="description" class="col-sm-2 col-form-label">Product Information</label>
            <div class="col-sm-10">
                <textarea class="form-control" rows="10" cols="100" name="product_info" required></textarea>
            </div>
        </div>
        <div class="form-group row">
            <div class="col-sm-2">Visible on Page?</div>
            <div class="col-sm-10">
                <div class="form-check">
                    <input name="visible" class="form-check-input" type="checkbox" id="visible" value="1">
                </div>
            </div>
        </div>
        <div class="form-group row">
            <div class="col-sm-2">New In?</div>
            <div class="col-sm-10">
                <div class="form-check">
                    <input name="new_id" class="form-check-input" type="checkbox" id="new_id" value="1">
                </div>
            </div>
        </div>
        <div class="form-group row">
            <div class="col-sm-2">Most Popular?</div>
            <div class="col-sm-10">
                <div class="form-check">
                    <input name="most_popular" class="form-check-input" type="checkbox" id="most_popular" value="1">
                </div>
            </div>
        </div>
        <div class="form-group row">
            <div class="col-sm-2">Upload Image</div>
            <div class="col-sm-10">
                <input name="image" type="file" class="form-control-file" id="image">
            </div>
        </div>
        <div class="form-group row">
            <div class="col-sm-2">Link URL</div>
            <div class="col-sm-4">
                <input name="link_1" type="text" class="form-control-file" id="link_1">
            </div>
            <div class="col-sm-1">Link Display</div>
            <div class="col-sm-5">
                <input name="link_1_display" type="text" class="form-control-file" id="link_1_display">
            </div>
        </div>
        <div class="form-group row">
            <div class="col-sm-2">Link URL</div>
            <div class="col-sm-4">
                <input name="link_2" type="text" class="form-control-file" id="link_2">
            </div>
            <div class="col-sm-1">Link Display</div>
            <div class="col-sm-5">
                <input name="link_2_display" type="text" class="form-control-file" id="link_2_display">
            </div>
        </div>
        <div class="form-group row">
            <div class="col-sm-2">Link URL</div>
            <div class="col-sm-4">
                <input name="link_3" type="text" class="form-control-file" id="link_3">
            </div>
            <div class="col-sm-1">Link Display</div>
            <div class="col-sm-5">
                <input name="link_3_display" type="text" class="form-control-file" id="link_3_display">
            </div>
        </div>
        <div class="form-group row">
            <div class="col-sm-10">
                <button type="submit" class="btn btn-primary">Add Product</button>
            </div>
        </div>
    </form>
@endsection