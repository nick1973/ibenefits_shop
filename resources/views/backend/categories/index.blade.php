@extends('backend.layouts.app')

@section('title', app_name() . ' | ' . __('strings.backend.dashboard.title'))

@section('content')
    <h3>Categories</h3>
    <table id="category" class="table table-hover">
        <thead>
        <tr>
            <th>Category</th>
            <th></th>
        </tr>
        </thead>
    </table>


    <form id="category-form" method='post' hidden>
        <input type='hidden' name='_token' value='<?php echo csrf_token(); ?>'>
        <input name="_method" type="hidden" value="DELETE">
    </form>

@endsection