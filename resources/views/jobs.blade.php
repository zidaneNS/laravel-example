<x-layout>
    <x-slot:title>Jobs</x-slot:title>
    <ul>
        @foreach ($jobs as $job)
            <li>
                {{ $job["name"] }}: {{ $job["pay"] }}/year
            </li>
            <a href="/job/{{ $job["id"] }}" class="text-teal-700 hover:underline">View More >></a>
        @endforeach
    </ul>
</x-layout>