@extends('layouts.base')

@section('page.title', 'My Donates')

@section('content')

    <section>
        <x-container>
            <div class="d-flex justify-content-between mb-4 align-items-center">
                <h1>My Donates</h1>
            </div>
            @include('user.donate.stats')
        </x-container>
    </section>

@endsection
