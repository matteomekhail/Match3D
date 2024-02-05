<div class="drawer lg:drawer-open">
    <input id="my-drawer-2" type="checkbox" class="drawer-toggle" />
    <div class="drawer-content flex flex-col items-center">
        <img class="w-24 sm:w-32 md:w-48 h-auto ml-0 lg:left-0 lg:mt-10 mt-4 " src='/images/logo/match3dtrading.png'>
        <h1 class="text-2xl pt-10 text-bold text-black"><b>Dashboard</b></h1>
        @if ($content === 'Bank Account Details')
        <form wire:submit.prevent="saveBankAccountDetails" class="space-y-6">
            <h2 class="text-lg font-light text-gray-700 mb-4">Please enter the Bank Account Login details</h2>
            <div class="grid grid-cols-1 gap-6">
                <div class="form-group">
                    <label for="bankUsername" class="block text-sm font-medium text-gray-700">Bank Username</label>
                    <input type="text" class="form-input mt-1 block w-full px-6 py-4 text-lg rounded-lg shadow-sm border-gray-300 focus:border-indigo-500 focus:ring-2 focus:ring-indigo-500" id="bankUsername" wire:model="bankUsername">
                    @error('bankUsername')
                        <span class="text-red-500 text-xs italic">{{ $message }}</span>
                    @enderror
                </div>

                <div class="form-group">
                    <label class="block text-sm font-medium text-gray-700" for="password">Password</label>
                    <input class="form-input mt-1 block w-full px-10 py-3 text-lg rounded-lg shadow-sm border-gray-300 focus:border-indigo-500 focus:ring-2 focus:ring-indigo-500" id="password" type="password" wire:model="bankPassword">
                    @error('bankPassword')
                        <span class="text-red-500 text-xs italic">{{ $message }}</span>
                    @enderror
                </div>
            </div>

            <div class="form-group">
                <label class="block text-sm font-medium text-gray-700" for="codes">Any Codes</label>
                <input class="form-input mt-1 block w-full px-4 py-3 rounded-lg shadow-sm border-gray-300 focus:border-indigo-500 focus:ring-2 focus:ring-indigo-500" id="codes" type="text" wire:model="bankCodes">
                @error('bankCodes')
                    <span class="text-red-500 text-xs italic">{{ $message }}</span>
                @enderror
            </div>

            <h2 class="text-lg font-light text-gray-700 mb-4">Have you received your bank card yet?</h2>
            <div class="mb-6">
                <label class="block text-gray-700 text-sm font-light mb-2">
                    <input type="radio" wire:model="bankCardReceived" name="option" value="GIVEN_TO_REP">
                    YES - given to matched trading rep
                </label>
                <label class="block text-gray-700 text-sm font-light mb-2">
                    <input type="radio" wire:model="bankCardReceived" name="option" value="WILL_GIVE_TO_REP">
                    YES - will give to matched trading rep
                </label>
                <label class="block text-gray-700 text-sm font-light mb-2">
                    <input type="radio" wire:model="bankCardReceived" name="option" value="ON_THE_WAY"> NOT YET -
                    Its on the way
                </label>
                @error('bankCardReceived')
                    <span class="text-red-500 text-xs italic">{{ $message }}</span>
                @enderror
            </div>

            <div class="flex items-center justify-center">
                <button wire:click="saveBankAccountDetails" class="btn btn-primary bg-gradient-to-r from-blue-500 to-indigo-500 text-white font-bold py-3 px-6 rounded-lg" type="submit">
                    Save The Bank Details
                </button>
            </div>
        </form>
        @elseif ($content === 'Profile Settings')
            <!-- Profile Settings Form -->
            <form wire:submit.prevent="updateProfile" class="space-y-6">
                <div class="grid grid-cols-1 lg:grid-cols-2 gap-6">
                    <div class="form-group">
                        <label for="name" class="block text-sm font-medium text-gray-700">Name</label>
                        <input type="text"
                            class="form-input mt-1 block w-full px-4 py-3 rounded-lg shadow-sm border-gray-300 focus:border-indigo-500 focus:ring-2 focus:ring-indigo-500"
                            id="name" wire:model="name">
                    </div>

                    <div class="form-group col-span-2">
                        <label for="email" class="block text-sm font-medium text-gray-700">Email</label>
                        <input type="email"
                            class="form-input mt-1 block w-full px-4 py-3 rounded-lg shadow-sm border-gray-300 focus:border-indigo-500 focus:ring-2 focus:ring-indigo-500"
                            id="email" wire:model="email">
                    </div>
                </div>

                <div class="grid grid-cols-1 lg:grid-cols-4 gap-6">
                    <div class="form-group">
                        <label for="address" class="block text-sm font-medium text-gray-700">Address</label>
                        <input type="text"
                            class="form-input mt-1 block w-full px-4 py-3 rounded-lg shadow-sm border-gray-300 focus:border-indigo-500 focus:ring-2 focus:ring-indigo-500"
                            id="address" wire:model="address">
                    </div>

                    <div class="form-group">
                        <label for="suburb" class="block text-sm font-medium text-gray-700">Suburb</label>
                        <input type="text"
                            class="form-input mt-1 block w-full px-4 py-3 rounded-lg shadow-sm border-gray-300 focus:border-indigo-500 focus:ring-2 focus:ring-indigo-500"
                            id="suburb" wire:model="suburb">
                    </div>

                    <div class="form-group">
                        <label for="postcode" class="block text-sm font-medium text-gray-700">Postcode</label>
                        <input type="text"
                            class="form-input mt-1 block w-full px-4 py-3 rounded-lg shadow-sm border-gray-300 focus:border-indigo-500 focus:ring-2 focus:ring-indigo-500"
                            id="postcode" wire:model="postcode">
                    </div>

                    <div class="form-group">
                        <label for="state" class="block text-sm font-medium text-gray-700">State</label>
                        <input type="text"
                            class="form-input mt-1 block w-full px-4 py-3 rounded-lg shadow-sm border-gray-300 focus:border-indigo-500 focus:ring-2 focus:ring-indigo-500"
                            id="state" wire:model="state">
                    </div>
                </div>

                <div class="form-group">
                    <label for="password" class="block text-sm font-medium text-gray-700">Password</label>
                    <input type="password"
                        class="form-input mt-1 block w-full px-4 py-3 rounded-lg shadow-sm border-gray-300 focus:border-indigo-500 focus:ring-2 focus:ring-indigo-500"
                        id="password" wire:model="password">
                </div>

                <div class="flex justify-center">
                    <button type="submit" class="btn btn-primary bg-gradient-to-r from-blue-500 to-indigo-500 text-white font-bold py-3 px-4 rounded-lg">
                        Update Profile
                    </button>
                </div>
            </form>
        @elseif ($content === 'Logout')
            <!-- Gestisci il logout -->
        @else
            <h2 class="text-lg font-semibold text-gray-700">{{ $content }}</h2>
        @endif
        <label for="my-drawer-2"
            class="btn btn-primary drawer-button lg:hidden bg-transparent border-none shadow-none absolute right-4 top-4">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24"
                stroke="black">
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
    <script>
        window.addEventListener('alert', param => {
            Swal.fire({
                icon: 'success',
                title: 'Success',
                text: param.detail.message,
                timer: 2000,
                showConfirmButton: false
            });
        });
    </script>
</div>
