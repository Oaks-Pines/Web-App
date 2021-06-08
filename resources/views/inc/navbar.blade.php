<nav class="navbar navbar-default" style="background-color:#F4BC16;margin:0px;">
        <div class="container-fluid">
          <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>                        
            </button>
            <a class="navbar-brand" href="/" ><b style="font-size:30px;color:#5D9141;font-family:'Sofia'">Oaks & Pines</b></a>
          </div>
          <div class="collapse navbar-collapse" id="myNavbar" style="font-size:16px;">
                <ul class="nav navbar-nav navbar-left" >
                        <li ><a href="/" style="color:#fff"><b>Home</b></a></li>
              <li><a href="/services" style="color:#fff"><b>Services</b></a></li>
              <li><a href="/projects" style="color:#fff"><b>Projects</b></a></li>
              <li><a href="/about" style="color:#fff"><b>About</b></a></li>
              <li><a href="http://oaksandpines.com/#contact" style="color:#fff"><b>Contact</b></a></li>
              <li><a href="/posts" style="color:#fff"><b>Blog</b></a></li>
                    </ul>

            <!-- Right Side Of Navbar -->
            <ul class="nav navbar-nav navbar-right">
                    <!-- Authentication Links -->
                    @guest
                        <li class="nav-item">
                            {{-- <a class="nav-link" href="{{ route('login') }}" style="color:#fff"><span class="glyphicon glyphicon-log-in"></span><b>  {{ __('Login') }}</b></a> --}}
                        </li>
                        @if (Route::has('register'))
                            <li class="nav-item">
                                {{-- <a class="nav-link" href="{{ route('register') }}" style="color:#fff"><span class="glyphicon glyphicon-user"></span><b>  {{ __('Register') }}</b></a> --}}
                            </li>
                        @endif
                    @else
                        <li class="nav-item dropdown">
                            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                {{ Auth::user()->name }} <span class="caret"></span>
                            </a>

                            <ul class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                <li><a class="dropdown-item" href="/dashboard">Dashboard</a></li>
                               <li> <a class="dropdown-item" href="{{ route('logout') }}"
                                   onclick="event.preventDefault();
                                                 document.getElementById('logout-form').submit();">
                                    {{ __('Logout') }}
                                </a></li>

                                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                    @csrf
                                </form>
                              </ul>
                        </li>
                    @endguest
                </ul>
          </div>
        </div>
      </nav>

      