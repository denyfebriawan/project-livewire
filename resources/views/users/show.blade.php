@extends('layouts.master')
@livewire('navigation')
@section('content')
    <div class="container">
        <div>
            <div class="card" style="width: 18rem;">
                <div class="card-header">
                    Your Profile
                </div>
                <ul class="list-group list-group-flush">
                    <li class="list-group-item">{{ $user->name }}</li>
                    <li class="list-group-item">{{ $user->email }}</li>

                </ul>
            </div>
        </div>
    </div>
@endsection
