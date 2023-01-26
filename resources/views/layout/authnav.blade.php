<div class="container-fluid">
    <nav class="navbar navbar-expand navbar-dark">
        <ul class="navbar-nav flex-grow-1 d-none d-sm-flex">
            <li class="nav-item">
                <a class="nav-link" href="" ><i class="fa fa-facebook" aria-hidden="true"></i></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="" ><i class="fa fa-twitter" aria-hidden="true"></i></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="" ><i class="fa fa-youtube" aria-hidden="true"></i></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="" ><i class="fa fa-instagram" aria-hidden="true"></i></a>
            </li>
        </ul>
        <ul class="navbar-nav d-lg-flex text-center">
            @if (Route::has('login'))
                @auth
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            <i class="fa fa-user-circle-o fs-3"></i>
                        </a>
                            <ul class="dropdown-menu text-center">
                            <li><a class="dropdown-item" href="#">Profile</a></li>
                            <li><a class="dropdown-item" href="/dashboard">Dashboard</li>
                            <hr class="dropdown-divider">
                            <li><a class="dropdown-item" href="logout">Log Out</a></li>
                        </ul>
                    </li>

                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            <i class="fa fa-user-circle-o fs-3"></i>
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="#">Profile</a></li>
                            <li><hr class="dropdown-divider"></li>
                            <li><a class="dropdown-item" href="logout">Log Out</a></li>
                        </ul>
                    </li>
                    @endif
                    <li class="nav-item">
                        <a class="nav-link" href="login" title="Login">Login</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="register" title="register">Register</a>
                    </li>
                    <li><a class="nav-link" href="logout">Log Out</a></li>
                    <li class="nav-item">
                        <a href="/cart" class="nav-link" title="cart">
                        <i class="fa fa-opencart ms-2"></i>
                        <span id="" class="badge rounded-pill mypimarybg cartelement" alt="Notifications" style="font-size: 0.6rem; margin-left : -10px">2</span>
                        </a>
                    </li>
            @else

            @endif

        </ul>
    </nav>
</div>
