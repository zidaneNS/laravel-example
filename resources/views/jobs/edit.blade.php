<x-layout>
  <x-slot:title>Create Job</x-slot:title>
  <form method="POST" action="/jobs/{{ $joblist->id }}">
      @csrf
      @method("PUT")
      <x-form-placeholder>Fill this field to edit job</x-form-placeholder>
      <x-form-input name="name" type="text" value="{{ $joblist->name }}">Name</x-form-input>
      <x-form-input name="pay" type="text" value="{{ $joblist->pay }}">Salary</x-form-input>

      <x-form-button-group>
        <x-form-cancel href="/jobs/{{ $joblist->id }}" >Cancel</x-form-cancel>
        <x-form-submit>Save</x-form-submit>
      </x-form-button-group>
    </form>
</x-layout>