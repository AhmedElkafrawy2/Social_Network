@extends('layouts.app')

@section('content')
@include('nav')
<div class="home-page-left-section col-lg-2">
    
    <div class="information-section-content">
        
        <ul>
            
            <li class="first-list-element"><img class="first-element-image-info-bar" src="{{ asset('images/core/12938289_1687755138141525_6332429060813916871_n.jpg') }}"  /><span>Ahmed Elkafrawy</span></li>
            <li><p> Shortcuts </p></li>
            <li><img src="{{ asset('images/core/12938289_1687755138141525_6332429060813916871_n.jpg') }}"  /><span>Ahmed Elkafrawy</span></li>
            <li><img src="{{ asset('images/core/12938289_1687755138141525_6332429060813916871_n.jpg') }}"  /><span>Ahmed Elkafrawy</span></li>
            <li><img src="{{ asset('images/core/12938289_1687755138141525_6332429060813916871_n.jpg') }}"  /><span>Ahmed Elkafrawy</span></li>
            <li><p>Explore</p></li>
            <li><img src="{{ asset('images/core/events.png') }}"  /><span>Events</span></li>
            <li><img src="{{ asset('images/core/pages.png') }}"  /><span>Pages</span></li>
            <li><img src="{{ asset('images/core/groups.png') }}"  /><span>Groups</span></li>
            <li><img src="{{ asset('images/core/findfriends.png') }}"  /><span>Find Friends</span></li>
            <li><p>Create</p></li>
            <li><a href="">Page |</a><a href="">    Group |</a><a href="">    Event</a></li>
           
            
            
        </ul>
        
        
    </div>
    
    
</div>
<div class="home-page-posts-section col-lg-5">
    
    @include('createpost')
    @include('posts')
    
    
</div>
<div class="home-page-suggested-section col-lg-3">
    
    
    <div class="suggested-friends">
        
        <p class="suggested-friends-title">People You May Know</p>
        <p class="see-all-suggested-friends">See All</p>
        <ul>
            
            <li>
                
               <img src="{{asset('images/core/12938289_1687755138141525_6332429060813916871_n.jpg')}}" />
               <p class="sugested-friend-name">ahmed Ali</p>
               <p class="add-suggested-friend btn btn-default">Add Friend</p>
                
            </li>
            <li>
                
               <img src="{{asset('images/core/12938289_1687755138141525_6332429060813916871_n.jpg')}}" />
               <p class="sugested-friend-name">ahmed Ali</p>
               <p class="add-suggested-friend btn btn-default">Add Friend</p>
                
            </li>
            <li>
                
               <img src="{{asset('images/core/12938289_1687755138141525_6332429060813916871_n.jpg')}}" />
               <p class="sugested-friend-name">ahmed Ali</p>
               <p class="add-suggested-friend btn btn-default">Add Friend</p>
                
            </li>
            
        </ul>
        
    </div>
    <div class="suggested-group">
        
        <p class="suggested-groups-title">Suggested Groups</p>
        <p class="see-all-suggested-groups">See All</p>
        <ul>
            
            <li>
                
                <img src="{{asset('images/core/12938289_1687755138141525_6332429060813916871_n.jpg')}}" />
                <p class="sugested-group-name">ahmed Ali</p>
                <p class="sugested-group-des">300 member</p>
                <p class="join-group btn btn-default">join-group</p>
                
            </li>
            
        </ul>
    </div>
    
    
    <div class="suggested-group">
        
        <p class="suggested-groups-title">Suggested Pages</p>
        <p class="see-all-suggested-groups">See All</p>
        <ul>
            
            <li>
                
                <img src="{{asset('images/core/12938289_1687755138141525_6332429060813916871_n.jpg')}}" />
                <p class="sugested-group-name">ahmed Ali</p>
                <p class="sugested-group-des">300 like</p>
                <p class="join-group btn btn-default">Like-page</p>
                
            </li>
            
        </ul>
    </div>
    
</div>
<div class="home-page-friends-section col-lg-2">
    
    
    @include('friends')
    
    
</div>
@endsection
