<!doctype html>
<html lang="en" class="relative scroll-smooth">

<head>
    <meta charset="utf-8" />
    <title>Match3D</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <meta content="Match 3D" name="description" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <!-- Theme favicon -->
    <link rel="shortcut icon" href="/images/favicon.ico" />
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/theme-change@2.0.2/index.js"></script>
    <script src="
          https://cdn.jsdelivr.net/npm/card3d@2.6.5/dist/card3d.min.js
        "></script>

</head>

<body class="overflow-x-hidden bg-base-100 font-body text-sm text-base-content antialiased">
    @include('components.topbar')
    <section class="py-8 lg:py-20" id="home">
        <div class="container">
            <div class="grid gap-12 lg:grid-cols-2">
                <div>
                    <h1 class="text-4xl font-black tracking-tighter lg:text-6xl lg:leading-none">
                        Boost Your Game with Our Cutting-Edge <span class="text-primary">Sports Betting</span>
                        Platform.
                    </h1>
                    <p class="mt-8 text-lg">
                        Score Big with Our Premier Sports Betting Service. Elevate your experience with top-tier betting
                        options, and dedicated support.
                    </p>
                    <div class="mt-16 inline-flex gap-3">
                        <button href="/register" class="btn btn-primary">Get Started</button>
                    </div>
                </div>

                <div>
                    <div class="rounded-2xl bg-gradient-to-r from-indigo-200 via-red-200 to-purple-300 p-3">
                        <img alt="SaaS" class="rounded-lg" src="/images/betting-1.png" />
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="relative py-8 lg:py-20" id="features">
        <div class="absolute start-[10%] z-0">
            <div
                class="pointer-events-none aspect-square w-60 rounded-full bg-gradient-to-r from-primary/10 via-violet-500/10 to-purple-500/10 blur-3xl [transform:translate3d(0,0,0)] lg:w-[600px]">
            </div>
        </div>

        <div class="container">
            <div class="flex flex-col items-center">
                <h2 class="inline text-4xl font-semibold">Magical Things</h2>

                <p class="mt-4 text-lg sm:text-center">
                    Unlock the Full Potential of Your Business with Our SaaS Platform's Key Features
                </p>
            </div>

            <div class="relative z-[2] mt-8 grid gap-8 lg:mt-20 lg:grid-cols-2 lg:gap-12">
                <div class="overflow-hidden rounded-lg bg-base-200 shadow-md transition-all hover:shadow-xl">
                    <img alt="saas img" class="overflow-hidden rounded-ss-lg"
                        src="/images/landing/16232074-Smart-House-UI.png" />
                </div>

                <div class="lg:mt-8">
                    <div class="badge badge-primary">Dashboard</div>
                    <h3 class="mt-2 text-3xl font-semibold">Fully Controlled Panel</h3>
                    <p class="mt-2 text-base font-medium">
                        Elevate control with our dynamic SaaS dashboard—real-time insights, intuitive
                        navigation, seamless customization.
                    </p>

                    <ul class="mt-4 list-inside list-disc text-base">
                        <li>Real-Time Data Insights</li>
                        <li>Customizable Widgets</li>
                        <li>Intuitive User Interface</li>
                        <li>Performance Metrics at a Glance</li>
                    </ul>
                </div>
            </div>

            <div class="mt-8 grid gap-8 lg:mt-20 lg:grid-cols-2 lg:gap-12">
                <div>
                    <div class="badge badge-primary">Control</div>
                    <h3 class="mt-2 text-3xl font-semibold">Managing Entities</h3>
                    <p class="mt-2 text-base">
                        Our SaaS platform offers seamless management, allowing you to effortlessly oversee
                        users, projects, and resources in one centralized hub. Gain real-time insights,
                        streamline workflows, and optimize resource allocation for unparalleled efficiency.
                    </p>

                    <ul class="mt-4 list-inside list-disc text-base">
                        <li>User-Friendly Tools</li>
                        <li>Resource Management</li>
                        <li>Task Assignment</li>
                        <li>Robust Control</li>
                    </ul>
                </div>

                <div class="order-first lg:order-last">
                    <div class="overflow-hidden rounded-lg bg-base-200 shadow-md transition-all hover:shadow-xl">
                        <img alt="saas img" class="overflow-hidden rounded-ss-lg"
                            src="/images/landing/18580477-Skylight-Mobile-Property-Management-Dashboard.png" />
                    </div>
                </div>
            </div>

            <div class="mt-8 grid gap-8 lg:mt-20 lg:grid-cols-2 lg:gap-12">
                <div class="overflow-hidden rounded-lg bg-base-200 shadow-md transition-all hover:shadow-xl">
                    <img alt="saas img" class="overflow-hidden rounded-ss-lg"
                        src="/images/landing/18382537-WorkSpace-Work-Space-Booking-Apps.png" />
                </div>

                <div class="lg:mt-8">
                    <div class="badge badge-primary">Workflows</div>
                    <h3 class="mt-2 text-3xl font-semibold">Seamless Integrations</h3>
                    <p class="mt-2 text-base">
                        Connect key tools seamlessly with our SaaS platform, streamlining your processes and
                        boosting productivity. Experience a cohesive digital ecosystem that empowers your
                        business for innovation and growth.
                    </p>

                    <ul class="mt-4 list-inside list-disc text-base">
                        <li>Real-time chat with Slack</li>
                        <li>Engage your customer with Email</li>
                        <li>Getting order from Amazon</li>
                        <li>Using Ai from OpenAI</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <section
        class="relative w-full bg-white px-6 pt-10 pb-8 mt-8 shadow-xl ring-1 ring-gray-900/5 sm:mx-auto sm:max-w-2xl sm:rounded-lg sm:px-10 lg:mb-20">
        <div class="mx-auto px-5">
            <div class="flex flex-col items-center">
                <h2 class="mt-5 text-center text-3xl font-bold tracking-tight md:text-5xl">FAQ</h2>
                <p class="mt-3 text-lg text-neutral-500 md:text-xl">Frequenty asked questions

                </p>
            </div>
            <div class="mx-auto mt-8 grid max-w-xl divide-y divide-neutral-200">
                <div class="py-5">
                    <details class="group">
                        <summary class="flex cursor-pointer list-none items-center justify-between font-medium">
                            <span> How does the billing work?</span>
                            <span class="transition group-open:rotate-180">
                                <svg fill="none" height="24" shape-rendering="geometricPrecision"
                                    stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                    stroke-width="1.5" viewBox="0 0 24 24" width="24">
                                    <path d="M6 9l6 6 6-6"></path>
                                </svg>
                            </span>
                        </summary>
                        <p class="group-open:animate-fadeIn mt-3 text-neutral-600">Springerdata offers a variety of
                            billing options, including monthly and annual subscription plans, as well as pay-as-you-go
                            pricing for certain services. Payment is typically made through a credit card or other
                            secure online payment method.
                        </p>
                    </details>
                </div>
                <div class="py-5">
                    <details class="group">
                        <summary class="flex cursor-pointer list-none items-center justify-between font-medium">
                            <span> Can I get a refund for my subscription?</span>
                            <span class="transition group-open:rotate-180">
                                <svg fill="none" height="24" shape-rendering="geometricPrecision"
                                    stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                    stroke-width="1.5" viewBox="0 0 24 24" width="24">
                                    <path d="M6 9l6 6 6-6"></path>
                                </svg>
                            </span>
                        </summary>
                        <p class="group-open:animate-fadeIn mt-3 text-neutral-600">We offer a 30-day money-back
                            guarantee for most of its subscription plans. If you are not satisfied with your
                            subscription within the first 30 days, you can request a full refund. Refunds for
                            subscriptions that have been active for longer than 30 days may be considered on a
                            case-by-case basis.
                        </p>
                    </details>
                </div>
                <div class="py-5">
                    <details class="group">
                        <summary class="flex cursor-pointer list-none items-center justify-between font-medium">
                            <span> How do I cancel my subscription?</span>
                            <span class="transition group-open:rotate-180">
                                <svg fill="none" height="24" shape-rendering="geometricPrecision"
                                    stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                    stroke-width="1.5" viewBox="0 0 24 24" width="24">
                                    <path d="M6 9l6 6 6-6"></path>
                                </svg>
                            </span>
                        </summary>
                        <p class="group-open:animate-fadeIn mt-3 text-neutral-600">To cancel your subscription, you can
                            log in to your account and navigate to the subscription management page. From there, you
                            should be able to cancel your subscription and stop future billing.
                        </p>
                    </details>
                </div>
                <div class="py-5">
                    <details class="group">
                        <summary class="flex cursor-pointer list-none items-center justify-between font-medium">
                            <span> Is there a free trial?</span>
                            <span class="transition group-open:rotate-180">
                                <svg fill="none" height="24" shape-rendering="geometricPrecision"
                                    stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                    stroke-width="1.5" viewBox="0 0 24 24" width="24">
                                    <path d="M6 9l6 6 6-6"></path>
                                </svg>
                            </span>
                        </summary>
                        <p class="group-open:animate-fadeIn mt-3 text-neutral-600">We offer a free trial of our
                            software
                            for a limited time. During the trial period, you will have access to a limited set of
                            features and functionality, but you will not be charged.
                        </p>
                    </details>
                </div>
                <div class="py-5">
                    <details class="group">
                        <summary class="flex cursor-pointer list-none items-center justify-between font-medium">
                            <span> How do I contact support?</span>
                            <span class="transition group-open:rotate-180">
                                <svg fill="none" height="24" shape-rendering="geometricPrecision"
                                    stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                    stroke-width="1.5" viewBox="0 0 24 24" width="24">
                                    <path d="M6 9l6 6 6-6"></path>
                                </svg>
                            </span>
                        </summary>
                        <p class="group-open:animate-fadeIn mt-3 text-neutral-600">If you need help with our platform
                            or
                            have any other questions, you can contact the company's support team by submitting a support
                            request through the website or by emailing support@ourwebsite.com.
                        </p>
                    </details>
                </div>
                <div class="py-5">
                    <details class="group">
                        <summary class="flex cursor-pointer list-none items-center justify-between font-medium">
                            <span> Do you offer any discounts or promotions?</span>
                            <span class="transition group-open:rotate-180">
                                <svg fill="none" height="24" shape-rendering="geometricPrecision"
                                    stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                    stroke-width="1.5" viewBox="0 0 24 24" width="24">
                                    <path d="M6 9l6 6 6-6"></path>
                                </svg>
                            </span>
                        </summary>
                        <p class="group-open:animate-fadeIn mt-3 text-neutral-600">We may offer discounts or promotions
                            from time to time. To stay up-to-date on the latest deals and special offers, you can sign
                            up for the company's newsletter or follow it on social media.
                        </p>
                    </details>
                </div>
            </div>
        </div>
    </section>
    @include('components.footer')
</body>

</html>
