<nav class="flex items-center bg-gray-800 p-3 flex-wrap">
    <a class="p-2 mr-4 inline-flex items-center" href="/">
        <svg class="fill-white h-8 w-8 mr-2" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
             viewBox="0 0 13.611 13.493"  xml:space="preserve">
            <path d="M4.174,0.37C4.293,0.24,4.449,0.148,4.549,0C4.531,1.498,4.54,2.997,4.544,4.496C4.871,4.182,5.169,3.834,5.522,3.55
		c1.16-1.162,2.322-2.321,3.485-3.479c0.033-0.048,0.09-0.056,0.144-0.053c1.487,0.002,2.974-0.001,4.46,0.001
		c-0.007,2.993,0.001,5.986-0.004,8.979c-0.918,0.901-1.821,1.818-2.736,2.723c-0.156,0.149-0.296,0.316-0.472,0.442
		c-0.442,0.44-0.885,0.88-1.326,1.321c-0.001-1.497,0-2.994,0-4.491c-1.093,1.086-2.181,2.178-3.274,3.264
		c-0.175,0.128-0.321,0.289-0.473,0.442c-0.263,0.263-0.525,0.526-0.791,0.786c-1.192-0.009-2.384-0.002-3.576-0.004
		c-0.318,0.005-0.637-0.011-0.955,0.01c0.001-2.9,0.001-5.8,0-8.7C0.016,4.687-0.028,4.56,0.034,4.469
		c0.243-0.235,0.465-0.495,0.733-0.702C1.902,2.634,3.037,1.502,4.174,0.37z M4.541,4.515C4.538,6.006,4.542,7.498,4.539,8.989
		C6.05,8.987,7.561,8.997,9.072,8.984c0.004-1.49,0.001-2.979,0.001-4.469C7.562,4.513,6.052,4.513,4.541,4.515z"/>
        </svg>
        <span class="text-white text-xl font-bold uppercase tracking-wide select-none">
            Job Listings
        </span>
    </a>
    <button class="text-white inline-flex p-3 hover:bg-gray-900 rounded lg:hidden ml-auto nav-toggler" data-target="#navigation"><i class="material-icons">menu</i></button>
    <div class="top-nav w-full lg:inline-flex lg:flex-grow lg:w-auto">
        <div id="navigation" class="lg:inline-flex lg:flex-row lg:ml-auto flex flex-col">
            <a href="{{ route('login') }}" class="lg:inline-flex lg:w-auto px-4 py-2 rounded text-gray-400 hover:text-white hover:bg-gray-900">
                <span>Login</span>
            </a>
            <a href="{{ route('register') }}" class="lg:inline-flex lg:w-auto px-4 py-2 rounded text-gray-400 hover:text-white hover:bg-gray-900">
                <span>Register</span>
            </a>
        </div>
    </div>
</nav>