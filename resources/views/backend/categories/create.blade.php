@extends('backend.layouts.app')

@section('title', app_name() . ' | ' . __('strings.backend.dashboard.title'))

@section('content')
    <h3>Add a Category</h3>

    {{ Form::open(['route' => 'admin.categories.store', 'method' => 'post']) }}
        {{ csrf_field() }}
        <div class="form-group row">
            <label for="name" class="col-sm-2 col-form-label">Category</label>
            <div class="col-sm-6">
                <input name="category" type="text" class="form-control" placeholder="Category" required>
            </div>
        </div>

        <div class="form-group row">
            <div class="col-sm-10">
                <button type="submit" class="btn btn-primary">Add Category</button>
            </div>
        </div>
    </form>
@endsection