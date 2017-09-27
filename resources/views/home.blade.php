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
    
    <div class="create-post col-lg-12">
        
        <div class="create-page-header col-lg-12">
            
            <i class="fa fa-pencil" aria-hidden="true"></i>
            <span>Create Post</span>
            
        </div>
        <div class="create-post-body col-lg-12">
            
            <img src="{{ asset('images/core/12938289_1687755138141525_6332429060813916871_n.jpg') }}" />
            <textarea class="creaate-post-textarea" placeholder="What Is In Your Mind , {{ Auth::user()->firstname }} "></textarea>
            <div class="border-top-create-post">
                <div class="create-page-footer col-lg-12">

                    <div class="creaet-post-upload-iamge col-lg-4">Upload Image</div>
                    <div class="creaet-post-feeling col-lg-4">Feelings</div>
                    <div class="creaet-post-more col-lg-4">More</div>



                </div>
            </div>    
        
        </div>
        
        
    </div>
    <div class="posts col-lg-12">
        
        <div class="post-title col-lg-12">
            <span>
                hosam Hassan
            </span>
            <p> 
                Comment on this Post 
            </p>

        </div>
        <div class="post-body-image">
            <div class="post-person-content">
                <img src="{{ asset('images/core/12938289_1687755138141525_6332429060813916871_n.jpg') }}"/>
                <p>Ahmed Elkafrawy</p>
                <time>3 min</time>
                <span class="btn btn-default">Like Page</span>
            </div>
            <div class="post-description">
                
                <p class="person-description">
                    Hello this is my first post i hope this is
                    Hello this is my first post i hope this isagoge
                    Hello this is my first post i hope this isagoge
                    Hello this is my first post i hope this isagoge
                    Hello this is my first post i hope this is
                </p>
                <img src="{{ asset('images/core/homepagecover.jpg') }}" />
                <div class="page-content-border">
                    
                    <p class="page-description">
                        Hello This is the page description of this post
                        Hello this is my first post i hope this is
                        Hello this is my first post i hope this isagoge
                        Hello this is my first post i hope this isagoge
                        Hello this is my first post i hope this isagoge
                        Hello this is my first post i hope this is
                    </p>
                    <p class="page-description-load-more btn btn-default">Load More</p>
                    
                </div>

            </div>
        </div>
        <div class="post-liks-comments-number">
            
                <i class="fa fa-thumbs-o-up" aria-hidden="true"></i>
                <p class="number-of-liks">30</p>
                <p class="number-of-comments">30 comments</p>
                <p class="number-of-shares">30 shares</p>
            
        </div>
        <div class="like-share-comment-post col-lg-12">
            
            <div class="like-this-post col-lg-2">
                
                <img src="{{asset('images/core/like.png')}}" />
                <p>Like</p>
                
            </div>
            <div class="comment-this-post col-lg-2">
                
                <img src="{{asset('images/core/comment.png')}}" />
                <p>comment</p>
                
            </div>
            <div class="share-this-post col-lg-2">
                
                <img src="{{asset('images/core/share.png')}}" />
                <p>share</p>
                
            </div>

   
            
        </div>
        
        <div class="previouse-commments-on-this-post col-lg-12">
          
            <div class="write-comment">
                
                <img src="{{asset('images/core/12938289_1687755138141525_6332429060813916871_n.jpg')}}" />
                <input type="text" name="write-comment" placeholder="Write-Comment" />
                
            </div>
            <div class="list-of-previouse-comments">
                
                <ul>
                    
                    <li>
                        
                        <img src="{{asset('images/core/12938289_1687755138141525_6332429060813916871_n.jpg')}}" />
                        <p class="comment-owner-name">Hosam Magdy</p>
                        <p class="comment-time">3 min</p>
                        <p class="comment-it-self">
                            Nice WorkNice WorkNice WorkNice 
                            WorkNice WorkNice WorkNice WorkNice W
                            orkNice WorkNice WorkNice WorkNice W
                            orkNice WorkNice WorkNice WorkNice WorkNice WorkNice Work
                        </p>
                        <p class="like-ind-comment">Like</p>
                        <p class="reply-ind-comment">reply</p>
                        
                    </li>
                    
                    <li>
                        
                        <img src="{{asset('images/core/12938289_1687755138141525_6332429060813916871_n.jpg')}}" />
                        <p class="comment-owner-name">Hosam Magdy</p>
                        <p class="comment-time">3 min</p>
                        <p class="comment-it-self">
                            Nice WorkNice WorkNice WorkNice 
                            WorkNice WorkNice WorkNice WorkNice W
                            orkNice WorkNice WorkNice WorkNice W
                            orkNice WorkNice WorkNice WorkNice WorkNice WorkNice Work
                        </p>
                        <p class="like-ind-comment">Like</p>
                        <p class="reply-ind-comment">reply</p>
                        
                    </li>
                    
                    <li>
                        
                        <img src="{{asset('images/core/12938289_1687755138141525_6332429060813916871_n.jpg')}}" />
                        <p class="comment-owner-name">Hosam Magdy</p>
                        <p class="comment-time">3 min</p>
                        <p class="comment-it-self">
                            Nice WorkNice WorkNice WorkNice 
                            WorkNice WorkNice WorkNice WorkNice W
                            orkNice WorkNice WorkNice WorkNice W
                            orkNice WorkNice WorkNice WorkNice WorkNice WorkNice Work
                        </p>
                        <p class="like-ind-comment">Like</p>
                        <p class="reply-ind-comment">reply</p>
                        <ul class="list-of-replay-commants">
                            
                            <li>

                            <img src="{{asset('images/core/12938289_1687755138141525_6332429060813916871_n.jpg')}}" />
                            <p class="comment-owner-name">Hosam Magdy</p>
                            <p class="comment-time">3 min</p>
                            <p class="comment-it-self">
                                Nice WorkNice WorkNice WorkNice 
                                WorkNice WorkNice WorkNice WorkNice W
                                orkNice WorkNice WorkNice WorkNice W
                                orkNice WorkNice WorkNice WorkNice WorkNice WorkNice Work
                            </p>
                            <p class="like-ind-comment">Like</p>
                            <p class="reply-ind-comment">reply</p>

                            </li>
                        </ul>
                    </li>
                    
                </ul>
                
                
            </div>
            
        </div>
    </div>
    
    
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
    
    
    <div class="all-friends-users-list">
        
        <ul>
            
            <li>
                
             <img src="{{asset('images/core/12938289_1687755138141525_6332429060813916871_n.jpg')}}" />  
             <p>Ahmed Elkafarwy</p>
             <time>3 min</time>
                
            </li>
            <li>
                
             <img src="{{asset('images/core/12938289_1687755138141525_6332429060813916871_n.jpg')}}" />  
             <p>Ahmed Elkafarwy</p>
             <time>3 min</time>
                
            </li>
            <li>
                
             <img src="{{asset('images/core/12938289_1687755138141525_6332429060813916871_n.jpg')}}" />  
             <p>Ahmed Elkafarwy</p>
             <time>3 min</time>
                
            </li>
            <li>
                
             <img src="{{asset('images/core/12938289_1687755138141525_6332429060813916871_n.jpg')}}" />  
             <p>Ahmed Elkafarwy</p>
             <time>3 min</time>
                
            </li>
            <li>
                
             <img src="{{asset('images/core/12938289_1687755138141525_6332429060813916871_n.jpg')}}" />  
             <p>Ahmed Elkafarwy</p>
             <time>3 min</time>
                
            </li>
            <li>
                
             <img src="{{asset('images/core/12938289_1687755138141525_6332429060813916871_n.jpg')}}" />  
             <p>Ahmed Elkafarwy</p>
             <time>3 min</time>
                
            </li>
            <li>
                
             <img src="{{asset('images/core/12938289_1687755138141525_6332429060813916871_n.jpg')}}" />  
             <p>Ahmed Elkafarwy</p>
             <time>3 min</time>
                
            </li>
            
        </ul>
        
        
    </div>
    
    
</div>
@endsection
