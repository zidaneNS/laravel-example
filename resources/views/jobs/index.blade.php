<x-layout>
    <x-slot:title>Jobs</x-slot:title>
    <x-button href="jobs/create" class="mb-3">Add Job</x-button>
    <ul class="space-y-4">
        @foreach ($joblist as $job)
            <li class="block px-4 py-6 text-xs rounded-lg border border-gray-400">
                <p class="block text-xl text-slate-900">{{ $job->name }}: {{ $job->pay }}/year</p>
                <p class="block text-lg text-slate-600">{{ $job->employer->name }}</p>
                <a href="/jobs/{{ $job["id"] }}" class="block text-sm text-teal-700 hover:underline">View More >></a>
            </li>
        @endforeach
    </ul>
    <div class="my-4">
        {{ $joblist->links() }}
    </div>
</x-layout>
