

      <nav class="navbar navbar-inverse navbar-static-top">
          <div class="container">
              <div class="navbar-header">

                  <!-- Collapsed Hamburger -->
                  <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse">
                      <span class="sr-only">Toggle Navigation</span>
                      <span class="icon-bar"></span>
                      <span class="icon-bar"></span>
                      <span class="icon-bar"></span>
                  </button>

                  <!-- Branding Image -->
                  @if (!Auth::guest())
                  <a class="navbar-brand" href="{{ url('/posts') }}">
                    <span><i class="fas fa-home"></i></span>  QBank 
                  </a>
                  @endif
              </div>

              <div class="collapse navbar-collapse" id="app-navbar-collapse">
                  <!-- Left Side Of Navbar -->
                  <ul class="nav navbar-nav">
                      &nbsp;
                  </ul>
                    <ul class="nav navbar-nav">
                      {{-- <li><a href="/">Home</a></li>
                      <li><a href="/about">About</a></li>
                      <li><a href="/services">Services</a></li> --}}
                      @if (!Auth::guest())
                        {{-- <li><a href="/posts">Questions</a></li> --}}
                        <li><a href="/dashboard">Dashboard</a></li>
                        
                        
                      @endif
                    </ul>
                    <form class="navbar-form navbar-left" method="GET" action="{{ url('posts.search') }}">
                        <div class="input-group">
                          <input type="text" name="search" class="form-control" id='searchbar' placeholder="Search..." value="{{ old('search') }}">
                          <div class="input-group-btn">
                            <button class="btn btn-default" type="submit">
                              <i class="glyphicon glyphicon-search"></i>
                            </button>
                          </div>
                        </div>
                      </form>
                      
                  <!-- Right Side Of Navbar -->
                  <ul class="nav navbar-nav navbar-right">
                      <!-- Authentication Links -->
                      @if (Auth::guest())
                          {{-- <li><a href="{{ route('login') }}">Login</a></li>
                          <li><a href="{{ route('register') }}">Register</a></li> --}}
                      @else
                          <li class="dropdown">
                              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                    <span><i class="fas fa-user"></i></span> {{ Auth::user()->name }} <span class="caret"></span>
                              </a>

                              <ul class="dropdown-menu" role="menu">
                                
                                  <li>
                                      <a href="{{ route('logout') }}"
                                          onclick="event.preventDefault();
                                                   document.getElementById('logout-form').submit();">
                                          <span><i class="fas fa-sign-out-alt"></i></span> Logout
                                      </a>

                                      <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                          {{ csrf_field() }}
                                      </form>
                                  </li>
                              </ul>
                          </li>
                      @endif
                  </ul>
              </div>
          </div>
      </nav>