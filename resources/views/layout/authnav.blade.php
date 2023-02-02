    @if (Route::has('login'))
        @auth
            @if (Auth::user()->Role === 'admin')
                <li class="dropdown dropdown-center">
                    <a class="nav-link" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        @auth
                            <img src="{{ asset('storage/userimage/'.Auth::user()->User_Image) }}" class="rounded-circle" height="30px" width="30px" alt="Auth Image"><i class="fa-solid fa-angle-down"></i>
                        @endauth
                    </a>
                    <ul class="dropdown-menu dropdown-menu-end">
                        <li><a class="dropdown-item" href="/index">Dashboard</a></li>
                        <hr class="dropdown-divider">
                        <li><a class="dropdown-item" href="logout">Log Out</a></li>
                    </ul>
                </li>
            @else
                <li class="dropdown dropdown-center">
                    <a class="nav-link" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        @auth
                            <img src="{{ asset('storage/userimage/'.Auth::user()->User_Image) }}" class="rounded-circle" height="30px" width="30px" alt="Auth Image"><i class="fa-solid fa-angle-down"></i>
                        @endauth
                    </a>
                    <ul class="dropdown-menu dropdown-menu-end">
                        <li><a class="dropdown-item" href="{{URL::asset('profile')}}">Profile</a></li>
                        <li><hr class="dropdown-divider"></li>
                        <li><a class="dropdown-item" href="{{URL::asset('logout')}}">Log Out</a></li>
                    </ul>
                </li>
            @endif
        @else
        <li class="nav-item">
            <a class="nav-link pb-3" href="/login" title="Login">Login</a>
        </li>
        <li class="nav-item  me-2">
            <a class="nav-link pb-3" href="/register" title="register">Register</a>
        </li>
        @endif
    @endif
</ul>

