
<nav
    class="navbar navbar-expand-lg blur border-radius-lg top-0 z-index-3 shadow position-absolute mt-4 py-2 start-0 end-0 mx-4">
    <div class="container-fluid ps-2 pe-0">
        <a class="navbar-brand font-weight-bolder ms-lg-0 ms-3 d-flex flex-column" href="<?php echo e(route('dashboard')); ?>">
            Material Dashboard 2
            <span>Laravel Livewire</span>
        </a>
        <button class="navbar-toggler shadow-none ms-2" type="button" data-bs-toggle="collapse"
            data-bs-target="#navigation" aria-controls="navigation" aria-expanded="false"
            aria-label="Toggle navigation">
            <span class="navbar-toggler-icon mt-2">
                <span class="navbar-toggler-bar bar1"></span>
                <span class="navbar-toggler-bar bar2"></span>
                <span class="navbar-toggler-bar bar3"></span>
            </span>
        </button>
        <div class="collapse navbar-collapse" id="navigation">
            <ul class="navbar-nav mx-auto">
                <?php if(auth()->guard()->check()): ?>
                <li class="nav-item">
                    <a class="nav-link d-flex align-items-center me-2 active" aria-current="page"
                        href="<?php echo e(route('dashboard')); ?>">
                        <i class="fa fa-chart-pie opacity-6 text-dark me-1"></i>
                        Dashboard
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link me-2" href="<?php echo e(route('profile')); ?>">
                        <i class="fa fa-user opacity-6 text-dark me-1"></i>
                        Profile
                    </a>
                </li>
                <?php endif; ?>
                <li class="nav-item">
                    <a class="nav-link me-2" href="<?php echo e(in_array(request()->route()->getName(), ['register','login', 'password.forgot','reset-password']) ? route('register') : 'static-sign-up'); ?>">
                        <i class="fas fa-user-circle opacity-6 text-dark me-1"></i>
                        Sign Up
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link me-2" href="<?php echo e(in_array(request()->route()->getName(), ['register','login', 'password.forgot','reset-password']) ? route('login') : 'static-sign-in'); ?>">
                        <i class="fas fa-key opacity-6 text-dark me-1"></i>
                        Sign In
                    </a>
                </li>
            </ul>
            <ul class="navbar-nav d-lg-block d-none">
                <li class="nav-item">
                    <a href="https://www.creative-tim.com/product/material-dashboard-laravel-livewire"
                        class="btn btn-sm mb-0 me-1 bg-gradient-dark" target="_blank">Free download</a>
                </li>
            </ul>
        </div>
    </div>
</nav>
<?php /**PATH C:\Users\OCA'S\Downloads\material-dashboard-laravel-livewire-master\resources\views/components/navbars/navs/guest.blade.php ENDPATH**/ ?>