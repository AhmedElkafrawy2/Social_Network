        <nav class="navbar main-nav-bar navbar-default navbar-static-top">
            <div class="container">
                <div class="navbar-header mynavbar-header">
                    <!-- Branding Image -->
                    <a class="navbar-brand" href="{{ url('/') }}">
                        <img src=" {{ asset('images/core/logo.png') }}  " /> Social_Network
                    </a>
                </div>
                <div class="homepage-search">
                
                    <div class="input-group mb-2 mr-sm-2 mb-sm-0">
                    
                     <input type="text" class="form-control" id="inlineFormInputGroupUsername2" placeholder="Search ......">
                     <div class="input-group-addon">@</div>
                  
                    </div>

                </div>
                <div class="collapse navbar-collapse" id="app-navbar-collapse">
                   
                    <!-- Right Side Of Navbar -->
                    <ul class="nav navbar-nav navbar-right my-original-data">
                        <!-- Authentication Links -->
                        
                        <li>
                            <a href="#" class="go-to-profile-page"> 
                                <img src=" {{ asset('images/core/12938289_1687755138141525_6332429060813916871_n.jpg') }} " style="width:30px;height:30px;" />
                                <span>Ahmed</span>               
                            </a>
                            <a href="" class="go-to-homepage">
                                <span>Home</span>
                            </a>
                            <a href="">
                                <span>Find Friends</span>
                            </a>
                            <a href="">
                                <span><i class="fa fa-bell" aria-hidden="true"></i></span>
                            </a>
                            <a href="">
                                <span><i class="fa fa-commenting" aria-hidden="true"></i></span>
                            </a>
                            <a href="">
                                <span><i class="fa fa-user-plus" aria-hidden="true"></i></span>
                            </a>

  
                        </li>
                        
                            <li class="dropdown navbar-more">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                    {{ Auth::user()->firstname }} <span class="caret"></span>
                                </a>

                                <ul class="dropdown-menu" role="menu">
                                    <li>
                                        <a href="{{ route('logout') }}"
                                            onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                            Logout
                                        </a>

                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                        </form>
                                    </li>
                                </ul>
                            </li>
                        
                    </ul>
                </div>
            </div>
        </nav>