@extends('backend.layouts.app')

@section('title', app_name() . ' | ' . __('strings.backend.dashboard.title'))

@section('content')
    <div class="row">
        <div class="col">
            <div class="card">
                <div class="card-header">
                    <strong>{{ __('strings.backend.dashboard.welcome') }} {{ $logged_in_user->name }}!</strong>
                </div><!--card-header-->
                <div class="card-block">
                    <p>Here you can update all user information and add and edit products.</p>
                </div><!--card-block-->
            </div><!--card-->
        </div><!--col-->
    </div><!--row-->
@endsection
