@extends('layouts.app')
@section('content')

@include('nav')

<div class="friends-page-cover-menu col-lg-7 col-lg-offset-1">
    <div class="col-lg-12">
    @include('profilepagecovermenu')
    </div>
    <div class="friends-page-friends-list-content col-lg-12">
        <div class="header-friends-list">
            
            <div class="title-friends-p">
                
                <img src="{{ asset('images/core/friendspagefriends.png') }}" />
                <p>Friends</p>
                <button>friends request</button>
                    
            </div>
            <div class="all-friends-or">
                
                <a href="#">all friends</a>
                <a href="#" class="rec-added">recently added</a>
                
            </div>
            
        </div>
        <div class="body-friends-list">
           
            <ul>
                
                <li class="col-lg-6">
                  
                    <img src="{{ asset('images/core/2.jpg') }}" />
                    <p>Ahmed Ali</p>
                    <span>2 mutual friends</span>
                    <button class="btn btn-primary">Add Friend</button> 
                   
                        
                </li>
                <li class="col-lg-6">
                  
                    <img src="{{ asset('images/core/2.jpg') }}" />
                    <p>Ahmed Ali</p>
                    <span>2 mutual friends</span>
                    <button class="btn btn-default">Add Friend</button> 
                   
                        
                </li>
                <li class="col-lg-6">
                  
                    <img src="{{ asset('images/core/2.jpg') }}" />
                    <p>Ahmed Ali</p>
                    <span>2 mutual friends</span>
                    <button class="btn btn-default">Add Friend</button> 
                   
                        
                </li>
                
            </ul>
            
        </div>
        
        
    </div>

</div>

<div class="friends-page-friends-list col-lg-2 col-lg-offset-2">
@include('friends')
</div>
@endsection
