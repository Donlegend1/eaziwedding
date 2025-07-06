@extends('layouts.app')

@section('content')

<section class="min-h-screen flex flex-col md:flex-row items-stretch bg-gradient-to-r from-blue-50 via-purple-50 to-pink-50 dark:from-gray-800 dark:to-gray-900 px-4 py-10">

  <!-- Left Side Content -->
  <div class="w-full md:w-1/2 flex flex-col justify-center items-start text-left p-8 md:p-12">
    <h1 class="text-4xl font-extrabold text-gray-800 dark:text-white leading-tight mb-4">
      Welcome Back 💍
    </h1>
    <p class="text-lg text-gray-600 dark:text-gray-300 mb-6 max-w-md">
      Log in to access your personalized wedding website and manage your event effortlessly. We're here to make every step special.
    </p>
    <img src="/images/flowers.jpg" alt="Wedding Banner" class="rounded-xl shadow-lg hidden md:block w-full max-w-md">
  </div>

  <!-- Right Side Form -->
  <div class="w-full md:w-1/2 flex items-center justify-center">
    <div class="w-full max-w-md bg-white dark:bg-gray-800 rounded-2xl shadow-lg p-8">

      <h2 class="text-3xl font-bold text-center text-gray-800 dark:text-white mb-6">
        {{ __('Login to Your Account') }}
      </h2>

      <form method="POST" action="{{ route('login') }}" class="space-y-5">
        @csrf

        <!-- Email -->
        <div>
          <label for="email" class="block text-gray-700 dark:text-gray-300 mb-1">{{ __('Email Address') }}</label>
          <input
            type="email"
            name="email"
            id="email"
            placeholder="you@example.com"
            value="{{ old('email') }}"
            required
            class="w-full px-4 py-3 border border-gray-300 dark:border-gray-600 rounded-md bg-white dark:bg-gray-700 text-gray-800 dark:text-white focus:outline-none focus:ring-2 focus:ring-rose-400"
          />
          @error('email')
            <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
          @enderror
        </div>

        <!-- Password -->
        <div x-data="{ show: false }" class="relative">
          <label for="password" class="block text-gray-700 dark:text-gray-300 mb-1">{{ __('Password') }}</label>
          <input
            :type="show ? 'text' : 'password'"
            name="password"
            id="password"
            placeholder="********"
            required
            class="w-full px-4 py-3 border border-gray-300 dark:border-gray-600 rounded-md bg-white dark:bg-gray-700 text-gray-800 dark:text-white focus:outline-none focus:ring-2 focus:ring-rose-400"
          />
          <button type="button" @click="show = !show" class="absolute right-3 top-[2.6rem] text-gray-500">
            <i :class="show ? 'fa fa-eye-slash' : 'fa fa-eye'"></i>
          </button>
          @error('password')
            <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
          @enderror
        </div>

        <!-- Remember & Forgot -->
        <div class="flex items-center justify-between text-sm text-gray-600 dark:text-gray-400">
          <label class="flex items-center gap-2">
            <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }} class="rounded border-gray-400 focus:ring-rose-400">
            {{ __('Remember Me') }}
          </label>
          @if (Route::has('password.request'))
            <a href="{{ route('password.request') }}" class="hover:underline text-rose-500">{{ __('Forgot Password?') }}</a>
          @endif
        </div>

        <!-- Login Button -->
        <button type="submit" class="w-full bg-black hover:bg-[#a7923e] text-white font-semibold py-3 rounded-lg shadow transition">
          {{ __('Login') }}
        </button>
      </form>

      <div class="mt-6 text-center text-sm text-gray-600 dark:text-gray-400">
        {{ __("Don't have an account?") }}
        <a href="/plans" class="text-rose-500 hover:underline font-medium">Sign up</a>
      </div>

    </div>
  </div>

</section>

@endsection
