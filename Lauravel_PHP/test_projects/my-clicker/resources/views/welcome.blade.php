@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-12 text-center pt-5">
                <h1 class="display-one mt-5">{{ config('app.name') }}</h1>
                <div>
                    <p style="color: green">Totally Useless Datebase for clicks</p>
                </div>
                <br>
                <div>
                    <img src="https://i.pinimg.com/originals/01/2b/19/012b1955c13ba291b9e5985d5cf60871.jpg" alt="CookieMonster" style="width:300px;height:300px;">
                </div>
                <br>
                <div>
                    <a href="/clicks" class="button">Show Clicks</a>
                </div>
            </div>
        </div>
    </div>
@endsection