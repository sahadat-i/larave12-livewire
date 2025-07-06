@extends('components.layouts.app')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Simpel Project laravel 12</div>
                <div class="card-body">
                    <p>{{ __('This is a simple Laravel application to demonstrate the welcome page.') }}</p>
                    <p>{{ __('Feel free to explore and enjoy your stay!') }}</p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection