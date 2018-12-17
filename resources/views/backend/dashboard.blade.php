@extends('backend.layouts.app')

@section('title', app_name() . ' | ' . __('strings.backend.dashboard.title'))

@section('content')
    <div class="row">
        <div class="col">
            <div class="card">
                <div class="card-header">
                    <strong>@lang('strings.backend.dashboard.welcome') {{ $logged_in_user->name }}!</strong>
                </div><!--card-header-->
                <div class="card-body">
                    {!! __('strings.backend.welcome') !!}
                </div><!--card-body-->
            </div><!--card-->
            <label class="switch switch-pill switch-primary">
                    <input type="checkbox" class="switch-input" checked>
                    <span class="switch-slider"></span>
                  </label>

        </div><!--col-->
    </div><!--row-->
@endsection
