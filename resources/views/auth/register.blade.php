@extends('layouts.app')

@section('content')

<section class="bg-gradient-to-r from-blue-50 via-purple-50 to-pink-50 dark:from-gray-800 dark:to-gray-900 py-16 px-4 relative overflow-hidden">

    <!-- Decorative Circles -->
    <div class="absolute top-0 left-0 w-40 h-40 bg-pink-100 dark:bg-gray-700 rounded-full opacity-30 transform -translate-x-1/2 -translate-y-1/2"></div>
    <div class="absolute bottom-0 right-0 w-56 h-56 bg-rose-200 dark:bg-gray-700 rounded-full opacity-20 transform translate-x-1/2 translate-y-1/2"></div>

    <div class="relative z-10 max-w-7xl mx-auto flex flex-col md:flex-row items-center gap-12">

        <!-- Left: Hero Text -->
        <div class="text-center md:text-left flex-1">
            <h1 class="text-3xl sm:text-4xl md:text-5xl font-extrabold text-gray-800 dark:text-white leading-tight mb-6">
                Create Your Wedding Website in Minutes 🎉
            </h1>
            <p class="text-lg sm:text-xl text-gray-700 dark:text-gray-300 mb-8 leading-relaxed max-w-lg mx-auto md:mx-0">
                Join thousands of happy couples using <span class="font-semibold text-rose-500">Eazi Wedding</span> to plan, share, and celebrate their special day—effortlessly and beautifully.
            </p>
            <a href="#registerForm" class="inline-block bg-rose-500 hover:bg-rose-600 text-white font-semibold text-base sm:text-lg px-8 py-3 rounded-full shadow-lg transition">
                Start Your Journey
            </a>
        </div>

        <!-- Right: Register Form -->
        <div id="registerForm" class="flex-1 bg-white dark:bg-gray-800 p-8 rounded-xl shadow-lg w-full max-w-lg mx-auto">
            <h2 class="text-2xl font-bold text-gray-800 dark:text-white mb-6">Register</h2>

            <form method="POST" action="{{ route('register') }}" class="space-y-5">
                @csrf

                <div>
                    <label class="block text-gray-700 dark:text-gray-300 mb-1" for="name">Name</label>
                    <input name="name" id="name" type="text" value="{{ old('name') }}" placeholder="Your Name" class="w-full border border-gray-300 p-3 rounded focus:ring focus:ring-blue-200 dark:border-gray-600 dark:bg-gray-900 dark:text-white">
                    @error('name') <p class="text-red-500 text-sm mt-1">{{ $message }}</p> @enderror
                </div>

                <div>
                    <label class="block text-gray-700 dark:text-gray-300 mb-1" for="email">Email</label>
                    <input name="email" id="email" type="email" value="{{ old('email') }}" placeholder="Your Email" class="w-full border border-gray-300 p-3 rounded focus:ring focus:ring-blue-200 dark:border-gray-600 dark:bg-gray-900 dark:text-white">
                    @error('email') <p class="text-red-500 text-sm mt-1">{{ $message }}</p> @enderror
                </div>

                <div x-data="{ show: false }" class="relative">
                    <label class="block text-gray-700 dark:text-gray-300 mb-1" for="password">Password</label>
                    <input :type="show ? 'text' : 'password'" name="password" id="password" placeholder="Your Password" autocomplete="new-password" class="w-full border border-gray-300 p-3 rounded focus:ring focus:ring-blue-200 dark:border-gray-600 dark:bg-gray-900 dark:text-white pr-10">
                    <button type="button" class="absolute right-3 top-10 text-gray-500" @click="show = !show">
                        <i :class="show ? 'fa fa-eye-slash' : 'fa fa-eye'"></i>
                    </button>
                    @error('password') <p class="text-red-500 text-sm mt-1">{{ $message }}</p> @enderror
                </div>

                <div x-data="{ show: false }" class="relative">
                    <label class="block text-gray-700 dark:text-gray-300 mb-1" for="password_confirmation">Confirm Password</label>
                    <input :type="show ? 'text' : 'password'" name="password_confirmation" id="password_confirmation" placeholder="Confirm Password" class="w-full border border-gray-300 p-3 rounded focus:ring focus:ring-blue-200 dark:border-gray-600 dark:bg-gray-900 dark:text-white pr-10">
                    <button type="button" class="absolute right-3 top-10 text-gray-500" @click="show = !show">
                        <i :class="show ? 'fa fa-eye-slash' : 'fa fa-eye'"></i>
                    </button>
                </div>

                <button type="submit" class="bg-black hover:bg-[#a7923e] text-white font-semibold py-3 px-6 rounded transition-colors w-full">
                    Continue <i class="fa fa-paper-plane ml-2"></i>
                </button>
            </form>
        </div>

    </div>
</section>

@endsection
