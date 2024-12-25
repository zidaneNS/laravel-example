<x-layout>
    <x-slot:title>Jobs</x-slot:title>
    <ul class="space-y-4">
        @foreach ($jobs as $job)
            <li class="block px-4 py-6 text-xs rounded-lg border border-gray-400">
                <p class="block text-xl text-slate-900">{{ $job["name"] }}: {{ $job["pay"] }}/year</p>
                <p class="block text-lg text-slate-600">{{ $job->employer->name }}</p>
                <a href="/job/{{ $job["id"] }}" class="block text-sm text-teal-700 hover:underline">View More >></a>
            </li>
        @endforeach
    </ul>
    <div class="my-4">
        {{ $jobs->links() }}
    </div>
</x-layout>
