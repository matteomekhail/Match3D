<div x-data="formHandler()">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/zxcvbn/4.4.2/zxcvbn.js"></script>

    <h1 class="text-lg font-bold text-gray-700 leading-tight text-center mt-12 mb-5">Registration Form</h1>
    <form id="signUpForm" class="p-12 shadow-md rounded-2xl bg-white mx-auto border-solid border-2 border-gray-100 mb-8"
        action="#!">
        <!-- start step indicators -->
        <div class="form-header flex gap-3 mb-4 text-xs text-center">
            <span class="stepIndicator flex-1 pb-8 relative">Account Setup</span>
            <span class="stepIndicator flex-1 pb-8 relative">Documents Setup</span>
            <span class="stepIndicator flex-1 pb-8 relative">Payment Setup</span>
            <span class="stepIndicator flex-1 pb-8 relative">Verification</span>
        </div>
        <!-- end step indicators -->

        <!-- step one -->
        <div class="step">
            <p class="text-md text-gray-700 leading-tight text-center mt-8 mb-5">Create your account</p>
            <div class="mb-6">
                <input type="text" placeholder="Full name" name="fullname"
                    class="w-full px-4 py-3 rounded-md text-gray-700 font-medium border-solid border-2 border-gray-200"
                    oninput="this.className = 'w-full px-4 py-3 rounded-md text-gray-700 font-medium border-solid border-2 border-gray-200'" />
            </div>
            <div class="mb-6">
                <input type="text" placeholder="Mobile" name="mobile"
                    class="w-full px-4 py-3 rounded-md text-gray-700 font-medium border-solid border-2 border-gray-200"
                    oninput="this.className = 'w-full px-4 py-3 rounded-md text-gray-700 font-medium border-solid border-2 border-gray-200'" />
            </div>
            <div class="mb-6">
                <input type="email" placeholder="Email Address" name="email"
                    class="w-full px-4 py-3 rounded-md text-gray-700 font-medium border-solid border-2 border-gray-200"
                    oninput="this.className = 'w-full px-4 py-3 rounded-md text-gray-700 font-medium border-solid border-2 border-gray-200'" />
            </div>
            <div class="mb-6">
                <input type="password" placeholder="Password" name="password"
                    class="w-full px-4 py-3 rounded-md text-gray-700 font-medium border-solid border-2 border-gray-200"
                    oninput="this.className = 'w-full px-4 py-3 rounded-md text-gray-700 font-medium border-solid border-2 border-gray-200'" />
            </div>
            <div class="mb-6">
                <input type="password" placeholder="Confirm Password" name="confirm_password"
                    class="w-full px-4 py-3 rounded-md text-gray-700 font-medium border-solid border-2 border-gray-200"
                    oninput="this.className = 'w-full px-4 py-3 rounded-md text-gray-700 font-medium border-solid border-2 border-gray-200'" />
            </div>
        </div>
        <!-- step two -->
        <div class="step">
            <p class="text-md text-gray-700 leading-tight text-center mt-8 mb-5">Please load your documents</p>
            <div class="mb-6">
                <input type="text" placeholder="Facebook" name="facebook"
                    class="w-full px-4 py-3 rounded-md text-gray-700 font-medium border-solid border-2 border-gray-200"
                    oninput="this.className = 'w-full px-4 py-3 rounded-md text-gray-700 font-medium border-solid border-2 border-gray-200'" />
            </div>
        </div>
        <!-- step three -->
        <div class="step">
            <p class="text-md text-gray-700 leading-tight text-center mt-8 mb-5">We will never sell it</p>
        </div>
        <!-- start previous / next buttons -->
        <div class="form-footer flex gap-3">
            <button type="button" id="prevBtn"
                class="flex-1 focus:outline-none border border-gray-300 py-2 px-5 rounded-lg shadow-sm text-center text-gray-700 bg-white hover:bg-gray-100 text-lg"
                x-on:click="nextPrev(-1)">Previous</button>
            <button type="button" id="nextBtn"
                class="flex-1 border border-transparent focus:outline-none p-3 rounded-md text-center text-white bg-indigo-600 hover:bg-indigo-700 text-lg"
                x-on:click="nextPrev(1)">Next</button>
        </div>
        <!-- end previous / next buttons -->
    </form>
    <!-- tailwind css -->
    <link rel="stylesheet" href="https://unpkg.com/tailwindcss@^1.0/dist/tailwind.min.css" />
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

    <script>
        
        function formHandler() {
            return {
                currentTab: 0,
                tabs: [],
                init() {
                    this.tabs = this.$el.querySelectorAll('.step');
                    this.showTab(this.currentTab);
                },
                showTab(n) {
                    this.tabs[n].style.display = "block";
                    if (n == 0) {
                        this.$el.querySelector("#prevBtn").style.display = "none";
                    } else {
                        this.$el.querySelector("#prevBtn").style.display = "inline";
                    }
                    if (n == (this.tabs.length - 1)) {
                        this.$el.querySelector("#nextBtn").innerHTML = "Submit";
                    } else {
                        this.$el.querySelector("#nextBtn").innerHTML = "Next";
                    }
                    this.fixStepIndicator(n);
                },
                nextPrev(n) {
                    if (n == 1 && !this.validateForm()) return false;
                    this.tabs[this.currentTab].style.display = "none";
                    this.currentTab = this.currentTab + n;
                    if (this.currentTab >= this.tabs.length) {
                        this.$el.querySelector("#signUpForm").submit();
                        return false;
                    }
                    this.showTab(this.currentTab);
                },
                validateForm() {
                    var valid = true;
                    var inputs = this.tabs[this.currentTab].querySelectorAll("input");
                    var password, confirmPassword;
                    inputs.forEach((input) => {
                        if (input.value == "") {
                            input.classList.add("invalid");
                            valid = false;
                        }
                        if (input.name == "password") {
                            password = input.value;
                            var result = zxcvbn(password);
                            if (result.score < 3) {
                                valid = false;
                                alert('Password is not strong enough. It should be at least 8 characters long and include a mix of uppercase and lowercase letters, numbers, and symbols.');
                                return;
                            }
                        }
                        if (input.name == "confirm_password") {
                            confirmPassword = input.value;
                        }
                    });
                    if (password !== confirmPassword) {
                        valid = false;
                        alert('Passwords do not match.');
                    }
                    if (valid) {
                        this.$el.querySelectorAll(".stepIndicator")[this.currentTab].classList.add("finish");
                    }
                    return valid;
                },
                fixStepIndicator(n) {
                    var indicators = this.$el.querySelectorAll(".stepIndicator");
                    indicators.forEach((indicator) => {
                        indicator.classList.remove("active");
                    });
                    indicators[n].classList.add("active");
                }
            }
        }
    </script>
</div>