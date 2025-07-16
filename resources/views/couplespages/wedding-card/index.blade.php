@extends('layouts.couples')

@section('content')
<section class="bg-white dark:bg-gray-900 text-gray-900 dark:text-white py-10 px-4">
    <div class="max-w-4xl mx-auto space-y-10">

        {{-- Page Heading --}}
        <div class="text-center">
            <h2 class="text-3xl font-bold">💌 Wedding Card Editor</h2>
            <p class="text-gray-500 dark:text-gray-400 mt-2">Customize your invitation and design your perfect wedding card.</p>
        </div>

        {{-- Form --}}
        <form action="{{ route('wedding-card.save') }}" method="POST" enctype="multipart/form-data" class="space-y-8">
            @csrf

            {{-- Invitation Text --}}
            <div>
                <label for="invitation_text" class="block text-sm font-medium mb-2">Invitation Text</label>
                <textarea id="invitation_text" name="invitation_text" rows="6"
                          class="w-full px-4 py-3 rounded-lg bg-gray-100 dark:bg-gray-800 border border-gray-300 dark:border-gray-600 focus:ring-2 focus:ring-yellow-400 focus:outline-none"
                          placeholder="You're invited to celebrate the wedding of Joy & Kunle...">{{ old('invitation_text') }}</textarea>
            </div>

            {{-- Theme / Template Selection --}}
            <div>
                <label for="theme" class="block text-sm font-medium mb-2">Select a Theme</label>
                <select id="theme" name="theme"
                        class="w-full px-4 py-3 rounded-lg bg-gray-100 dark:bg-gray-800 border border-gray-300 dark:border-gray-600 focus:ring-2 focus:ring-yellow-400 focus:outline-none">
                    <option value="classic">🌿 Classic</option>
                    <option value="modern">✨ Modern</option>
                    <option value="romantic">💖 Romantic</option>
                    <option value="floral">🌸 Floral</option>
                </select>
            </div>

            {{-- Couple Photo Upload --}}
            <div>
                <label for="photo" class="block text-sm font-medium mb-2">Upload Couple Photo</label>
                <input type="file" name="photo" id="photo"
                       class="block w-full text-sm text-gray-500 file:mr-4 file:py-2 file:px-4
                              file:rounded-full file:border-0
                              file:text-sm file:font-semibold
                              file:bg-yellow-400 file:text-black
                              hover:file:bg-yellow-300" />
            </div>

            {{-- Action Buttons --}}
            <div class="flex flex-wrap gap-4">
                <button type="submit" class="bg-[#FFD736] text-black font-semibold px-6 py-2 rounded hover:bg-yellow-300 transition">
                    💾 Save & Preview
                </button>
                <a href="{{ route('wedding-card.download') }}" class="bg-blue-600 text-white px-6 py-2 rounded hover:bg-blue-700 transition">
                    📄 Download PDF
                </a>
                <a href="{{ route('wedding-card.share') }}" class="bg-green-600 text-white px-6 py-2 rounded hover:bg-green-700 transition">
                    🔗 Share Digitally
                </a>
            </div>

        </form>

    </div>
</section>


@endsection