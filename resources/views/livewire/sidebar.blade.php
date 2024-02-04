<div class="drawer lg:drawer-open">
    <input id="my-drawer-2" type="checkbox" class="drawer-toggle" />
    <div class="flex items-center w-full p-4">
        <!-- Page content here -->
        <label for="my-drawer-2"
            class="btn btn-primary drawer-button lg:hidden bg-transparent border-none ml-auto shadow-none">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="black">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16m-7 6h7" />
            </svg>
        </label>
        <b>Dashboard</b>
    </div>
    <div class="drawer-side shadow-2xl">
        <label for="my-drawer-2" aria-label="close sidebar" class="drawer-overlay"></label>
        <ul class="menu p-4 w-80 min-h-full bg-base-200 text-base-content">
            <li><label class="pb-4 pointer-events-none text-xl"><b>Dashboard</b></label></li>
            <li>
                <a>
                    <i class="fas fa-university mr-2"></i>
                    Bank Account
                </a>
            </li>
            <li>
                <a>
                    <i class="fas fa-cogs mr-2"></i>
                    Settings
                </a>
            </li>
            <li>
                <a>
                    <i class="fas fa-sign-out-alt mr-2"></i>
                    Logout
                </a>
            </li>
        </ul>
    </div>
</div>
