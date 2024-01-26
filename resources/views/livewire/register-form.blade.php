<div>
    <h1 class="text-lg font-bold text-gray-700 leading-tight text-center mt-12 mb-5">Registration Form</h1>
    <form class="p-12 shadow-md rounded-2xl bg-white mx-auto border-solid border-2 border-gray-100 mb-8"
        wire:submit.prevent="handleFormSubmit" id="signUpForm">
        <!-- start step indicators -->
        <div class="form-header flex gap-3 mb-4 text-xs text-center">
            <!-- Gli indicatori di step cambiano classe in base al valore di $currentTab -->
            <span class="stepIndicator flex-1 pb-8 relative {{ $currentTab >= 0 ? 'active' : '' }}">Account Setup</span>
            <span class="stepIndicator flex-1 pb-8 relative {{ $currentTab >= 1 ? 'active' : '' }}">Documents
                Setup</span>
            <span class="stepIndicator flex-1 pb-8 relative {{ $currentTab >= 2 ? 'active' : '' }}">Payment Setup</span>
            <span class="stepIndicator flex-1 pb-8 relative {{ $currentTab >= 3 ? 'active' : '' }}">Verification</span>
        </div>
        <!-- end step indicators -->

        <!-- Step one -->
        <div class="{{ $currentTab === 0 ? 'block' : 'hidden' }}" class="step">
            <p class="text-md text-gray-700 leading-tight text-center mt-8 mb-5">Create your account</p>
            <div class="mb-6">
                <input type="text" placeholder="Full name" name="fullname" wire:model="fullname"
                    class="w-full px-4 py-3 rounded-md text-gray-700 font-medium border-solid border-2 border-gray-200" />
                @error('fullname')
                    <span class="error">{{ $message }}</span>
                @enderror

            </div>
            <div class="mb-6">
                <input type="text" placeholder="Mobile" name="mobile" wire:model="mobile"
                    class="w-full px-4 py-3 rounded-md text-gray-700 font-medium border-solid border-2 border-gray-200" />
                @error('mobile')
                    <span class="error">{{ $message }}</span>
                @enderror

            </div>
            <div class="mb-6">
                <input type="email" placeholder="Email Address" name="email" wire:model="email"
                    class="w-full px-4 py-3 rounded-md text-gray-700 font-medium border-solid border-2 border-gray-200" />
                @error('email')
                    <span class="error">{{ $message }}</span>
                @enderror

            </div>
            <div class="mb-6">
                <input type="password" placeholder="Password" name="password" wire:model="password"
                    class="w-full px-4 py-3 rounded-md text-gray-700 font-medium border-solid border-2 border-gray-200" />
                @error('password')
                    <span class="error">{{ $message }}</span>
                @enderror

            </div>
            <div class="mb-6">
                <input type="password" placeholder="Confirm Password" name="confirm_password"
                    wire:model="confirm_password"
                    class="w-full px-4 py-3 rounded-md text-gray-700 font-medium border-solid border-2 border-gray-200" />
                @error('confirm_password')
                    <span class="error">{{ $message }}</span>
                @enderror

            </div>
        </div>

        <!-- Step two -->
        <div class="{{ $currentTab === 1 ? 'block' : 'hidden' }}" class="step">
            <p class="text-md text-gray-700 leading-tight text-center mt-8 mb-5">Please load your documents</p>
            <div class="mb-6">
                <label class="w-full flex flex-col items-center px-6 py-6 bg-white text-blue rounded-lg shadow-lg tracking-wide border border-blue cursor-pointer hover:bg-blue hover:text-white transition-colors duration-200 ease-in-out">
                    <img src="{{ asset('images/logo/document-scanner-svgrepo-com.svg') }}" class="w-12 h-12 text-blue-500" wire:loading.remove wire:target="document" />
                    <svg wire:loading wire:target="document" fill="none" class="animate-spin -ml-1 mr-3 h-5 w-5 text-blue-500" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                        <circle class="opacity-25" cx="12" cy="12" r="10" stroke="currentColor" stroke-width="4"></circle>
                        <path class="opacity-75" fill="currentColor" d="M4 12a8 8 0 018-8V0C5.373 0 0 5.373 0 12h4zm2 5.291A7.962 7.962 0 014 12H0c0 3.042 1.135 5.824 3 7.938l3-2.647z"></path>
                    </svg>
                    <span class="mt-2 text-base leading-normal text-blue-500">Upload a document</span>
                    <input type='file' class="hidden" wire:model="document" />
                </label>
            </div>
        </div>

        <!-- Step three -->
        

        <!-- Previous / Next buttons -->
        <div class="form-footer flex gap-3">
            <!-- Pulsante "Previous" -->
            <button type="button"
                class="flex-1 focus:outline-none border border-gray-300 py-2 px-5 rounded-lg shadow-sm text-center text-gray-700 bg-white hover:bg-gray-100 text-lg"
                wire:click="nextPrev(-1)"
                style="{{ $currentTab > 0 ? 'display: block;' : 'display: none;' }}">Previous</button>

            <!-- Pulsante "Next" -->
            <button type="button"
                class="flex-1 border border-transparent focus:outline-none p-3 rounded-md text-center text-white bg-indigo-600 hover:bg-indigo-700 text-lg"
                wire:click="nextPrev(1)"
                style="{{ $currentTab < 3 ? 'display: block;' : 'display: none;' }}">Next</button>

            <!-- Pulsante "Submit" -->
            <button type="submit"
                class="flex-1 border border-transparent focus:outline-none p-3 rounded-md text-center text-white bg-green-600 hover:bg-green-700 text-lg"
                style="{{ $currentTab === 3 ? 'display: block;' : 'display: none;' }}">Submit</button>
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


        #signUpForm input.invalid {
            border: 2px solid #ffaba5;
        }
    </style>
</div>
