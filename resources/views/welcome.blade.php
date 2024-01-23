<!doctype html>
<html lang="en" class="relative scroll-smooth">

<head>
    <meta charset="utf-8" />
    <title>SaaS Landing Page</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <meta content="Saas Landing page" name="description" />
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
                        Revolutionize your business with our
                        <span class="text-primary">dynamic SaaS</span>
                        solutions.
                    </h1>
                    <p class="mt-8 text-lg">
                        Elevate your business to new heights with our cutting-edge SaaS solutions. Seamlessly
                        integrate powerful features, flexible pricing, and dedicated support.
                    </p>
                    <div class="mt-16 inline-flex gap-3">
                        <button class="btn btn-primary">Get Started</button>
                        <button class="btn btn-ghost">Learn More</button>
                    </div>
                </div>

                <div>
                    <div class="rounded-2xl bg-gradient-to-r from-indigo-200 via-red-200 to-purple-300 p-3">
                        <img alt="SaaS" class="rounded-lg"
                            src="/images/landing/21478246-Omoi-Customer-Relationship-Management-Dashboard.png" />
                    </div>
                </div>
            </div>

            <h2 class="mt-12 text-center text-2xl font-semibold text-base-content/60 lg:mt-32">
                Our Partners
            </h2>

            <div class="mt-12 grid grid-cols-2 justify-center gap-8 sm:grid-cols-3 md:grid-cols-5">
                <img class="mx-auto h-8 cursor-pointer grayscale transition-all duration-500 hover:grayscale-0"
                    src="/images/logo/google.svg" alt="google logo" />
                <img class="mx-auto h-6 cursor-pointer grayscale transition-all duration-500 hover:grayscale-0"
                    src="/images/logo/microsoft.svg" alt="microsoft logo" />
                <img class="mx-auto hidden h-6 cursor-pointer grayscale transition-all duration-500 hover:grayscale-0 md:inline"
                    src="/images/logo/netflix.svg" alt="netflix logo" />
                <img class="mx-auto hidden h-8 cursor-pointer grayscale transition-all duration-500 hover:grayscale-0 md:inline"
                    src="/images/logo/spotify.svg" alt="spotify logo" />
                <img class="mx-auto hidden h-8 cursor-pointer grayscale transition-all duration-500 hover:grayscale-0 sm:inline"
                    src="/images/logo/paypal.svg" alt="paypal logo" />
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

    <section class="py-8 lg:py-20" id="integrations">
        <div class="container">
            <div class="text-center">
                <h2 class="text-4xl font-semibold">Quick Integrations</h2>
                <p class="mt-2 text-lg sm:text-center">
                    Effortless Collaboration: Seamlessly integrate tools for unified efficiency with our
                    SaaS platform.
                </p>
            </div>
            <div class="mt-12 rounded-lg bg-base-200 p-8 text-base-content lg:px-24 lg:py-14">
                <div class="grid items-center gap-8 lg:grid-cols-2">
                    <div class="inline-flex flex-col text-center lg:text-start">
                        <h3 class="text-3xl font-medium leading-snug">
                            Effortless expert Saas integrations, just a snap away.
                        </h3>
                        <p class="mt-4 text-lg leading-normal">
                            Elevate efficiency with our SaaS platform's seamless integration feature. Connect
                            tools effortlessly for a unified digital workspace.
                        </p>

                        <div class="mt-8 flex justify-center lg:justify-start">
                            <button class="btn btn-primary">Quick Connect</button>
                        </div>
                    </div>

                    <div class="mt-8 grid grid-cols-2 gap-14 md:grid-cols-3">
                        <div class="flex justify-center lg:justify-end">
                            <div class="inline-flex h-24 w-24 items-center justify-center rounded-full bg-white shadow">
                                <img alt="amazon" class="h-12 w-12" src="/images/logo/amazon-mini.svg" />
                            </div>
                        </div>

                        <div class="flex justify-center lg:justify-end">
                            <div class="inline-flex h-24 w-24 items-center justify-center rounded-full bg-white shadow">
                                <img alt="slack" class="h-12 w-12" src="/images/logo/slack.svg" />
                            </div>
                        </div>

                        <div class="flex justify-center lg:justify-end">
                            <div class="inline-flex h-24 w-24 items-center justify-center rounded-full bg-white shadow">
                                <img alt="openai" class="h-12 w-12" src="/images/logo/openai.svg" />
                            </div>
                        </div>

                        <div class="flex justify-center lg:justify-end">
                            <div class="inline-flex h-24 w-24 items-center justify-center rounded-full bg-white shadow">
                                <img alt="meta" class="h-12 w-12" src="/images/logo/meta-mini.svg" />
                            </div>
                        </div>

                        <div class="flex justify-center lg:justify-end">
                            <div class="inline-flex h-24 w-24 items-center justify-center rounded-full bg-white shadow">
                                <img alt="whatsapp" class="h-12 w-12" src="/images/logo/whatsapp.svg" />
                            </div>
                        </div>

                        <div class="flex justify-center lg:justify-end">
                            <div class="inline-flex h-24 w-24 items-center justify-center rounded-full bg-white shadow">
                                <img alt="x" class="h-12 w-12" src="/images/logo/x.svg" />
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="mt-6 grid gap-6 lg:grid-cols-3">
                <div class="card cursor-pointer border border-base-content/10 p-6 transition-all hover:shadow">
                    <div class="flex items-center justify-between gap-4">
                        <div class="flex items-center gap-4">
                            <div class="flex h-16 w-16 items-center justify-center rounded-full bg-base-200">
                                <img alt="slack" class="h-8 w-8" src="/images/logo/slack.svg" />
                            </div>
                            <h3 class="text-xl font-semibold">Slack</h3>
                        </div>
                        <button class="btn btn-circle" aria-label="Details">
                            <i class="icon-arrow-right text-2xl"></i>
                        </button>
                    </div>
                    <p class="mt-4">
                        Streamline project discussions, share updates, and boost real-time collaboration
                        effortlessly.
                    </p>
                </div>

                <div class="card cursor-pointer border border-base-content/10 p-6 transition-all hover:shadow">
                    <div class="flex items-center justify-between gap-4">
                        <div class="flex items-center gap-4">
                            <div class="flex h-16 w-16 items-center justify-center rounded-full bg-base-200">
                                <img alt="google drive" class="h-8 w-8" src="/images/logo/g-drive.svg" />
                            </div>
                            <h3 class="text-xl font-semibold">Google Drive</h3>
                        </div>
                        <button class="btn btn-circle" aria-label="Details">
                            <i class="icon-arrow-right text-2xl"></i>
                        </button>
                    </div>

                    <p class="mt-4">
                        File management, Enhance collaboration, and Elevate your productivity with the
                        convenience of this integrated solution
                    </p>
                </div>

                <div class="card cursor-pointer border border-base-content/10 p-6 transition-all hover:shadow">
                    <div class="flex items-center justify-between gap-4">
                        <div class="flex items-center gap-4">
                            <div class="flex h-16 w-16 items-center justify-center rounded-full bg-base-200">
                                <img alt="bitbucket" class="h-8 w-8" src="/images/logo/bitbucket-mini.svg" />
                            </div>
                            <h3 class="text-xl font-semibold">Bitbucket</h3>
                        </div>
                        <button class="btn btn-circle" aria-label="Details">
                            <i class="icon-arrow-right text-2xl"></i>
                        </button>
                    </div>

                    <p class="mt-4">
                        Streamline version control, collaboration, and project management with ease. Embrace
                        the power of seamless GitHub integration.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <section class="py-8 lg:py-20" id="pricing" x-data="{
      period: 'monthly',
      premium: {monthly: '$99', yearly: '$59'},
      ultimate: {monthly: '$199', yearly: '$119'},
    }">
        <div class="container">
            <div class="text-center">
                <h2 class="text-4xl font-semibold">Pricing Plans</h2>
                <p class="mt-2 text-lg">
                    Explore flexible pricing that scales with your needs. No hidden fees, just transparent
                    options for your success.
                </p>
            </div>
            <div class="mt-6 flex justify-center">
                <div class="tabs-boxed tabs">
                    <button class="tab lg:px-10" :class="{'tab-active': period === 'monthly'}"
                        @click="()=>period='monthly'">
                        Monthly
                    </button>
                    <button class="tab indicator lg:px-10" :class="{'tab-active': period === 'yearly'}"
                        @click="()=>period='yearly'">
                        Yearly
                        <span class="badge indicator-item badge-neutral">-40%</span>
                    </button>
                </div>
            </div>
            <div class="mt-8 grid gap-8 lg:grid-cols-3">
                <div class="card border border-base-content/10 p-3 shadow-sm">
                    <div class="card bg-base-200 p-6 text-base-content">
                        <h3 class="text-xl font-semibold">Free</h3>
                        <p class="mt-2 flex items-baseline">
                            <span class="text-5xl font-bold tracking-tight">$0</span>
                            <span class="ml-1 text-xl font-semibold">/month</span>
                        </p>
                        <p class="mt-4">
                            Experience essential features at no cost, setting the foundation for your business
                            growth.
                        </p>
                    </div>
                    <div class="p-6">
                        <ul class="list-inside list-disc space-y-3 text-base-content" role="list">
                            <li>
                                <span class="ms-3">For Personal Use</span>
                            </li>
                            <li>
                                <span class="ms-3">20 products</span>
                            </li>
                            <li>
                                <span class="ms-3">Limited Integrations</span>
                            </li>
                        </ul>
                    </div>
                    <button class="btn btn-outline btn-primary btn-block mt-auto">Start for Free</button>
                </div>
                <div class="card border border-base-content/10 bg-base-100 p-3 shadow-sm">
                    <div class="card bg-base-200 p-6 text-base-content">
                        <div class="flex justify-between">
                            <h3 class="text-xl font-semibold text-primary">Premium</h3>
                            <div class="badge badge-outline text-sm font-medium">Best Offer</div>
                        </div>

                        <p class="mt-4 flex items-baseline">
                            <span class="text-5xl font-bold tracking-tight text-primary"
                                x-text="premium[period]"></span>
                            <span class="ml-1 text-xl font-semibold">/month</span>
                        </p>
                        <p class="mt-6">
                            Unlock advanced features and elevate your SaaS experience with our premium plan.
                        </p>
                    </div>
                    <div class="p-6">
                        <ul class="list-inside list-disc space-y-3 text-base-content" role="list">
                            <li>
                                <span class="ms-3">Up to 10 Team Members</span>
                            </li>
                            <li>
                                <span class="ms-3">Unlocked all Apps</span>
                            </li>
                            <li>
                                <span class="ms-3">Use all Integrations</span>
                            </li>
                            <li>
                                <span class="ms-3">99.9% Support Response Time</span>
                            </li>
                        </ul>
                    </div>
                    <button class="btn btn-primary btn-block mt-auto">Upgrade to Premium</button>
                </div>
                <div class="card border border-base-content/10 p-3 shadow-sm">
                    <div class="card bg-base-200 p-6">
                        <h3 class="text-xl font-semibold">Ultimate</h3>
                        <p class="mt-4 flex items-baseline">
                            <span class="text-5xl font-bold tracking-tight" x-text="ultimate[period]"></span>
                            <span class="ml-1 text-xl font-semibold">/month</span>
                        </p>
                        <p class="mt-6">
                            Unleash business potential with our ultimate plan. Maximize features, scalability,
                            and success.
                        </p>
                    </div>
                    <div class="p-6">
                        <ul class="list-inside list-disc space-y-3" role="list">
                            <li>
                                <span class="ms-3">Unlimited Members</span>
                            </li>
                            <li>
                                <span class="ms-3">Unlocked all Apps</span>
                            </li>
                            <li>
                                <span class="ms-3">Use all Integrations</span>
                            </li>
                            <li>
                                <span class="ms-3">24*7 Quick Support</span>
                            </li>
                            <li>
                                <span class="ms-3">Marketing automations</span>
                            </li>
                        </ul>
                    </div>
                    <button class="btn btn-outline btn-primary btn-block mt-auto">
                        Get Ultimate Power
                    </button>
                </div>
            </div>
        </div>
    </section>

    <section class="py-8 lg:py-20" id="faq">
        <div class="container">
            <div class="text-center">
                <h2 class="text-4xl font-semibold text-base-content">FAQs</h2>
                <p class="mt-2 text-lg">
                    Find solutions, tips, and more to enhance your SaaS experience.
                </p>
            </div>

            <div class="mt-12 flex justify-center gap-6">
                <div class="space-y-4 lg:w-1/2">
                    <div class="collapse collapse-arrow border border-base-content/10">
                        <input checked="checked" name="faq" type="radio" aria-label="open/close" />
                        <div class="collapse-title text-xl font-medium">
                            How does SaaS benefit my business?
                        </div>
                        <div class="collapse-content">
                            <p class="text-base">
                                SaaS offers several advantages, including cost-effectiveness, scalability,
                                automatic updates, and accessibility. It allows businesses to focus on core
                                operations while the software provider handles maintenance and updates.
                            </p>
                        </div>
                    </div>
                    <div class="collapse collapse-arrow border border-base-content/10">
                        <input name="faq" type="radio" aria-label="open/close" />
                        <div class="collapse-title text-xl font-medium">
                            What features are included in your SaaS platform?
                        </div>
                        <div class="collapse-content">
                            <p class="text-base">
                                Our SaaS platform offers a range of features, including collaborative tools,
                                real-time analytics, integrations with popular applications, user-friendly
                                interfaces, and customizable solutions tailored to your business needs.
                            </p>
                        </div>
                    </div>
                    <div class="collapse collapse-arrow border border-base-content/10">
                        <input name="faq" type="radio" aria-label="open/close" />
                        <div class="collapse-title text-xl font-medium">How can I upgrade my plan?</div>
                        <div class="collapse-content">
                            <p class="text-base">
                                Upgrading your plan is easy. Log in to your account, go to the billing section,
                                and choose the plan that suits your business requirements. The upgrade will take
                                effect immediately.
                            </p>
                        </div>
                    </div>
                    <div class="collapse collapse-arrow border border-base-content/10">
                        <input name="faq" type="radio" aria-label="open/close" />
                        <div class="collapse-title text-xl font-medium">
                            Is there a trial period for your SaaS platform?
                        </div>
                        <div class="collapse-content">
                            <p class="text-base">
                                Yes, we offer a free trial period for you to explore and experience our platform's
                                features. No credit card is required during the trial period.
                            </p>
                        </div>
                    </div>
                    <div class="collapse collapse-arrow border border-base-content/10">
                        <input name="faq" type="radio" aria-label="open/close" />
                        <div class="collapse-title text-xl font-medium">
                            How is data security handled on your platform?
                        </div>
                        <div class="collapse-content">
                            <p class="text-base">
                                We prioritize data security. Our platform employs encryption, access controls, and
                                regular security audits to safeguard your data. We comply with industry standards
                                to ensure your information is secure.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    @include('components.footer')
    @include('components.theme-toggle')
</body>

</html>