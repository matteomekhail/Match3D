<div id="navbar-wrapper" class="sticky top-0 z-10 border-b bg-base-100 lg:bg-opacity-95 lg:backdrop-blur-sm"
    x-data="{ atTop: false }" :class="{ 'border-base-content/10': atTop, 'border-transparent': !atTop}"
    @scroll.window="atTop = (window.pageYOffset < 30) ? false: true">
    <div class="container flex justify-center">
        <nav class="navbar px-0 flex justify-center items-center">
            <div class="navbar-start gap-2 flex justify-center items-center">
                <!-- Navbar Brand logo -->
                <img class="w-24 md:w-32 lg:w-48 h-auto" src="/images/logo/match3dtrading.png" alt="Match 3D Logo" />
            </div>
        </nav>
    </div>
</div>