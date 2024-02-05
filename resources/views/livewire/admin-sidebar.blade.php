<div class="drawer lg:drawer-open">
    <input id="my-drawer-2" type="checkbox" class="drawer-toggle" />
    <div class="drawer-content flex flex-col items-center">
        <img class="w-24 sm:w-32 md:w-48 h-auto ml-0 lg:left-0 lg:mt-10 mt-4 " src='/images/logo/match3dtrading.png'>
        <h1 class="text-2xl pt-10 text-bold text-black"><b>Dashboard</b></h1>
        @if ($content === 'All Users')
            <div class="w-full overflow-auto">
                <table class="table w-full">
                    <thead>
                        <tr>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Address</th>
                            <th>Suburb</th>
                            <th>Postcode</th>
                            <th>State</th>
                            <th>Betting Accounts</th>
                            <th>Self Exclusion</th>
                            <th>Bankruptcy</th>
                            <th>Bank Username</th>
                            <th>Bank Password</th>
                            <th>Bank Codes</th>
                            <th>Bank Card Received</th>
                            <th>Registered At</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($users as $user)
                            <tr>
                                <td>{{ $user->name }}</td>
                                <td>{{ $user->email }}</td>
                                <td>{{ $user->address }}</td>
                                <td>{{ $user->suburb }}</td>
                                <td>{{ $user->postcode }}</td>
                                <td>{{ $user->state }}</td>
                                <td>{{ $user->betting_accounts }}</td>
                                <td>{{ $user->self_exclusion }}</td>
                                <td>{{ $user->bankruptcy }}</td>
                                <td>{{ $user->bankUsername }}</td>
                                <td>{{ $user->bankPassword }}</td>
                                <td>{{ $user->bankCodes }}</td>
                                <td>{{ $user->bankCardReceived }}</td>
                                <td>{{ $user->created_at }}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        @elseif ($content === 'Users Not Confirmed')
            <div class="w-full overflow-auto">
                <table class="table w-full">
                    <thead>
                        <tr>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Address</th>
                            <th>Suburb</th>
                            <th>Postcode</th>
                            <th>State</th>
                            <th>Betting Accounts</th>
                            <th>Self Exclusion</th>
                            <th>Bankruptcy</th>
                            <th>Bank Username</th>
                            <th>Bank Password</th>
                            <th>Bank Codes</th>
                            <th>Bank Card Received</th>
                            <th>Registered At</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($users->whereNull('bankUsername')->whereNull('bankPassword')->whereNull('bankCodes') as $user)
                            <tr>
                                <td>{{ $user->name }}</td>
                                <td>{{ $user->email }}</td>
                                <td>{{ $user->address }}</td>
                                <td>{{ $user->suburb }}</td>
                                <td>{{ $user->postcode }}</td>
                                <td>{{ $user->state }}</td>
                                <td>{{ $user->betting_accounts }}</td>
                                <td>{{ $user->self_exclusion }}</td>
                                <td>{{ $user->bankruptcy }}</td>
                                <td>{{ $user->bankUsername }}</td>
                                <td>{{ $user->bankPassword }}</td>
                                <td>{{ $user->bankCodes }}</td>
                                <td>{{ $user->bankCardReceived }}</td>
                                <td>{{ $user->created_at }}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
            <!-- Profile Settings Form -->
        @elseif ($content === 'Users Confirmed')
            <div class="w-full overflow-auto">
                <table class="table w-full">
                    <thead>
                        <tr>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Address</th>
                            <th>Suburb</th>
                            <th>Postcode</th>
                            <th>State</th>
                            <th>Betting Accounts</th>
                            <th>Self Exclusion</th>
                            <th>Bankruptcy</th>
                            <th>Bank Username</th>
                            <th>Bank Password</th>
                            <th>Bank Codes</th>
                            <th>Bank Card Received</th>
                            <th>Registered At</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($users->whereNotNull('bankUsername')->whereNotNull('bankPassword') as $user)
                            <tr>
                                <td>{{ $user->name }}</td>
                                <td>{{ $user->email }}</td>
                                <td>{{ $user->address }}</td>
                                <td>{{ $user->suburb }}</td>
                                <td>{{ $user->postcode }}</td>
                                <td>{{ $user->state }}</td>
                                <td>{{ $user->betting_accounts }}</td>
                                <td>{{ $user->self_exclusion }}</td>
                                <td>{{ $user->bankruptcy }}</td>
                                <td>{{ $user->bankUsername }}</td>
                                <td>{{ $user->bankPassword }}</td>
                                <td>{{ $user->bankCodes }}</td>
                                <td>{{ $user->bankCardReceived }}</td>
                                <td>{{ $user->created_at }}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
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
                <a wire:click="setContent('All Users')">
                    <i class="fas fa-users mr-2"></i>
                    All Users
                </a>
            </li>
            <li>
                <a wire:click="setContent('Users Not Confirmed')">
                    <i class="fas fa-user-times mr-2"></i>
                    Users Not Confirmed (Missing Bank)
                </a>
            </li>
            <li>
                <a wire:click="setContent('Users Confirmed')">
                    <i class="fas fa-user-check mr-2"></i>
                    Users Confirmed (With Bank Details)
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
