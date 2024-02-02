<div>
    <h1 class="text-lg font-bold text-gray-700 leading-tight text-center mt-12 mb-5">Registration Form</h1>
    <form class="p-12 shadow-md rounded-2xl bg-white mx-auto border-solid border-2 border-gray-100 mb-8"
        wire:submit.prevent="handleFormSubmit" id="signUpForm">
        <!-- start step indicators -->
        <div class="form-header flex gap-3 mb-4 text-xs text-center">
            <span class="stepIndicator flex-1 pb-8 relative {{ $currentTab >= 0 ? 'active' : '' }}">Account Setup</span>
            <span class="stepIndicator flex-1 pb-8 relative {{ $currentTab >= 1 ? 'active' : '' }}">Documents
                Setup</span>
            <span
                class="stepIndicator flex-1 pb-8 relative {{ $currentTab === 2 ? 'active finish' : '' }}">Verification</span>
        </div>
        <!-- end step indicators -->

        <!-- Step one -->
        <div class="{{ $currentTab === 0 ? 'block' : 'hidden' }}" class="step">
            <p class="text-md text-gray-700 leading-tight text-center mt-8 mb-5">Create your account</p>
            <div class="mb-6">
                <input type="text" placeholder="Full name" name="fullname" wire:model="fullname"
                    class="w-full px-4 py-3 rounded-md text-gray-700 font-medium border-solid border-2 border-gray-200" />
                @error('fullname')
                    <span class="error text-red-500">{{ $message }}</span>
                @enderror

            </div>
            <div class="mb-6">
                <input type="text" placeholder="Mobile" name="mobile" wire:model="mobile"
                    class="w-full px-4 py-3 rounded-md text-gray-700 font-medium border-solid border-2 border-gray-200" />
                @error('mobile')
                    <span class="error text-red-500">{{ $message }}</span>
                @enderror

            </div>
            <div class="mb-6">
                <input type="email" placeholder="Email Address" name="email" wire:model="email"
                    class="w-full px-4 py-3 rounded-md text-gray-700 font-medium border-solid border-2 border-gray-200" />
                @error('email')
                    <span class="error text-red-500">{{ $message }}</span>
                @enderror

            </div>
            <div class="mb-6">
                <input type="password" placeholder="Password" name="password" wire:model="password"
                    class="w-full px-4 py-3 rounded-md text-gray-700 font-medium border-solid border-2 border-gray-200" />
                @error('password')
                    <span class="error text-red-500">{{ $message }}</span>
                @enderror

            </div>
            <div class="mb-6">
                <input type="password" placeholder="Confirm Password" name="confirm_password"
                    wire:model="confirm_password"
                    class="w-full px-4 py-3 rounded-md text-gray-700 font-medium border-solid border-2 border-gray-200" />
                @error('confirm_password')
                    <span class="error text-red-500">{{ $message }}</span>
                @enderror
            </div>
            <!-- Address field -->
            <div class="mb-6">
                <input type="text" placeholder="Address" name="address" wire:model="address"
                    class="w-full px-4 py-3 rounded-md text-gray-700 font-medium border-solid border-2 border-gray-200" />
                @error('address')
                    <span class="error text-red-500">{{ $message }}</span>
                @enderror
            </div>

            <!-- Suburb field -->
            <div class="mb-6">
                <input type="text" placeholder="Suburb" name="suburb" wire:model="suburb"
                    class="w-full px-4 py-3 rounded-md text-gray-700 font-medium border-solid border-2 border-gray-200" />
                @error('suburb')
                    <span class="error text-red-500">{{ $message }}</span>
                @enderror
            </div>

            <!-- Postcode field -->
            <div class="mb-6">
                <input type="text" placeholder="Postcode" name="postcode" wire:model="postcode"
                    class="w-full px-4 py-3 rounded-md text-gray-700 font-medium border-solid border-2 border-gray-200" />
                @error('postcode')
                    <span class="error text-red-500">{{ $message }}</span>
                @enderror
            </div>
            <!-- State field -->
            <div class="mb-6">
                <select name="state" wire:model="state"
                    class="w-full px-4 py-3 rounded-md text-gray-700 font-medium border-solid border-2 border-gray-200">
                    <option value="">Select a state</option>
                    <option value="NSW">New South Wales</option>
                    <option value="VIC">Victoria</option>
                    <option value="QLD">Queensland</option>
                    <option value="SA">South Australia</option>
                    <option value="WA">Western Australia</option>
                    <option value="TAS">Tasmania</option>
                    <option value="ACT">Australian Capital Territory</option>
                    <option value="NT">Northern Territory</option>
                </select>
                @error('state')
                    <span class="error text-red-500">{{ $message }}</span>
                @enderror
            </div>
            <!-- Betting accounts question -->
<div class="mb-6">
    <p class="mb-2">Do you or have you had any betting accounts in Australia?</p>
    <div>
        <input type="radio" id="betting-yes" name="betting_accounts" value="yes" wire:model="betting_accounts">
        <label for="betting-yes">Yes</label>
    </div>
    <div>
        <input type="radio" id="betting-no" name="betting_accounts" value="no" wire:model="betting_accounts">
        <label for="betting-no">No</label>
    </div>
    <div>
        <input type="radio" id="betting-unsure" name="betting_accounts" value="unsure" wire:model="betting_accounts">
        <label for="betting-unsure">Unsure</label>
    </div>
    @error('betting_accounts')
        <span class="error text-red-500">{{ $message }}</span>
    @enderror
</div>

<!-- Self exclusion question -->
<div class="mb-6">
    <p class="mb-2">Have you self excluded from any bookmakers?</p>
    <div>
        <input type="radio" id="exclusion-yes" name="self_exclusion" value="yes" wire:model="self_exclusion">
        <label for="exclusion-yes">Yes</label>
    </div>
    <div>
        <input type="radio" id="exclusion-no" name="self_exclusion" value="no" wire:model="self_exclusion">
        <label for="exclusion-no">No</label>
    </div>
    <div>
        <input type="radio" id="exclusion-unsure" name="self_exclusion" value="unsure" wire:model="self_exclusion">
        <label for="exclusion-unsure">Unsure</label>
    </div>
    @error('self_exclusion')
        <span class="error text-red-500">{{ $message }}</span>
    @enderror
</div>

<!-- Bankruptcy question -->
<div class="mb-6">
    <p class="mb-2">Are you currently or have ever been bankrupt?</p>
    <div>
        <input type="radio" id="bankruptcy-yes" name="bankruptcy" value="yes" wire:model="bankruptcy">
        <label for="bankruptcy-yes">Yes</label>
    </div>
    <div>
        <input type="radio" id="bankruptcy-no" name="bankruptcy" value="no" wire:model="bankruptcy">
        <label for="bankruptcy-no">No</label>
    </div>
    @error('bankruptcy')
        <span class="error text-red-500">{{ $message }}</span>
    @enderror
</div>
        </div>

        <!-- Step two -->
        <div class="{{ $currentTab === 1 ? 'block' : 'hidden' }}" class="step">
            <div class="bg-green-500 text-white p-6 rounded-lg flex items-center shadow-lg">
                <span class="text-lg">Congratulations {{ $fullname }}! <br> You can continue to step 2 and submit your 100 points ID for verification. </span>
            </div>
            <p class="text-md text-gray-700 leading-tight text-center mt-8 mb-5">Please load your documents</p>

            <div class="mb-6">
                <label
                    class="w-full flex flex-col items-center px-6 py-6 bg-white text-blue rounded-lg shadow-lg tracking-wide border border-blue cursor-pointer hover:bg-blue hover:text-white transition-colors duration-200 ease-in-out">
                    @if ($documentFront)
                        <img src="{{ $documentFront->temporaryUrl() }}" class="w-12 h-12">
                    @else
                        <img src="{{ asset('images/logo/document-scanner-svgrepo-com.svg') }}"
                            class="w-12 h-12 text-blue-500" wire:loading.remove wire:target="documentFront" />
                    @endif
                    <svg wire:loading wire:target="documentFront" fill="none"
                        class="animate-spin -ml-1 mr-3 h-5 w-5 text-blue-500" xmlns="http://www.w3.org/2000/svg"
                        viewBox="0 0 24 24">
                        <circle class="opacity-25" cx="12" cy="12" r="10" stroke="currentColor"
                            stroke-width="4"></circle>
                        <path class="opacity-75" fill="currentColor"
                            d="M4 12a8 8 0 018-8V0C5.373 0 0 5.373 0 12h4zm2 5.291A7.962 7.962 0 014 12H0c0 3.042 1.135 5.824 3 7.938l3-2.647z">
                        </path>
                    </svg>
                    <span class="mt-2 text-base leading-normal text-blue-500">Upload Front of Document</span>
                    <input type='file' class="hidden" wire:model="documentFront" />
                </label>
                @error('documentFront')
                    <span class="error text-red-500">{{ $message }}</span>
                @enderror
            </div>

            <div class="mb-6">
                <label
                    class="w-full flex flex-col items-center px-6 py-6 bg-white text-blue rounded-lg shadow-lg tracking-wide border border-blue cursor-pointer hover:bg-blue hover:text-white transition-colors duration-200 ease-in-out">
                    @if ($documentBack)
                        <img src="{{ $documentBack->temporaryUrl() }}" class="w-12 h-12">
                    @else
                        <img src="{{ asset('images/logo/document-scanner-svgrepo-com.svg') }}"
                            class="w-12 h-12 text-blue-500" wire:loading.remove wire:target="documentBack" />
                    @endif
                    <svg wire:loading wire:target="documentBack" fill="none"
                        class="animate-spin -ml-1 mr-3 h-5 w-5 text-blue-500" xmlns="http://www.w3.org/2000/svg"
                        viewBox="0 0 24 24">
                        <circle class="opacity-25" cx="12" cy="12" r="10" stroke="currentColor"
                            stroke-width="4"></circle>
                        <path class="opacity-75" fill="currentColor"
                            d="M4 12a8 8 0 018-8V0C5.373 0 0 5.373 0 12h4zm2 5.291A7.962 7.962 0 014 12H0c0 3.042 1.135 5.824 3 7.938l3-2.647z">
                        </path>
                    </svg>
                    <span class="mt-2 text-base leading-normal text-blue-500">Upload Back of Document</span>
                    <input type='file' class="hidden" wire:model="documentBack" />
                </label>
                @error('documentBack')
                    <span class="error text-red-500">{{ $message }}</span>
                @enderror
            </div>
        </div>

        <!-- Step three -->
        <div class="{{ $currentTab === 2 ? 'block' : 'hidden' }}" class="step">
            <div class="bg-green-500 text-white p-6 rounded-lg flex items-center shadow-lg">
                <span class="text-lg">Thanks for submitting your 100 Points ID, our team will verify this information
                    and contact you </span>
            </div>
        </div>

        <!-- Previous / Next buttons -->
        <div class="form-footer flex gap-3">
            <!-- Pulsante "Previous" -->
            <button type="button"
                class="flex-1 focus:outline-none border border-gray-300 py-2 px-5 rounded-lg shadow-sm text-center text-gray-700 bg-white hover:bg-gray-100 text-lg"
                wire:click="nextPrev(-1)"
                style="{{ $currentTab > 0 && $currentTab < 2 ? 'display: block;' : 'display: none;' }}">Previous</button>

            <!-- Pulsante "Next" per $currentTab === 1 -->
            <button type="button"
                class="flex-1 border border-transparent focus:outline-none p-3 rounded-md text-center text-white bg-indigo-600 hover:bg-indigo-700 text-lg"
                wire:click="createUserAndGoToNextStep"
                style="{{ $currentTab === 1 ? 'display: block;' : 'display: none;' }}">Submit</button>

            <!-- Pulsante "Next" per $currentTab !== 1 -->
            @if($currentTab !== 2)
            <button type="button"
                class="flex-1 border border-transparent focus:outline-none p-3 rounded-md text-center text-white bg-indigo-600 hover:bg-indigo-700 text-lg"
                wire:click="nextPrev(1)"
                style="{{ $currentTab !== 1 && $currentTab < 3 ? 'display: block;' : 'display: none;' }}">Next</button>
        @endif
        </div>
        <!-- end previous / next buttons -->
    </form>

    <!-- google font -->
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600&display=swap" rel="stylesheet">

    <style>
        body {
            font-family: 'Open Sans', sans-serif;
        }

        #signUpForm {
            max-width: 500px;
        }

        #signUpForm .form-header .stepIndicator.active {
            font-weight: 600;
        }

        #signUpForm .form-header .stepIndicator.finish {
            font-weight: 600;
            color: #5a67d8;
        }

        #signUpForm .form-header .stepIndicator::before {
            content: "";
            position: absolute;
            left: 50%;
            bottom: 0;
            transform: translateX(-50%);
            z-index: 9;
            width: 20px;
            height: 20px;
            background-color: #c3dafe;
            border-radius: 50%;
            border: 3px solid #ebf4ff;
        }

        #signUpForm .form-header .stepIndicator.active::before {
            background-color: #a3bffa;
            border: 3px solid #c3dafe;
        }

        #signUpForm .form-header .stepIndicator.finish::before {
            background-color: #5a67d8;
            border: 3px solid #c3dafe;
        }

        #signUpForm .form-header .stepIndicator::after {
            content: "";
            position: absolute;
            left: 50%;
            bottom: 8px;
            width: 100%;
            height: 3px;
            background-color: #f3f3f3;
        }

        #signUpForm .form-header .stepIndicator.active::after {
            background-color: #a3bffa;
        }

        #signUpForm .form-header .stepIndicator.finish::after {
            background-color: #5a67d8;
        }

        #signUpForm .form-header .stepIndicator:last-child:after {
            display: none;
        }

        #signUpForm input.invalid {
            border: 2px solid #ffaba5;
        }

        #signUpForm .step {
            display: none;
        }
    </style>
</div>
