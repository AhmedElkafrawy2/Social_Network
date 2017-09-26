@extends('layouts.app')
@section('content')
        <!--
        <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    @if (Auth::check())
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ url('/login') }}">Login</a>
                        <a href="{{ url('/register') }}">Register</a>
                    @endif
                </div>
            @endif

            <div class="content">
                <div class="title m-b-md">
                    Laravel
                </div>

                <div class="links">
                    <a href="https://laravel.com/docs">Documentation</a>
                    <a href="https://laracasts.com">Laracasts</a>
                    <a href="https://laravel-news.com">News</a>
                    <a href="https://forge.laravel.com">Forge</a>
                    <a href="https://github.com/laravel/laravel">GitHub</a>
                </div>
            </div>
        </div-->
        
            @if (Auth::check())
            @include('home')
            @else
            <div class="Welcome-page-content">
                <div class="welcome-page-links">
                    
                    <ul>                        
                        <li class="list-brand"><img src="{{ asset('images/core/logo.png') }}" /><span>Social_Media</span></li>
                        <li class="first-list-element"><img src="{{ asset('images/core/Capture1.png') }}" />Create Group</li>
                        <li><img src="{{ asset('images/core/Capture2.png') }}" />Create Pages</li>                     
                        <li><img src="{{ asset('images/core/Capture4.png') }}" />Login / Register</li>                        
                    </ul>  
                </div>
                <div class="welcome-left-image">
                    
                </div>
                <div class="welcome-paragraph">This Is Your Opportunity To Change <span> The World </span></div>
                <div class="login-register-buttons">
                    <a href="{{ url('/login') }}"><button class="btn-login-page">Login</button></a>
                    <a href="{{ url('/register') }}"><button class="btn-register-page">Register</button></a>  
                </div>
                
            </div>
            @endif
@endsection
