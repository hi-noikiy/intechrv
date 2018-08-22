<nav class="navbar fixed-top navbar-expand-lg navbar-light navbar-laravel">
    <div class="container">
        <a class="navbar-brand" href="{{ url('/') }}">
            <img src="{{ asset('/img/logos/inTechRV-Logo.png') }}" srcset="{{ asset('/img/logos/inTechRV-Logo.png') }} 1x, {{ asset('/img/logos/inTechRV-Logo@2x.png') }} 2x" alt="inTechRV Logo" width="128" height="40" />
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <!-- Left Side Of Navbar -->
            <ul class="navbar-nav mr-auto">
                <li class="nav-item dropdown">
                    <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                        Models <span class="caret"></span>
                    </a>
                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="/flyer/chase">
                            {{ __('Chase') }}
                        </a>
                        <a class="dropdown-item" href="/flyer/pursue">
                            {{ __('Pursue') }}
                        </a>
                        <a class="dropdown-item" href="/flyer/explore">
                            {{ __('Explore') }}
                        </a>
                        <a class="dropdown-item" href="/luna/luna-lite">
                            {{ __('Luna Lite') }}
                        </a>
                        <a class="dropdown-item" href="/luna/luna-rover">
                            {{ __('Luna Rover') }}
                        </a>
                        <a class="dropdown-item" href="/luna/luna">
                            {{ __('Luna') }}
                        </a>
                    </div>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="">{{ __('Service & Warranty') }}</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="">{{ __('Media') }}</a>
                </li>
                <li class="nav-item dropdown">
                    <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                        About Us <span class="caret"></span>
                    </a>
                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="">
                            {{ __('About') }}
                        </a>
                        <a class="dropdown-item" href="">
                            {{ __('Why Buy?') }}
                        </a>
                    </div>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="">{{ __('Contact Us') }}</a>
                </li>
                <form method="get" onSubmit="return weblocator(this);" class="form-inline">
                    <input name="acct" type="hidden" value="9076" class="form-control" />
                    <div class="input-group">
                        <input name="zip" type="text" placeholder="U.S. Zip Code" size="15" maxlength="5" class="form-control" />
                        <div class="input-group-append">
                            <input type="submit" class="btn btn-outline-primary" value="Find A Dealer" />
                        </div>
                    </div>
                </form>
            </ul>

            <!-- Right Side Of Navbar -->
            <ul class="navbar-nav ml-auto">
                <!-- Authentication Links -->
                @guest
                    <li class="nav-item">
                        <a class="nav-link" href="https://shop.intechtrailers.com" target="_blank">
                            <img src="{{ asset('/img/logos/marketplace-logo.png') }}" srcset="{{ asset('/img/logos/marketplace-logo.png') }} 1x, {{ asset('/img/logos/marketplace-logo@2x.png') }} 2x" alt="inTechRV Logo" width="70" height="30">
                        </a>
                    </li>
                    <!-- <li class="nav-item">
                        <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                    </li> -->
                    <!-- <li class="nav-item">
                        <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                    </li> -->
                @else
                    <li class="nav-item dropdown">
                        <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                            {{ Auth::user()->first_name }} {{ Auth::user()->last_name }} <span class="caret"></span>
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
