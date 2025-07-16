@extends('layouts.couples')

@section('content')

<section class="max-w-4xl mx-auto px-4 py-10">
    <h2 class="text-2xl font-bold mb-6">🎉 Create a New Wedding</h2>

    <form method="POST" action="{{ route('weddings.store') }}" enctype="multipart/form-data" class="space-y-6 bg-white shadow-md rounded-lg p-6">
        @csrf

        {{-- Couple Names --}}
        <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
            <div>
                <label for="groom_name" class="block font-medium">Groom Name</label>
                <input type="text" name="groom_name" id="groom_name" required class="form-input w-full mt-1" value="{{ old('groom_name') }}">
            </div>
            <div>
                <label for="bride_name" class="block font-medium">Bride Name</label>
                <input type="text" name="bride_name" id="bride_name" required class="form-input w-full mt-1" value="{{ old('bride_name') }}">
            </div>
        </div>

        {{-- Wedding Date & Time --}}
        <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
            <div>
                <label for="wedding_date" class="block font-medium">Wedding Date</label>
                <input type="date" name="wedding_date" id="wedding_date" required class="form-input w-full mt-1" value="{{ old('wedding_date') }}">
            </div>
            <div>
                <label for="wedding_time" class="block font-medium">Wedding Time (optional)</label>
                <input type="time" name="wedding_time" id="wedding_time" class="form-input w-full mt-1" value="{{ old('wedding_time') }}">
            </div>
        </div>

        {{-- Venue --}}
        <div>
            <label for="venue_name" class="block font-medium">Venue Name</label>
            <input type="text" name="venue_name" id="venue_name" class="form-input w-full mt-1" value="{{ old('venue_name') }}">
        </div>
        <div>
            <label for="venue_address" class="block font-medium">Venue Address</label>
            <textarea name="venue_address" id="venue_address" class="form-textarea w-full mt-1">{{ old('venue_address') }}</textarea>
        </div>
        <div>
            <label for="google_map_link" class="block font-medium">Google Map Link</label>
            <input type="url" name="google_map_link" id="google_map_link" class="form-input w-full mt-1" value="{{ old('google_map_link') }}">
        </div>

        {{-- Invitation --}}
        <div>
            <label for="invitation_message" class="block font-medium">Invitation Message</label>
            <textarea name="invitation_message" id="invitation_message" rows="4" class="form-textarea w-full mt-1">{{ old('invitation_message') }}</textarea>
        </div>

        {{-- RSVP Deadline --}}
        <div>
            <label for="rsvp_deadline" class="block font-medium">RSVP Deadline (optional)</label>
            <input type="date" name="rsvp_deadline" id="rsvp_deadline" class="form-input w-full mt-1" value="{{ old('rsvp_deadline') }}">
        </div>

        {{-- Theme --}}
        <div>
            <label for="theme" class="block font-medium">Select Theme</label>
            <select name="theme" id="theme" class="form-select w-full mt-1">
                <option value="default">Default</option>
                <option value="classic">Classic</option>
                <option value="floral">Floral</option>
                <option value="elegant">Elegant</option>
            </select>
        </div>

        {{-- Cover Photo --}}
        <div>
            <label for="cover_photo" class="block font-medium">Upload Cover Photo</label>
            <input type="file" name="cover_photo" id="cover_photo" class="form-input w-full mt-1">
        </div>

        {{-- Visibility --}}
        <div class="flex items-center space-x-2">
            <input type="checkbox" name="is_published" id="is_published" class="form-checkbox" {{ old('is_published') ? 'checked' : '' }}>
            <label for="is_published" class="text-sm text-gray-700">Make wedding page live</label>
        </div>

        {{-- Submit --}}
        <div>
            <button type="submit" class="bg-yellow-500 hover:bg-yellow-600 text-white font-bold px-6 py-2 rounded">
                Create Wedding
            </button>
        </div>
    </form>
</section>

@endsection