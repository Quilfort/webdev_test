@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-12 pt-2">
                 <div class="row">
                    <div class="col-8">
                        <h1 class="display-one">Your Click History</h1>
                    </div>
                    <div class="col-4">
                        <p>Create new Click Try</p>
                        <a href="/clicks/create/post" class="button">Start your Horses</a>
                    </div>
                </div>                
                @forelse($clicks as $click)
                    <ul>
                        <li><a href="./clicks/{{ $click->id }}">{{ ucfirst($click->title) }}</a></li>
                    </ul>
                @empty
                    <p class="text-warning">No Click History available</p>
                @endforelse
            </div>
        </div>
    </div>
@endsection