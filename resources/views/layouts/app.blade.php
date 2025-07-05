<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="description" content="KingsleyKhord is a platform that connects you with the best service providers in your area. Whether you're looking for a plumber, electrician, or any other service, we've got you covered.">
    <meta name="keywords" content="KingsleyKhord, service providers, local services, find services, connect with service providers">
    <meta name="author" content="LengendOSA Consultants">
    <meta name="robots" content="index, follow">
    <meta name="theme-color" content="#FFD736">
    <meta name="google-site-verification" content="your-google-site-verification-code" />
    <link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">
    <link rel="manifest" href="/site.webmanifest">
   
    <title>{{ config('app.name', 'Laravel') }}</title>

    <link rel="preconnect" href="https://fonts.bunny.net">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css" integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@400;600;700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@400;600;700&display=swap" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js" defer></script>
    <script src="https://js.paystack.co/v2/inline.js"></script>
     <script src="https://js.stripe.com/v3/"></script>

    @viteReactRefresh
    @vite(['resources/css/app.css', 'resources/js/app.js']) 
    <link href="https://cdn.jsdelivr.net/npm/flowbite@3.1.2/dist/flowbite.min.css" rel="stylesheet" />
</head>
<body class="bg-white text-black dark:bg-gray-900 dark:text-gray-100">
    <div id="app">
<header class="bg-gradient-to-l from-white via-gray-100 to-[#f5f3f7] dark:from-gray-900 dark:via-gray-800 dark:to-gray-900 shadow sticky top-0 z-50">
  <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-4 flex items-center justify-between">
        <!-- Logo -->
        <div class="flex items-center flex-shrink-0">
            <a href="/" class="text-2xl font-bold">
                <img src="/logo/logoblack2.png" alt="KingsleyKhord logo" class="h-12 w-auto">
            </a>
        </div>

        <!-- Desktop Navigation -->
        <nav class="hidden lg:flex space-x-8 items-center justify-center flex-1">
            @php
                $navLinks = [
                    '/' => 'Home',
                    'about' => 'About',
                    'services' => 'Services',
                    'faq' => 'FAQ',
                    'contact' => 'Contact'
                ];
            @endphp

            @foreach($navLinks as $path => $label)
                <a href="/{{ $path === '/' ? '' : $path }}"
                class="text-lg font-semibold transition duration-200
                {{ Request::is($path) 
                        ? 'text-rose-500 dark:text-rose-400' 
                        : 'text-gray-800 dark:text-gray-300 hover:text-rose-500 dark:hover:text-rose-400' }}">
                    {{ $label }}
                </a>
            @endforeach
        </nav>

        <!-- Desktop Buttons -->
        <div class="hidden lg:flex items-center space-x-4">
            <!-- Sign Up with Couple Icon -->
            <a href="/register"
            class="text-lg font-semibold px-5 py-2 rounded-lg bg-black text-white hover:bg-gray-800 hover:text-white transition duration-200 shadow flex items-center space-x-2">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path d="M7 10a4 4 0 100-8 4 4 0 000 8zm10 0a4 4 0 100-8 4 4 0 000 8zM2 20v-2a4 4 0 014-4h1m10 6v-2a4 4 0 00-4-4h-3" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"/>
                </svg>
                <span>Sign Up</span>
            </a>

            <!-- Login with Heart Icon -->
            <a href="/login"
            class="text-lg font-semibold px-5 py-2 rounded-lg bg-black text-white hover:bg-gray-800 hover:text-white transition duration-200 shadow flex items-center space-x-2">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-rose-500" fill="currentColor" viewBox="0 0 20 20">
                    <path d="M3.172 5.172a4 4 0 015.656 0L10 6.343l1.172-1.171a4 4 0 115.656 5.656L10 18.343 3.172 11.515a4 4 0 010-5.656z"/>
                </svg>
                <span>Login</span>
            </a>
        </div>


        <!-- Mobile Toggle -->
        <div class="lg:hidden">
            <button class="navbar-burger" aria-label="Open Menu">
                <svg class="h-6 w-6 text-gray-800 dark:text-gray-200" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                          d="M4 6h16M4 12h16M4 18h16" />
                </svg>
            </button>
        </div>
    </div>

    <!-- Mobile Nav -->
    <div id="mobile-nav" class="lg:hidden hidden px-4 pb-4">
        <div class="flex flex-col divide-y divide-gray-300 dark:divide-gray-700 border border-gray-300 dark:border-gray-700 rounded-md overflow-hidden">
            @foreach($navLinks as $path => $label)
                <a href="/{{ $path === '/' ? '' : $path }}"
                class="block text-sm font-semibold transition duration-200 py-3 px-2
                {{ Request::is($path) 
                        ? 'text-rose-500 dark:text-rose-400' 
                        : 'text-gray-800 dark:text-gray-300 hover:text-rose-500 dark:hover:text-rose-400' }}">
                    {{ $label }}
                </a>

            @endforeach
        </div>

       <div class="flex flex-col space-y-2 mt-4">
    <!-- Sign Up with couple icon -->
    <a href="/register"
       class="text-sm font-semibold px-4 py-2 rounded-md bg-black text-white hover:bg-gray-800 hover:text-white transition text-center flex items-center justify-center space-x-2">
        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-rose-500" fill="none" viewBox="0 0 24 24" stroke="currentColor">
            <path d="M7 10a4 4 0 100-8 4 4 0 000 8zm10 0a4 4 0 100-8 4 4 0 000 8zM2 20v-2a4 4 0 014-4h1m10 6v-2a4 4 0 00-4-4h-3" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"/>
        </svg>
        <span>Sign Up</span>
    </a>

    <!-- Login with heart icon -->
    <a href="/login"
       class="text-sm font-semibold px-4 py-2 rounded-md bg-black text-white hover:bg-gray-800 hover:text-white transition text-center flex items-center justify-center space-x-2">
        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-white" fill="currentColor" viewBox="0 0 20 20">
            <path d="M3.172 5.172a4 4 0 015.656 0L10 6.343l1.172-1.171a4 4 0 115.656 5.656L10 18.343 3.172 11.515a4 4 0 010-5.656z"/>
        </svg>
        <span>Login</span>
    </a>
</div>

    </div>
</header>








    @if(session()->has('success'))
        <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded mb-4">
            {{ session()->get('success') }}
        </div>
    @endif

    @if(session()->has('error'))
        <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded mb-4">
            {{ session()->get('error') }}
        </div>
    @endif

        <!-- Main Content -->
        <main >
            @yield('content')
        </main>

        <!-- Footer -->
        <footer class="bg-black dark:bg-gray-800 border-t border-gray-700 py-8 text-white text-sm">
            <div class="max-w-7xl mx-auto px-4 grid grid-cols-1 md:grid-cols-3 gap-8 items-start">

                <!-- Quick Links -->
                <div class="space-y-3 text-center md:text-left">
                <h4 class="font-semibold uppercase tracking-wide text-gray-400">Quick Links</h4>
                <ul class="space-y-2">
                    <li><a href="/about" class="hover:text-rose-400">About</a></li>
                    <li><a href="/pricing" class="hover:text-rose-400">Pricing</a></li>
                    <li><a href="/faq" class="hover:text-rose-400">FAQs</a></li>
                    <li><a href="/contact" class="hover:text-rose-400">Contact</a></li>
                </ul>
                </div>

                <!-- Social Media (Only Instagram & WhatsApp) -->
                <div class="space-y-3 text-center">
                <h4 class="font-semibold uppercase tracking-wide text-gray-400">Connect</h4>
                <div class="flex justify-center space-x-6 text-2xl">
                    <a href="https://instagram.com" target="_blank" class="hover:text-rose-400">
                    <i class="fab fa-instagram"></i>
                    </a>
                    <a href="https://wa.me/234XXXXXXXXXX" target="_blank" class="hover:text-rose-400">
                    <i class="fab fa-whatsapp"></i>
                    </a>
                </div>
                </div>

                <!-- Legal -->
                <div class="space-y-3 text-center md:text-right">
                <h4 class="font-semibold uppercase tracking-wide text-gray-400">Legal</h4>
                <ul class="space-y-2">
                    <li><a href="/terms" class="hover:text-rose-400">Terms of Service</a></li>
                    <li><a href="/privacy" class="hover:text-rose-400">Privacy Policy</a></li>
                </ul>
                </div>

            </div>

            <div class="mt-8 border-t border-gray-600 pt-4 text-center text-gray-400">
                &copy; {{ date('Y') }} {{ config('app.name') }}. All rights reserved.
            </div>
        </footer>

    </div>

    <script>
        // Toggle mobile nav
        document.addEventListener('DOMContentLoaded', () => {
            const burger = document.querySelector('.navbar-burger');
            const nav = document.getElementById('mobile-nav');

            burger?.addEventListener('click', () => {
                nav.classList.toggle('hidden');
            });
        });
    </script>
 <script>
    const slider = document.getElementById('slider');
    const slides = slider.children;
    const totalSlides = slides.length;
    let currentIndex = 0;

    document.getElementById('nextBtn').addEventListener('click', () => {
      if (currentIndex < totalSlides - 1) currentIndex++;
      updateSlider();
    });

    document.getElementById('prevBtn').addEventListener('click', () => {
      if (currentIndex > 0) currentIndex--;
      updateSlider();
    });

    function updateSlider() {
      slider.style.transform = `translateX(-${currentIndex * 100}%)`;
    }
  </script>

<script>
function registerForm() {
    const params = new URLSearchParams(window.location.search);
    return {
        name: '',
        email: '',
        password: '',
        password_confirmation: '',
        plan: '',
        showPaymentModal: false,
        registerUser() {
            fetch('{{ route('register') }}', {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/json',
                    'Accept': 'application/json',
                    'X-CSRF-TOKEN': document.querySelector('input[name="_token"]').value
                },
                body: JSON.stringify({
                    name: this.name,
                    email: this.email,
                    password: this.password,
                    password_confirmation: this.password_confirmation,
                    plan: params.get('plan') ,
                })
            })
            .then(response => response.json())
            .then(data => {
                if (data.success || data.user) {
                    this.showPaymentModal = true;
                } else if (data.errors) {
                    alert("Error: " + JSON.stringify(data.errors));
                } else {
                    alert("Something went wrong.");
                }
            })
            .catch(error => {
                console.error(error);
                alert("Something went wrong.");
            });
        }
    }
}


</script>
<script src="https://cdn.jsdelivr.net/npm/flowbite@3.1.2/dist/flowbite.min.js"></script>

</body>
</html>
