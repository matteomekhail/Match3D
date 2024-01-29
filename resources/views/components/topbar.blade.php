<div id="navbar-wrapper" class="sticky top-0 z-10 border-b bg-base-100 lg:bg-opacity-95 lg:backdrop-blur-sm"
    x-data="{ atTop: false }" :class="{ 'border-base-content/10': atTop, 'border-transparent': !atTop}"
    @scroll.window="atTop = (window.pageYOffset < 30) ? false: true">
    <div class="container">
        <nav class="navbar px-0">
            <div class="navbar-start gap-2">

                <!-- Navbar Brand logo -->
                <img class="w-24 md:w-32 lg:w-48 h-auto" src="/images/logo/match3dtrading.png" alt="Match 3D Logo" />
            </div>

            <div class="navbar-end gap-3">
                <a href='/register' class="btn btn-ghost btn-sm">Register</a>
                <a href='/login' class="btn btn-primary btn-sm">Login</a>
            </div>
        </nav>
    </div>
</div>
