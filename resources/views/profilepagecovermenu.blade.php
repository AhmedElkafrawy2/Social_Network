    <div class="cover-image">
        
        <img src="{{ asset('images/core/2.jpg') }}" />
        <p>Ahmed Ekafrawy</p>
        <button>Update Info</button>
        
    </div>
    <div class="profile-page-nav-bar">
        
        <nav class="navbar profile-page-nav-content  navbar-default navbar-static-top">
            <div class="container nav-profile-container">
                <div class="navbar-header mynavbar-header">
                    <!-- Branding Image -->
                    <a class="navbar-brand profile-iamge" href="#"> 
                    
                        <img class="profile-picture" src="{{ asset('images/core/12938289_1687755138141525_6332429060813916871_n.jpg') }}" />
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