@extends('layouts.master')

@push('styles')
    @livewireStyles
@endpush

@push('scripts')
    @livewireScripts
@endpush

@livewire('navigation')
@section('content')
    <div class="container">
        <h1>Livewire</h1>
        <div>
            Hello There
        </div>
    </div>
@endsection
