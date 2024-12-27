<x-layout>
    <x-slot:title>{{ $joblist->name }}</x-slot:title>
    <h1 class="text-slate-700 text-xl">{{ $joblist->name }}</h1>
    <p class="text-slate-500">You will get paid ${{ $joblist->pay }}/year</p>
    <div class="flex justify-between items-center">
        <a href="/jobs" class="hover:underline"><< Back</a>
        @can('update', $joblist)
            <a href="/jobs/{{ $joblist->id}}/edit" class="border border-blue-800 text-blue-800 hover:text-slate-50 hover:bg-blue-800 px-2 py-2 rounded-lg">Update</a>
            <x-form-delete>{{ $joblist->id }}</x-form-delete>
        @endcan
        </div>
</x-layout>