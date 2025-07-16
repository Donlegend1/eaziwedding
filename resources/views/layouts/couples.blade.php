<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="h-full">
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
    <script src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js" defer></script>
    <script type="text/javascript" src="https://assets.calendly.com/assets/external/widget.js" async></script>
    <script src="https://js.paystack.co/v2/inline.js" ></script>
    <link href="https://cdn.jsdelivr.net/npm/flowbite@3.1.2/dist/flowbite.min.css" rel="stylesheet" />

    @viteReactRefresh
    @vite(['resources/css/app.css', 'resources/js/app.js']) 

</head>
<body class="bg-white text-gray-800 dark:bg-gray-900 dark:text-gray-100 min-h-screen flex flex-col">
    <div id="app" class="flex flex-col flex-grow">
     
   <header x-data="{ openMobileNav: false, showLogoutModal: false }" class="bg-black dark:bg-gray-800 text-white shadow sticky top-0 z-50">

    <!-- Top Bar -->
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-4 flex items-center justify-between">
        <!-- Logo & Tag -->
        <div class="flex items-center space-x-3">
            <a href="/" class="flex items-center space-x-2">
                <img src="/logo/logo.png" alt="KingsleyKhord logo" class="h-12">
            </a>
            
        </div>

        <!-- Search (desktop only) -->
        <div class="hidden lg:flex flex-1 justify-center">
            <div class="relative w-full max-w-md">
                <span class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                    <i class="fa fa-search text-gray-400"></i>
                </span>
                <input type="text" placeholder="Search..." class="w-full pl-10 pr-4 py-2 rounded-full bg-gray-700 text-white placeholder-gray-400 focus:outline-none focus:ring-2 focus:ring-[#FFD736] text-sm">
            </div>
        </div>

        <!-- Right Nav + Mobile Toggle -->
        <div class="flex items-center space-x-4">
            <nav class="hidden lg:flex items-center space-x-4 text-sm font-medium">
                    <button @click="showLogoutModal = true" class="px-4 py-1.5 rounded-md text-gray-800 bg-gray-100 hover:bg-[#FFD736] transition">Logout</button>
            </nav>

            <!-- Mobile toggle -->
            <button @click="openMobileNav = true" class="lg:hidden">
                <i class="fa fa-bars text-xl"></i>
            </button>
        </div>
    </div>
     @php
    $navItems = [
        ['url' => 'home', 'label' => 'Home', 'icon' => 'fa-solid fa-house'],
        ['url' => 'user/weddings', 'label' => 'My Weddings', 'icon' => 'fa fa-user-friends'],
        ['url' => 'user/weddings/create', 'label' => 'Add Wedding', 'icon' => 'fa-solid fa-plus'],
        ['url' => 'profile', 'label' => 'Profile', 'icon' => 'fa-solid fa-user'],
        ['url' => 'support', 'label' => 'Support', 'icon' => 'fa-solid fa-life-ring'],
    ];
@endphp

    <!-- Desktop Nav Bar -->
    <div class="hidden md:block bg-black border-t border-gray-700">
        <div class=" flex justify-center max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-3">
            <div class="flex flex-wrap">
                @foreach ($navItems as $item)
                    <a href="/{{ $item['url'] }}"
                    class="flex items-center gap-2 px-3 py-2 rounded text-sm transition
                    {{ Request::is($item['url']) ? 'bg-gray-700 text-white' : 'text-gray-400 hover:text-[#FFD736]' }}">
                        <i class="{{ $item['icon'] }} text-white text-base"></i>
                        <span>{{ $item['label'] }}</span>
                    </a>
                @endforeach
            </div>
        </div>
    </div>


    <!-- Mobile Sidebar Nav -->
    <div x-show="openMobileNav" class="fixed inset-0 z-50 flex" x-transition>
        <div class="fixed inset-0 bg-black bg-opacity-60" @click="openMobileNav = false"></div>

        <div class="relative bg-black text-white w-72 max-w-full h-full overflow-y-auto p-4 transform transition-transform duration-300" :class="openMobileNav ? 'translate-x-0' : '-translate-x-full'">
            <div class="flex justify-end mb-4">
                <button @click="openMobileNav = false">
                    <i class="fa fa-times text-xl text-white"></i>
                </button>
            </div>

            <div class="space-y-6">
                <div class="flex flex-col divide-y divide-gray-700 border border-gray-700 rounded-md">
                    @foreach ($navItems as $item)
                        <a href="/{{ $item['url'] }}" class="flex items-center gap-3 px-3 py-3 text-sm transition {{ Request::is($item['url']) ? 'bg-gray-700 text-white' : 'hover:text-[#FFD736]' }}">
                            <i class="{{ $item['icon'] }} text-[#FFD736] text-lg"></i>
                            <span>{{ $item['label'] }}</span>
                        </a>
                    @endforeach
                </div>

                <button @click="showLogoutModal = true" class="mt-4 w-full text-sm font-semibold px-4 py-2 rounded-md hover:bg-[#FFD736] text-white bg-red-500">
                    Logout <i class="fa fa-sign-out-alt ml-2"></i>
                </button>
            </div>
        </div>
    </div>

    <!-- Logout Modal -->
    <div x-show="showLogoutModal" class="fixed inset-0 bg-black bg-opacity-50 flex items-center justify-center z-50">
        <div @click.away="showLogoutModal = false" class="bg-white text-black rounded-lg shadow-xl w-full max-w-sm p-6">
            <div class="text-center mb-4">
                <h2 class="text-lg font-semibold mb-2">Confirm Logout</h2>
                <p class="text-gray-600">Are you sure you want to log out?</p>
            </div>
            <div class="flex justify-between space-x-3">
                <button @click="showLogoutModal = false" class="px-4 py-2 text-sm text-gray-600 bg-gray-200 rounded hover:bg-gray-300">Cancel</button>
                <form id="logout-form" method="POST" action="{{ route('logout') }}" class="hidden">@csrf</form>
                <button @click="document.getElementById('logout-form').submit()" class="px-4 py-2 text-sm text-white bg-red-600 rounded hover:bg-red-700">Logout</button>
            </div>
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
        <main  class="flex-grow">
            @yield('content')
        </main>

         <footer class="bg-gray-100 dark:bg-gray-800 border-t border-gray-200 dark:border-gray-700 py-5">
            <div class="max-w-7xl mx-auto px-4 flex flex-col md:flex-row items-center justify-center text-sm text-gray-500 dark:text-gray-400">
                <div class="flex items-center">
                    <div>&copy; {{ date('Y') }} {{ config('app.name') }}</div>
                    <div class="h-4 border-l border-gray-400 mx-2"></div>
                    <div>All rights reserved.</div>
                </div>
            </div>
        </footer>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/flowbite@3.1.2/dist/flowbite.min.js"></script>
    <script>
        document.addEventListener('DOMContentLoaded', () => {
            const burger = document.querySelector('.navbar-burger');
            const nav = document.getElementById('mobile-nav');

            burger?.addEventListener('click', () => {
                nav.classList.toggle('hidden');
            });
        });
    </script>

    <script>
  function changeTab(tab) {
    // Hide all tab contents
    const contents = document.querySelectorAll('.tab-content');
    contents.forEach(content => {
      content.classList.add('hidden');
    });

    // Remove active state from all buttons
    const buttons = document.querySelectorAll('[data-tab]');
    buttons.forEach(button => {
      button.classList.remove('bg-gray-300');
      button.classList.add('bg-transparent');
    });

    // Show content of the selected tab
    const activeContent = document.querySelector(`[data-content="${tab}"]`);
    activeContent.classList.remove('hidden');

    // Add active state to the selected button
    const activeButton = document.querySelector(`[data-tab="${tab}"]`);
    activeButton.classList.remove('bg-transparent');
    activeButton.classList.add('bg-gray-300');
  }

  // Initially set the first tab as active
  document.addEventListener("DOMContentLoaded", function() {
    changeTab('beginners');
  });
</script>

 <script>
    window.authUser = @json(auth()->user());
</script>
</body>
</html>
