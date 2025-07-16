@extends('layouts.couples')

@section('content')

<section class="bg-white dark:bg-gray-900 text-gray-900 dark:text-white py-10 px-4">
    <div class="max-w-7xl mx-auto space-y-6">

        <div class="flex justify-between items-center">
            <h3 class="text-xl font-semibold">📅 Recent Weddings</h3>
            <a href="/weddings" class="text-sm text-blue-600 hover:underline">View All</a>
        </div>

        <div class="overflow-x-auto bg-gray-50 dark:bg-gray-800 rounded-lg shadow">
            <table class="min-w-full text-sm text-left whitespace-nowrap">
                <thead class="bg-gray-100 dark:bg-gray-700 text-gray-700 dark:text-gray-200 uppercase text-xs">
                    <tr>
                        <th class="px-6 py-4">#</th>
                        <th class="px-6 py-4">Couple Name</th>
                        <th class="px-6 py-4">Wedding Date</th>
                        <th class="px-6 py-4">RSVPs</th>
                        <th class="px-6 py-4">Status</th>
                        <th class="px-6 py-4 text-right">Actions</th>
                    </tr>
                </thead>
                <tbody class="divide-y divide-gray-200 dark:divide-gray-700">
                    @foreach ($weddings as $index => $wedding)
                        <tr>
                            <td class="px-6 py-4">{{ $index + 1 }}</td>
                            <td class="px-6 py-4 font-medium">
                               {{ "{$wedding->groom_name} & {$wedding->bride_name}" }}
                           </td>
                            <td class="px-6 py-4">{{ \Carbon\Carbon::parse($wedding->date)->format('M d, Y') }}</td>
                            <td class="px-6 py-4">{{ $wedding->rsvp_count ?? 0 }}</td>
                            <td class="px-6 py-4">
                                @if(\Carbon\Carbon::parse($wedding->date)->isPast())
                                    <span class="text-red-500">Completed</span>
                                @else
                                    <span class="text-green-500">Upcoming</span>
                                @endif
                            </td>
                            <td class="px-6 py-4 text-right space-x-2">
                                <a href="/weddings/{{ $wedding->id }}/edit" class="text-yellow-500 hover:underline">Edit</a>
                                <a href="/weddings/{{ $wedding->id }}/preview" class="text-blue-500 hover:underline">Preview</a>
                                <a href="/weddings/{{ $wedding->id }}/rsvp" class="text-purple-500 hover:underline">RSVPs</a>
                            </td>
                        </tr>
                    @endforeach

                    @if($weddings->isEmpty())
                        <tr>
                            <td colspan="6" class="px-6 py-6 text-center text-gray-500 dark:text-gray-400">No weddings created yet.</td>
                        </tr>
                    @endif
                </tbody>
            </table>
        </div>

    </div>
</section>


@endsection