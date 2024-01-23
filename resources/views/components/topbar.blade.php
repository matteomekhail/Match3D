<div class="bg-neutral py-1.5 text-center text-xs text-neutral-content md:text-sm">
  <span>
    Revamp Your Control: Code
    <span class="font-semibold text-warning">DAISYUI</span>
    for a 20% SaaS discount 🚀
  </span>
</div>

<div
  id="navbar-wrapper"
  class="sticky top-0 z-10 border-b bg-base-100 lg:bg-opacity-95 lg:backdrop-blur-sm"
  x-data="{ atTop: false }"
  :class="{ 'border-base-content/10': atTop, 'border-transparent': !atTop}"
  @scroll.window="atTop = (window.pageYOffset < 30) ? false: true">
  <div class="container">
    <nav class="navbar px-0">
      <div class="navbar-start gap-2">
        <div class="flex-none lg:hidden">
          <label for="my-drawer" aria-label="open sidebar" class="btn btn-square btn-ghost">
            <i class="icon-menu inline-block text-xl"></i>
          </label>
        </div>

        <!-- Navbar Brand logo -->
        <a href="#" class="text-xl font-bold tracking-tighter">SaaS Landing</a>
      </div>

      <div class="navbar-center hidden lg:flex">
        <ul class="menu menu-horizontal menu-sm gap-2 px-1">
          <li class="font-medium"><a href="#home">Home</a></li>
          <li class="font-medium"><a href="#features">Features</a></li>
          <li class="font-medium"><a href="#integrations">Integrations</a></li>
          <li class="font-medium"><a href="#pricing">Pricing</a></li>
          <li class="font-medium"><a href="#faq">FAQ</a></li>
        </ul>
      </div>

      <div class="navbar-end gap-3">
        <a class="btn btn-ghost btn-sm">Register</a>
        <a class="btn btn-primary btn-sm">Login</a>
      </div>
    </nav>

    <!-- sm screen menu (drawer) -->
    <div class="drawer">
      <input id="my-drawer" type="checkbox" class="drawer-toggle" />
      <div class="drawer-side">
        <label for="my-drawer" aria-label="close sidebar" class="drawer-overlay"></label>

        <ul class="menu min-h-full w-80 gap-2 bg-base-100 p-4 text-base-content">
          <!-- Navbar Brand logo -->
          <li class="font-medium">
            <a href="index.html" class="text-xl font-bold">SaaS Landing</a>
          </li>

          <li class="font-medium"><a href="#home">Home</a></li>
          <li class="font-medium"><a href="#features">Features</a></li>
          <li class="font-medium"><a href="#integrations">Integrations</a></li>
          <li class="font-medium"><a href="#pricing">Pricing</a></li>
          <li class="font-medium"><a href="#faq">FAQ</a></li>
        </ul>
      </div>
    </div>
  </div>
</div>
