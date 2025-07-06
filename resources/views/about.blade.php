@extends("layouts.app")

@section("content")
<section class="relative bg-cover bg-center min-h-[80vh] flex items-center justify-center text-center px-6" style="background-image: url('/images/flowers.jpg');">
  <div class="absolute inset-0 bg-black/40"></div>

  <div class="relative z-10 max-w-3xl text-white">
    <h1 class="text-3xl sm:text-4xl md:text-5xl font-bold leading-tight mb-6">
      We're here to make your wedding unforgettable.
    </h1>
    <p class="text-lg sm:text-xl mb-8 text-gray-200">
      Helping couples create personalized, beautiful wedding websites and invitations — effortlessly.
    </p>
    <a href="/register" class="inline-block bg-black text-white px-8 py-3 rounded-full font-semibold hover:bg-gray-800 transition">
      Start Your Journey
    </a>
  </div>
</section>
<section class="bg-white dark:bg-gray-900 py-20 px-6">
  <div class="max-w-6xl mx-auto flex flex-col md:flex-row items-center gap-10">

    <!-- Image -->
    {{-- <div class="md:w-1/2">
      <img src="/images/wedding-story.jpg" alt="Our Mission" class="rounded-2xl shadow-lg w-full object-cover">
    </div> --}}

    <!-- Text Content -->
    <div class=" text-gray-800 dark:text-gray-200">
      <h2 class="text-3xl md:text-4xl font-bold mb-6">Our Story</h2>
      <p class="text-lg mb-4 leading-relaxed">
        The inspiration behind this platform came from witnessing how stressful, time-consuming, and expensive the wedding planning process can be for so many couples.
      </p>
      <p class="text-lg mb-4 leading-relaxed">
        From endless vendor searches to costly invitation printing, we realized that couples deserve an easier way to manage their special day—without unnecessary expenses or hassle.
      </p>
      <p class="text-lg leading-relaxed">
        That’s why we created this solution: a simple, all-in-one platform that helps couples design personalized wedding websites, share their stories, manage invites, and keep costs low—while focusing on what truly matters: the celebration of love.
      </p>
    </div>

  </div>

  <!-- Optional Timeline -->
  <div class="mt-16">
    <div class="flex flex-col md:flex-row justify-center items-center gap-8">

      <div class="text-center">
        <div class="w-12 h-12 rounded-full bg-rose-500 text-white flex items-center justify-center mx-auto mb-3">1</div>
        <p class="font-semibold text-gray-800 dark:text-white">The Problem</p>
        <p class="text-sm text-gray-600 dark:text-gray-400">Weddings are often stressful and expensive.</p>
      </div>

      <div class="hidden md:block w-10 border-t border-gray-400"></div>

      <div class="text-center">
        <div class="w-12 h-12 rounded-full bg-rose-500 text-white flex items-center justify-center mx-auto mb-3">2</div>
        <p class="font-semibold text-gray-800 dark:text-white">The Vision</p>
        <p class="text-sm text-gray-600 dark:text-gray-400">Make wedding planning simple, digital, and affordable.</p>
      </div>

      <div class="hidden md:block w-10 border-t border-gray-400"></div>

      <div class="text-center">
        <div class="w-12 h-12 rounded-full bg-rose-500 text-white flex items-center justify-center mx-auto mb-3">3</div>
        <p class="font-semibold text-gray-800 dark:text-white">The Solution</p>
        <p class="text-sm text-gray-600 dark:text-gray-400">A modern platform to manage everything in one place.</p>
      </div>

    </div>
  </div>
</section>
<section class="py-20 px-6 bg-white dark:bg-gray-900 text-center">
  <div class="max-w-5xl mx-auto">
    <h2 class="text-3xl md:text-4xl font-bold mb-10 text-gray-800 dark:text-white">
      What We Do
    </h2>
    <p class="text-gray-600 dark:text-gray-300 mb-12 max-w-2xl mx-auto">
      Our platform is designed to make every couple’s wedding journey effortless, beautiful, and memorable—without the stress.
    </p>

    <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-8 text-left">
      
      <div class="flex items-start space-x-4">
        <div class="text-rose-500 text-3xl">🖼️</div>
        <div>
          <h3 class="font-semibold text-gray-800 dark:text-white mb-1">Customizable Wedding Websites</h3>
          <p class="text-sm text-gray-600 dark:text-gray-300">
            Build a beautiful, personalized wedding page to share with family and friends.
          </p>
        </div>
      </div>

      <div class="flex items-start space-x-4">
        <div class="text-rose-500 text-3xl">📩</div>
        <div>
          <h3 class="font-semibold text-gray-800 dark:text-white mb-1">Digital & Downloadable Invitations</h3>
          <p class="text-sm text-gray-600 dark:text-gray-300">
            Send stylish invites digitally or download printable versions anytime.
          </p>
        </div>
      </div>

      <div class="flex items-start space-x-4">
        <div class="text-rose-500 text-3xl">🗓️</div>
        <div>
          <h3 class="font-semibold text-gray-800 dark:text-white mb-1">Event Scheduling</h3>
          <p class="text-sm text-gray-600 dark:text-gray-300">
            Keep guests informed with event dates, times, and activity timelines.
          </p>
        </div>
      </div>

      <div class="flex items-start space-x-4">
        <div class="text-rose-500 text-3xl">🧭</div>
        <div>
          <h3 class="font-semibold text-gray-800 dark:text-white mb-1">Venue Maps & Directions</h3>
          <p class="text-sm text-gray-600 dark:text-gray-300">
            Share interactive maps so guests can easily find your venue.
          </p>
        </div>
      </div>

      <div class="flex items-start space-x-4">
        <div class="text-rose-500 text-3xl">📷</div>
        <div>
          <h3 class="font-semibold text-gray-800 dark:text-white mb-1">Photo Gallery</h3>
          <p class="text-sm text-gray-600 dark:text-gray-300">
            Showcase engagement, pre-wedding, or event photos in a beautiful gallery.
          </p>
        </div>
      </div>

      <div class="flex items-start space-x-4">
        <div class="text-rose-500 text-3xl">📝</div>
        <div>
          <h3 class="font-semibold text-gray-800 dark:text-white mb-1">RSVP Collection & Management</h3>
          <p class="text-sm text-gray-600 dark:text-gray-300">
            Easily collect RSVPs online and manage your guest list in one place.
          </p>
        </div>
      </div>

    </div>
  </div>
</section>
<section class="py-20 px-6 bg-gray-50 dark:bg-gray-900 text-center">
  <div class="max-w-4xl mx-auto">
    <h2 class="text-3xl md:text-4xl font-bold mb-6 text-gray-800 dark:text-white">
      Our Mission & Values
    </h2>
    <p class="text-gray-600 dark:text-gray-300 mb-12 text-lg max-w-3xl mx-auto">
      Our mission is simple: <span class="font-semibold text-gray-800 dark:text-white">To simplify wedding planning with beautiful, accessible tools for every couple.</span>
      We believe every love story deserves to be celebrated effortlessly, creatively, and inclusively.
    </p>

    <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-4 gap-8 text-left">
      
      <div class="flex flex-col items-center text-center">
        <div class="text-4xl mb-3 text-rose-500 dark:text-yellow-400">✨</div>
        <h3 class="font-semibold text-gray-800 dark:text-white mb-2">Simplicity</h3>
        <p class="text-sm text-gray-600 dark:text-gray-300">
          We design with ease of use in mind, so you can focus on what matters most—your big day.
        </p>
      </div>

      <div class="flex flex-col items-center text-center">
        <div class="text-4xl mb-3 text-rose-500 dark:text-yellow-400">🎨</div>
        <h3 class="font-semibold text-gray-800 dark:text-white mb-2">Creativity</h3>
        <p class="text-sm text-gray-600 dark:text-gray-300">
          Every couple is unique. Our tools let you showcase your style in every detail.
        </p>
      </div>

      <div class="flex flex-col items-center text-center">
        <div class="text-4xl mb-3 text-rose-500 dark:text-yellow-400">🔒</div>
        <h3 class="font-semibold text-gray-800 dark:text-white mb-2">Reliability</h3>
        <p class="text-sm text-gray-600 dark:text-gray-300">
          Dependable service that ensures your wedding details are always accessible and secure.
        </p>
      </div>

      <div class="flex flex-col items-center text-center">
        <div class="text-4xl mb-3 text-rose-500 dark:text-yellow-400">🤝</div>
        <h3 class="font-semibold text-gray-800 dark:text-white mb-2">Inclusivity</h3>
        <p class="text-sm text-gray-600 dark:text-gray-300">
          We celebrate love in all its forms, creating space for every couple, every story.
        </p>
      </div>

    </div>
  </div>
</section>
@include('components.testimonial')
@include('components.conversion')

@endsection