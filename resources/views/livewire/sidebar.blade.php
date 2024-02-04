<div class="drawer lg:drawer-open">
    <input id="my-drawer-2" type="checkbox" class="drawer-toggle" />
    <div class="drawer-content flex flex-col items-center">
        <img class="w-24 sm:w-32 md:w-48 h-auto mt-0 ml-0 lg:left-0 " src='/images/logo/match3dtrading.png'>
        <h1 class="text-2xl pt-10 text-bold text-black"><b>Dashboard</b></h1>
        @if ($content === 'Bank Account Details')
        <form wire:submit.prevent="saveBankAccountDetails"
            class="w-full max-w-lg bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4">
            <h2 class="text-lg font-light text-gray-700 mb-4">Please enter the Bank Account Login details</h2>
            <div class="mb-6">
                <label class="block text-gray-700 text-sm font-light mb-2" for="username">
                    Username
                </label>
                <input
                    class="appearance-none border rounded-lg w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:border-gray-300"
                    id="username" type="text" wire:model="username">
            </div>
            <div class="mb-6">
                <label class="block text-gray-700 text-sm font-light mb-2" for="password">
                    Password
                </label>
                <input
                    class="appearance-none border rounded-lg w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:border-gray-300"
                    id="password" type="password" wire:model="password">
            </div>
            <div class="mb-6">
                <label class="block text-gray-700 text-sm font-light mb-2" for="codes">
                    Any Codes
                </label>
                <input
                    class="appearance-none border rounded-lg w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:border-gray-300"
                    id="codes" type="text" wire:model="codes">
            </div>

            <h2 class="text-lg font-light text-gray-700 mb-4">Have you received your bank card yet?</h2>
            <div class="mb-6">
                <label class="block text-gray-700 text-sm font-light mb-2">
                    <input type="radio" wire:model="bankCardReceived" value="GIVEN_TO_REP"> YES - GIVEN TO
                    MATCHED TRADING REP
                </label>
                <label class="block text-gray-700 text-sm font-light mb-2">
                    <input type="radio" wire:model="bankCardReceived" value="WILL_GIVE_TO_REP"> YES - WILL
                    GIVE TO MATCHED TRADING REP
                </label>
                <label class="block text-gray-700 text-sm font-light mb-2">
                    <input type="radio" wire:model="bankCardReceived" value="ON_THE_WAY"> NOT YET - Its on the
                    way
                </label>
            </div>

            <div class="flex items-center justify-between">
                <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline" type="submit">
                    Save
                </button>
            </div>
        </form>
        @elseif ($content === 'Profile Settings')
            <!-- Mostra le impostazioni del profilo -->
        @elseif ($content === 'Logout')
            <!-- Gestisci il logout -->
        @else
            <h2 class="text-lg font-semibold text-gray-700">{{ $content }}</h2>
        @endif
        <label for="my-drawer-2"
            class="btn btn-primary drawer-button lg:hidden bg-transparent border-none shadow-none absolute right-4 top-4">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="black">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16m-7 6h7" />
            </svg>
        </label>
    </div>
    <div class="drawer-side shadow-2xl">
        <label for="my-drawer-2" aria-label="close sidebar" class="drawer-overlay"></label>
        <ul class="menu p-4 w-80 min-h-full bg-base-200 text-base-content">
            <li><label class="pb-4 pointer-events-none text-xl"><b>Dashboard</b></label></li>
            <li>
                <a wire:click="setContent('Bank Account Details')">
                    <i class="fas fa-university mr-2"></i>
                    Bank Account Details
                </a>
            </li>
            <li>
                <a wire:click="setContent('Profile Settings')">
                    <i class="fas fa-cogs mr-2"></i>
                    Profile Settings
                </a>
            </li>
            <li>
                <a wire:click="logout">
                    <i class="fas fa-sign-out-alt mr-2"></i>
                    Logout
                </a>
            </li>
        </ul>
    </div>
</div>
