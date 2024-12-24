<x-layout>
    <x-slot:title>{{ $job["name"] }}</x-slot:title>
    <h1 class="text-slate-700 text-xl">{{ $job["name"] }}</h1>
    <p class="text-slate-500">You will get paid ${{ $job["pay"] }}/year</p>
    <a href="/jobs" class="text-teal-700 hover:underline"><< Back</a>
</x-layout>