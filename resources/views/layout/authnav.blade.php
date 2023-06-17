    @if (Route::has('login'))
        @auth
            @if (Auth::user()->Role === 'admin')
                <a class="nav-link d-flex justify-content-center" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    @auth
                        <div class="userinformation">
                            <img src="{{ asset('storage/userimage/' . Auth::user()->User_Image) }}" class="rounded-circle"
                                height="30px" width="40px" alt="Auth Image">
                            <div class="usernameinfo">
                                <span>welcom</span>
                                <div class="dropdownlist">
                                    <span>{{ strtoupper(Auth::user()->name) }}</span>
                                    <i class="fa-solid fa-angle-down"></i>
                                </div>
                            </div>
                        </div>
                    @endauth
                </a>
                <ul class="dropdown-menu dropdown-menu-end mt-3">
                    <li><a class="dropdown-item" href="/index">Dashboard</a></li>
                    <li>
                        <hr class="dropdown-divider">
                    </li>
                    <li><a class="dropdown-item" href="logout">Log Out</a></li>
                </ul>
            @else
                <a class="nav-link" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    @auth
                        <div class="userinformation">
                            <img src="{{ asset('storage/userimage/' . Auth::user()->User_Image) }}" class="rounded-circle me-2"
                                height="30px" width="40px" alt="Auth Image">
                            <div class="usernameinfo">
                                <span>welcom</span>
                                <div class="dropdownlist">
                                    <span>{{ strtoupper(Auth::user()->name) }}</span>
                                    <i class="fa-solid fa-angle-down"></i>
                                </div>
                            </div>
                        </div>
                    @endauth
                </a>
                <ul class="dropdown-menu dropdown-menu-end mt-3">
                    <li><a class="dropdown-item" href="{{ URL::asset('profile') }}">Profile</a></li>
                    <li>
                        <hr class="dropdown-divider">
                    </li>
                    <li><a class="dropdown-item" href="{{ URL::asset('logout') }}">Log Out</a></li>
                </ul>
            @endif
        @else
            <li class="dropdown dropdown-center">
                <a class="nav-link" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    <div class="userinformation">
                        <img src="images/user.png" class="rounded-circle me-2" height="30px" width="40px"
                            alt="Auth Image">
                        <div class="usernameinfo">
                            <span>welcom</span>
                            <div class="dropdownlist">
                                <span>UserNmaser</span>
                                <i class="fa-solid fa-angle-down"></i>
                            </div>
                        </div>
                    </div>
                </a>
                <ul class="dropdown-menu dropdown-menu-end mt-3">
                    <li><a class="dropdown-item pb-3" href="/login" title="Login">Login</a></li>
                    <li><a class="dropdown-item pb-3" href="/register" title="register">Register</a></li>
                </ul>
            </li>
        @endif
        @endif
        </ul>
