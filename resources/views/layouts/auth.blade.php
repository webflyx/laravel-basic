@extends('layouts.base')

@section('page.title', 'Login')

@section('content')
    <section>
        <x-container>
            <div class="row">
                <div class="col-6 mx-auto">
                    
                    @yield('auth.content')

                </div>
            </div>
        </x-container>
    </section>
@endsection
