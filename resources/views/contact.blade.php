@extends("layouts.app")

@section("content")

<section class="py-20 px-6 bg-white dark:bg-gray-900 text-center">
  <div class="max-w-3xl mx-auto">

    <h2 class="text-3xl md:text-4xl font-bold mb-4 text-gray-800 dark:text-white">
      Need Help? We're Here for You!
    </h2>

    <p class="text-gray-600 dark:text-gray-300 mb-8 text-lg">
      Whether you’re planning your big day or just getting started, we’re happy to assist. Our team is dedicated to making your wedding planning seamless and stress-free.
    </p>

    <div class="flex flex-col sm:flex-row items-center justify-center gap-6">

      <a href="mailto:support@yourweddingsite.com" 
         class="inline-block bg-black text-white rounded-full px-6 py-3 text-sm font-semibold hover:bg-gray-800 transition">
        📧 Email Us
      </a>

      <a href="https://wa.me/234XXXXXXXXXX" target="_blank"
         class="inline-block bg-green-500 text-white rounded-full px-6 py-3 text-sm font-semibold hover:bg-green-600 transition">
        💬 Chat on WhatsApp
      </a>

    </div>

    <p class="text-sm text-gray-500 dark:text-gray-400 mt-6">
      Response time: typically within 24 hours.
    </p>

  </div>
</section>
<div id="contact">

</div>

@endsection