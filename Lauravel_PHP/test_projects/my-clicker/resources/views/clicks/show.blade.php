@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-12 pt-2">
                <a href="/click" class="button">Go back</a>
                <div>
                    <h1 class="display-one">{{ ucfirst($click->title) }}</h1>
                    <p>Start: {!! $click->startCount !!}</p>
                    <p>How Many Clicks: {!! $click->clicks !!}</p> 
                    <p>End Count: {!! $click->endCount !!}</p>  
                </div>
                <hr>
                <a href="/clicks/{{ $click->id }}/edit" class="button">Edit and cheat the sytem</a>
                <br><hr>
                <form id="delete-frm" class="" action="" method="POST">
                    @method('DELETE')
                    @csrf
                    <button class="button">Delete Post</button>
                </form>
            </div>
        </div>
    </div>
@endsection