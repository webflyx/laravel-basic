@extends('layouts.auth')

@section('page.title', 'Register')

@section('auth.content')
    <x-card>
        <div class="card-body d-flex justify-content-between">
            <h1 class="m-0">{{ __('Register') }}</h1>
            <span>
                <a href="{{ route('login') }}">{{ __('Login') }}</a>
            </span>
        </div>

        <div class="card-body">
            <x-form action="{{ route('register.store') }}" method="POST">
                <div class="mb-3">
                    <label for="email">{{ __('Email') }}</label>
                    <x-input type="email" name="email" />
                </div>
                <div class="mb-3">
                    <label for="password">{{ __('Password') }}</label>
                    <x-input type="password" name="password" />
                </div>
                <div class="mb-3">
                    <label for="password">{{ __('Password Confirm') }}</label>
                    <x-input type="password" name="password-confirm" />
                </div>
                <div class="mb-3">
                    <x-checkbox name="rules" id="rules"  />
                    <label for="rules">{{ __('Agree Rules') }}</label>
                </div>
                <x-button>{{ __('Enter') }}</x-button>
            </x-form>
        </div>
    </x-card>
@endsection
