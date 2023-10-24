@extends('layouts.auth')

@section('page.title', 'Login')

@section('auth.content')
    <x-card>
        <div class="card-body d-flex justify-content-between">
            <h1 class="m-0">{{ __('Login') }}</h1>
            <span>
                <a href="{{ route('register') }}">{{ __('Register') }}</a>
            </span>
        </div>

        <div class="card-body">
            <x-form action="{{ route('login.store') }}" method="POST">
                <div class="mb-3">
                    <label for="email">{{ __('Email') }}</label>
                    <x-input type="email" name="email" id="email" />
                </div>
                <div class="mb-3">
                    <label for="password">{{ __('Password') }}</label>
                    <x-input type="password" name="password" id="password" />
                </div>
                <div class="mb-3">
                    <x-checkbox name="remember" id="remember" />
                    <label for="remember">{{ __('Remember Me') }}</label>
                </div>
                <x-button>{{ __('Enter') }}</x-button>
            </x-form>
        </div>
    </x-card>
@endsection
