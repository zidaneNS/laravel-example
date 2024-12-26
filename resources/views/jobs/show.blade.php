<x-layout>
    <x-slot:title>{{ $job->name }}</x-slot:title>
    <h1 class="text-slate-700 text-xl">{{ $job->name }}</h1>
    <p class="text-slate-500">You will get paid ${{ $job->pay }}/year</p>
    <div class="flex justify-between items-center">
        <a href="/jobs" class="hover:underline"><< Back</a>
        <a href="/jobs/{{ $job->id}}/edit" class="border border-blue-800 text-blue-800 hover:text-slate-50 hover:bg-blue-800 px-2 py-2 rounded-lg">Update</a>
        <x-delete-form>{{ $job->id }}</x-delete-form>
    </div>
</x-layout>