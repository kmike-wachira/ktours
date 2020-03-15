    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark fixed-top" style="background-color:#232F60;">
        <div class="container">
          <!-- Brand -->
          <a class="navbar-brand waves-effect p-4" href="/">
            <strong class="white-text">KTOURS</strong>
          </a>
  
          <!-- Collapse -->
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
  
          <!-- Links -->
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
  
            <!-- Left -->
            <ul class="navbar-nav mr-auto">
              {{-- <li class="nav-item">
                <a class="nav-link waves-effect" href="/events" >Events</a>
              </li> --}}
              <li class="nav-item">
                <a class="nav-link waves-effect" href="/about">About us</a>
              </li>
              <li class="nav-item">
                <a class="nav-link waves-effect" href="/hotels">Restaurants</a>
              </li>
              <li class="nav-item">
                <a class="nav-link waves-effect" href="/contact">Contact us</a>
              </li>
            </ul>
  
            <!-- Right -->
            <ul class="navbar-nav nav-flex-icons">
              @guest
              <li class="nav-item">
                <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
             </li>
                @if (Route::has('register'))
                <li class="nav-item">
                  <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                </li>
                @endif
                @else
                <li class="nav-item dropdown">
                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                 {{ Auth::user()->name }} <span class="caret"></span>
                  </a>

                      <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="{{ route('logout') }}"
                              onclick="event.preventDefault();
                                document.getElementById('logout-form').submit();">
                                  {{ __('Logout') }}
                            </a>

                          <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            @csrf
                          </form>
                        </div>
                  </li>
                        @endguest
            </ul>
          </div>
        </div>
      </nav>
      <!-- Navbar -->