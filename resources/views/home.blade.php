@extends('layouts.couples')

@section('content')

<section class="bg-white dark:bg-gray-900 text-gray-900 dark:text-white py-10 px-4">
    <div class="max-w-7xl mx-auto space-y-6">

        {{-- Greeting --}}
        <div class="text-center">
            <h2 class="text-2xl md:text-3xl font-bold">Hello, Legend 👋</h2>
            <p class="text-gray-500 dark:text-gray-400 mt-1">Welcome back! You currently manage <span class="font-semibold text-gray-700 dark:text-white">5 wedding pages</span>.</p>
        </div>

        {{-- Summary Stats --}}
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6">
            {{-- Total Weddings --}}
            <div class="bg-gray-100 dark:bg-gray-800 p-5 rounded-lg shadow-sm">
                <div class="flex items-center gap-3 mb-2">
                    <i class="fa fa-heart text-red-500 text-xl"></i>
                    <span class="font-medium">Weddings Created</span>
                </div>
                <p class="text-2xl font-bold text-gray-900 dark:text-white">5</p>
                <p class="text-sm text-gray-500">Total weddings you’ve created</p>
            </div>

            {{-- Upcoming This Month --}}
            <div class="bg-gray-100 dark:bg-gray-800 p-5 rounded-lg shadow-sm">
                <div class="flex items-center gap-3 mb-2">
                    <i class="fa fa-calendar-day text-blue-500 text-xl"></i>
                    <span class="font-medium">This Month</span>
                </div>
                <p class="text-2xl font-bold text-gray-900 dark:text-white">2</p>
                <p class="text-sm text-gray-500">Weddings scheduled this month</p>
            </div>

            {{-- Pending RSVPs --}}
            <div class="bg-gray-100 dark:bg-gray-800 p-5 rounded-lg shadow-sm">
                <div class="flex items-center gap-3 mb-2">
                    <i class="fa fa-envelope-open-text text-yellow-500 text-xl"></i>
                    <span class="font-medium">Pending RSVPs</span>
                </div>
                <p class="text-2xl font-bold text-gray-900 dark:text-white">17</p>
                <p class="text-sm text-gray-500">Guests yet to confirm</p>
            </div>

            {{-- Milestone --}}
            <div class="bg-green-100 dark:bg-green-900 text-green-900 dark:text-green-200 p-5 rounded-lg shadow-sm">
                <div class="flex items-center gap-3 mb-2">
                    <i class="fa fa-trophy text-green-600 dark:text-green-300 text-xl"></i>
                    <span class="font-medium">🎉 Milestone</span>
                </div>
                <p class="text-base font-semibold">You just created your <span class="text-lg font-bold">10<sup>th</sup></span> wedding!</p>
            </div>
        </div>

        {{-- Optional Quick Actions (if needed) --}}
        
        <div class="bg-gray-50 dark:bg-gray-800 rounded-lg shadow-md p-6">
            <h3 class="text-lg font-semibold mb-4">Quick Actions</h3>
            <div class="flex flex-wrap gap-4">
                <a href="/user/weddings/create" class="bg-black text-white font-medium px-4 py-2 rounded hover:bg-yellow-400 transition">+ Add New Wedding</a>
                <a href="/user/weddings" class="bg-gray-200 dark:bg-gray-700 text-black dark:text-white font-medium px-4 py-2 rounded hover:bg-gray-300 dark:hover:bg-gray-600 transition">📋 View All Weddings</a>
            </div>
        </div>
       
        
    </div>
</section>

@endsection
