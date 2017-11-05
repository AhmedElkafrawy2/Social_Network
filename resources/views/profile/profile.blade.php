@extends('layouts.app')

@section('content')

@include('nav')

<div class="cover-menu-bar-section col-lg-7 col-lg-offset-1">
    
    
    
    @include('profilepagecovermenu')
    <div class="profile-page-suggested-friends col-lg-12">
        <div class="profile-page-sug-fr-head col-lg-12">
            
            <p>People you may know</p>
            <span>See All</span>
            <i class="fa fa-times" aria-hidden="true"></i>

            
        </div>
        <div class="profile-page-sug-fr-body col-lg-12">
            
            <ul>
                
                <li class="col-lg-3">
                    
                    <img src="{{ asset('images/core/homepagecover.jpg') }}" />
                    <div class="cont-frie-list">
                        <p class="name-sug-friend">Ahmed Hassan</p>
                        <p class="mut-frie">1 mutual friend</p>
                        <button class="btn btn-primary">Add</button>
                    </div>
                </li>
                <li class="col-lg-3">
                    
                    <img src="{{ asset('images/core/homepagecover.jpg') }}" />
                    <div class="cont-frie-list">
                        <p class="name-sug-friend">Ahmed Hassan</p>
                        <p class="mut-frie">1 mutual friend</p>
                        <button class="btn btn-primary">Add</button>
                    </div>
                </li>
                <li class="col-lg-3">
                    
                    <img src="{{ asset('images/core/homepagecover.jpg') }}" />
                    <div class="cont-frie-list">
                        <p class="name-sug-friend">Ahmed Hassan</p>
                        <p class="mut-frie">1 mutual friend</p>
                        <button class="btn btn-primary">Add</button>
                    </div>
                </li>
                <li class="col-lg-3">
                    
                    <img src="{{ asset('images/core/homepagecover.jpg') }}" />
                    <div class="cont-frie-list">
                        <p class="name-sug-friend">Ahmed Hassan</p>
                        <p class="mut-frie">1 mutual friend</p>
                        <button class="btn btn-primary">Add</button>
                    </div>
                </li>
               
                
            </ul>
            
        </div>
    </div>
    
    <div class="profile-page-left-section col-lg-4">
        
        <div class="update-information col-lg-12">
            
            <div class="update-info-head">
                
                <img src="{{ asset('images/core/intro.png') }}" />
                <p>Into</p>
                
            </div>
            <div class="update-info-body">
                
                <ul>
                    
                    @if($hasinfo == 1)
                        @if($education !== "")
                        <li>
                            <i class="fa fa-graduation-cap" aria-hidden="true"></i>
                            <p>
                                Education  {{ $education }}
                            </p>
                        </li>
                        @endif
                        @if($work !== "")
                        <li>

                            <i class="fa fa-briefcase" aria-hidden="true"></i>
                            <p>worked at {{ $work }}</p>
                        </li>
                        @endif
                        @if($birthday !== "")

                        <li>

                            <i class="fa fa-birthday-cake" aria-hidden="true"></i>
                            <p>birthday : {{ $birthday }} </p>

                        </li>
                        @endif
                        @if($gender !== "")
                        <li>

                            <i class="fa fa-male" aria-hidden="true"></i>
                            <p> {{ $gender }} </p>

                        </li>
                        @endif
                        @if($social !== "")
                        <li>

                            <i class="fa fa-heart" aria-hidden="true"></i>
                            <p>{{ $social }}</p>

                        </li>
                        @endif
                    @else
                        <li>
                            <i class="fa fa-asterisk" aria-hidden="true"></i>
                            <p>No Information To Show</p>
                        </li>
                    @endif
                    
                </ul>
                
            </div>
        </div>
        
        <div class="profile-page-lift-bar-photos col-lg-12">
            
            <div class="display-photos-head update-info-head">
                
                <img src="{{ asset('images/core/photos.png') }}" />
                <p>Photos</p>
                
            </div>
            <div class="display-photo-body">
                
                <ul>
                    
                    <li>
                        
                         <img src="{{ asset('images/core/homepagecover.jpg') }}" />
                         
                        
                    </li>
                    
                    <li>
                        
                         <img src="{{ asset('images/core/homepagecover.jpg') }}" />
                         
                        
                    </li>
                    
                    <li>
                        
                         <img src="{{ asset('images/core/homepagecover.jpg') }}" />
                         
                        
                    </li>
                    
                    <li>
                        
                         <img src="{{ asset('images/core/homepagecover.jpg') }}" />
                         
                        
                    </li>

                    
                </ul>
                
            </div>
        </div>
        <div class="profile-page-lift-bar-friends col-lg-12">
            
            <div class="display-photos-head update-info-head">
                
                <img src="{{ asset('images/core/friends.png') }}" />
                <p>friends</p>
                
            </div>
            <div class="display-photo-body">
                
                <ul>
                    
                    <li>
                        
                         <img src="{{ asset('images/core/homepagecover.jpg') }}" />
                         <p>Hosam ahmed</p>
                        
                    </li>
                    
                    <li>
                        
                         <img src="{{ asset('images/core/homepagecover.jpg') }}" />
                         <p>Hosam ahmed</p>
                        
                    </li>
                    
                    <li>
                        
                         <img src="{{ asset('images/core/homepagecover.jpg') }}" />
                         <p>Hosam ahmed</p>
                        
                    </li>
                    
                    <li>
                        
                         <img src="{{ asset('images/core/homepagecover.jpg') }}" />
                         <p>Hosam ahmed</p>
                        
                    </li>

                    
                </ul>
                
            </div>
        </div>

        
    </div>
    <div class="profile-page-posts-section col-lg-8">
        
        @include('createpost')
        @include('posts')
        
    </div>
</div>
<div class="profile-page-friends-list col-lg-2 col-lg-offset-2">
    
    @include('friends')
    
</div>
@endsection
