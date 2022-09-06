<header class="site-header">
    <div class="container">
      <div class="site-header-row">
        <div class="header-bar">
          <a href="javascript:;"><i class="fas fa-bars"></i></a>
        </div>
        <div class="header-logo">
          <a class="header-logo-image" href="{{ route('home') }}">
            <img src="{{asset('assets/images/logo.png')}}" alt="logo" />
          </a>
        </div>
        <div class="header-navbar">
          <nav>
            <ul>
              <li><a href="{{route('home')}}">Home</a></li>
              <li><a href="{{route('about')}}">About</a></li>
              <li><a href="{{route('course')}}">Course</a></li>
              <li><a href="{{route('gallery')}}">Gallery</a></li>

            </ul>
          </nav>
        </div>
        <div class="header-tool">
          <ul>
            <li class="header-search">
              <a href="#"><i class="fas fa-search"></i></a>
            </li>
            <li class="header-card">
              <a href="{{route('shoppingcart')}}"><i class="fas fa-shopping-basket"></i></a>

            </li>
            @if (Route::has('login'))
            
            @auth
            <li class="header-user" id="drop-down">
              <a href="{{ url('/product') }}"><i class="fas fa-user"></i></a>
            </li>
            @else
            <li class="header-user" id="drop-down">
            <a href="{{ route('login') }}"><i class="fas fa-user"></i></a>
          </li>

            @endauth
            @endif

          </ul>
        </div>
      </div>

    </div>
  </header>