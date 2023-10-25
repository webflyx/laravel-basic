@extends('layouts.base')

@section('page.title', 'Login')

@section('content')
    <section>
        <x-container>
            <div class="row">
                <div class="col-6 mx-auto">
                    
                    <x-card>
                        <div class="card-body">
                            <h1 class="m-0">{{ __('Login') }}</h1>
                        </div>

                        <div class="card-body">
                            <x-form action="{{ route('login.store') }}" method="POST">
                                <div class="mb-3">
                                    <label for="email">{{ __('Email') }}</label>
                                    <input autofocus type="email" name="email" class="form-control">
                                </div>
                                <div class="mb-3">
                                    <label for="password">{{ __('Password') }}</label>
                                    <input type="password" name="password" class="form-control">
                                </div>
                                <div class="mb-3">
                                    <input type="checkbox" name="remember" id="remember" class="form-check-input">
                                    <label for="remember">{{ __('Remember Me') }}</label>
                                </div>
                                <button type="submit" class="btn btn-primary">{{ __('Enter') }}</button>
                            </x-form>
                        </div>
                    </x-card>

                </div>
            </div>
        </x-container>
    </section>
@endsection
