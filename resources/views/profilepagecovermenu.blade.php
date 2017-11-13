    <div class="profile-page-opacity"></div>
    <div class="cover-image">
        
        <img class="cover-image" src="{{ $cover }}" />
        @if($isauth == 1)
        <span class="edit-cover-page"><i class="fa fa-pencil" aria-hidden="true"></i>change cover img</span>
        @endif
        <p>
         
         @if($isauth == 1)
            {{ Auth::user()->firstname . " " . Auth::user()->lastname }}
         @else
            {{ $username }}
         @endif
        </p>
        
        @if($isauth == 1)
        <button class="update-profile-information">Update Info</button>
        @else
            @if($isfriend == 0)
                <button class="Add-Friend">Add Friend</button>
            @endif
            @if($isfriend == 1)
                <button class="cancle-friend-request">Cancle friend Request</button>
            @endif
            @if($isfriend == 2)
                <button class="accept-Friend-request">Accept Friend Request</button>
            @endif
            
        @endif
        
    </div>
    <div class="profile-page-nav-bar">
        <div class="edit-profie-img-container">
            <div class="edit-profile-content">
                
                <div class="edit-profile-page-header">
                    
                    <p>Update Image</p>
           
                    <i class="fa fa-times" aria-hidden="true"></i>
  
                </div>
                <div class="edit-pofile-page-body">
                    <ul>
                        <li class="first-li">Upload Photo</li>
                            <div class="upload_image_div">
                                <form method="post" action="/profile/upload" class="upload_image_form">
                                    {{ csrf_field() }}
                                    <input type="file" name="uploadprofileimage2" class="uploadprofileimage2" />
                                </form>
                            </div>
                       
                        <li class="secound-li">Edit Your Image</li> 
                       
                    </ul>
                    
                </div>
                <div class="edit-profile-suggested-images">    
                    <p>Suggested images</p>
                    <ul>  
                        <li class="first-li">
                             <img src="{{ asset('images/core/12938289_1687755138141525_6332429060813916871_n.jpg') }}" />
                        </li>
                        <li class="first-li">
                             <img src="{{ asset('images/core/12938289_1687755138141525_6332429060813916871_n.jpg') }}" />
                        </li>
                        <li class="first-li">
                             <img src="{{ asset('images/core/12938289_1687755138141525_6332429060813916871_n.jpg') }}" />
                        </li>
                        <li class="first-li">
                             <img src="{{ asset('images/core/12938289_1687755138141525_6332429060813916871_n.jpg') }}" />
                        </li>
                         
                    </ul>
                </div>
                
            </div>
  
        </div>
        <div class="display_choosed_image">
                
            <div class="image_content_display">
                    
            </div>
            <div class="edit_image_save_cancle">
                <form class="crop_image_form" action="/profile/cropimage" method="post">
                    {{ csrf_field() }}
                    <button class="edit_image_save class_edit_image btn btn-primary">Save</button>
                </form>
                <button class="edit_image_cancle btn btn-default">Cancle</button>
            </div>
                
        </div>
        <nav class="navbar profile-page-nav-content  navbar-default navbar-static-top">
            <div class="container nav-profile-container">
                <div class="navbar-header mynavbar-header">
                    <!-- Branding Image -->
                    <a class="navbar-brand profile-iamge" href="#"> 
                        @if($isauth == 1)
                        <span class="change-profile-image">Change Picture</span>
                        @endif
                        <img class="profile-picture" src="{{ $profile }}" />
                    </a>
                    <a class="navbar-brand" href="#">
                       TimeLine
                    </a>
                    <a class="navbar-brand" href="{{ url("/") . "/" . $username . "/friends" }}">
                       Friends 
                    </a>
                    <a class="navbar-brand" href="{{ url("/") . "/" .  $username . "/pages" }}">
                        Pages
                    </a>
                    <a class="navbar-brand" href="{{ url("/") . "/" .  $username . "/groups" }}">
                       Groups
                    </a>
                    <a class="navbar-brand" href="{{ url("/") . "/" .  $username . "/events" }}">
                        Events
                    </a>
                </div>

            </div>
        </nav>
    </div>
    
    <!--  edit profile information Modal -->
  <div class="update_info_modal modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header update_modal_header">
          <button type="button" class="close">&times;</button>
          <h4>Update Your Information</h4>
          
        </div>
        <div class="modal-body">
      
            <div class="form-group">
                <i class="fa fa-graduation-cap" aria-hidden="true"></i>
                <input type="text" class="form-control education-edit-input" 
                       name="education-edit" placeholder="Education" value="{{ Auth::user()->education }}" />
            </div>
            
          
            <div class="form-group">
                <i class="fa fa-birthday-cake" aria-hidden="true"></i>
                <input type="text" class="form-control data-of-birth-input-update"
                       name="birth-edit-input" placeholder="BirthDay" value="{{ Auth::user()->birthday  }}" />
            </div>
         
            <div class="form-group">
                <i class="fa fa-briefcase" aria-hidden="true"></i>
                <input type="text" class="form-control work-input-update" 
                       name="work-edit-input" placeholder="Work" value="{{ Auth::user()->work }}"/>
            </div>
            
            <div class="form-group">
                <i class="fa fa-male" aria-hidden="true"></i>
                <input type="text" class="form-control gender-input-update" 
                       name="gender-edit-input" placeholder="Gender" value="{{ Auth::user()->gender }}" />
            </div>
            
            
            <div class="form-group">
                <i class="fa fa-heart" aria-hidden="true"></i>
                <input type="text" class="form-control single-input-update" 
                       name="single-edit-input" placeholder="Social Status" value="{{ Auth::user()->socialstatus }}"/>
            </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn-update-close btn btn-default" data-dismiss="modal">Close</button>
          <button type="button" class="btn-update-save btn btn-primary">Save</button>
        </div>
      </div>
      
    </div>
  </div>